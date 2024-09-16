<?php
namespace App\Http\Controllers\Callback;

use App\Models\Gig;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\GigUpgrade;
use App\Models\ProjectPlan;
use Illuminate\Support\Str;
use App\Models\OrderInvoice;
use Illuminate\Http\Request;
use App\Models\DepositWebhook;
use App\Models\CheckoutWebhook;
use App\Models\OrderItemUpgrade;
use App\Models\ProjectBidUpgrade;
use App\Models\DepositTransaction;
use App\Models\ProjectSubscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\AutomaticPaymentGateway;
use App\Notifications\User\Buyer\OrderPlaced;
use App\Notifications\User\Seller\PendingOrder;
use App\Jobs\Main\Post\Project\SendAlertToFreelancers;

class NowpaymentsController extends Controller
{
    public $gateway = "nowpayments";
    public $status  = "paid";
    public $settings;


    /**
     * Payment canceled
     *
     * @param Request $request
     * @return void
     */
    public function cancel(Request $request)
    {
        return redirect('/');
    }


    /**
     * Payment gateway callback
     *
     * @param Request $request
     * @return mixed
     */
    public function success(Request $request)
    {
        try {
            
            // Get payment gateway settings
            $settings       = AutomaticPaymentGateway::where('slug', $this->gateway)
                                                     ->where('is_active', true)
                                                     ->firstOrFail();

            // Set settings
            $this->settings = $settings;

            // Get transaction id
            $payment_id     = $request->get('NP_id');

            // Check webhook event
            if ( $payment_id ) {

                // Check if payment succeeded
                $response = $this->verify($payment_id);
                
                // Check if payment succeeded
                if ( is_array($response) && $response['success'] === TRUE) {

                    // Set order id
                    $order_id = $response['response']['order_id'];

                    // Check if deposit callback
                    if (Str::startsWith($order_id, "DD")) {
                        
                        // Get saved webhook data in our database
                        $data = DepositWebhook::where('payment_id', $order_id)
                                                ->where('payment_method', $this->gateway)
                                                ->where('status', 'pending')
                                                ->firstOrFail();
        
                        // Handle deposit callback
                        $this->deposit($data->user_id, $data->amount, $order_id);

                        // Delete saved webhook data in our database
                        $data->delete();

                        // Redirecting
                        return $this->redirect('deposit');

                    }
    
                    // Check if checkout callback
                    if (Str::startsWith($order_id, "GG")) {
                        
                        // Get saved webhook data in our database
                        $data = CheckoutWebhook::where('payment_id', $order_id)
                                                ->where('payment_method', $this->gateway)
                                                ->where('status', 'pending')
                                                ->firstOrFail();
    
                        // Get cart
                        $cart = $data->data['cart'];
    
                        // Get user
                        $user = User::where('id', $data->data['buyer_id'])->firstOrFail();
        
                        // Handle deposit callback
                        $this->checkout($cart, $user, $order_id);

                        // Delete saved webhook data in our database
                        $data->delete();

                        // Redirecting
                        return $this->redirect('gigs');
    
                    }

                    // Check if projects checkout callback
                    if (Str::startsWith($order_id, "PP")) {
                        
                        // Get subscription
                        $subscription = ProjectSubscription::where('payment_id', $order_id)
                                                            ->where('status', 'pending')
                                                            ->where('payment_method', $this->gateway)
                                                            ->with('project')
                                                            ->firstOrFail();
    
                        // Hande project promoting checkout
                        $this->project($subscription);

                        // Redirecting
                        return $this->redirect('projects');
    
                    }

                    // Check if projects checkout callback
                    if (Str::startsWith($order_id, "BB")) {
                        
                        // Get subscription
                        $subscription = ProjectBidUpgrade::where('payment_id', $order_id)
                                            ->where('status', 'pending')
                                            ->where('payment_method', $this->gateway)
                                            ->with('bid')
                                            ->firstOrFail();
    
                        // Hande bid promoting checkout
                        $this->bid($subscription);

                        // Redirecting
                        return $this->redirect('bids');
    
                    }

                }

            }

            // In case failed redirect to home page
            return redirect('/');

        } catch (\Throwable $th) {

            // Error
            throw $th;

        }
    }


    /**
     * Verify if payment succeeded
     *
     * @param string $id
     * @return array
     */
    private function verify($id)
    {
        try {

            // Set new client request
            $client       = new \GuzzleHttp\Client();
                        
            // Set headers
            $headers      = [
                'x-api-key'    => $this->settings?->settings['api_key'],
                'Content-Type' => 'application/json'
            ];

            // Set request link
            $request_link = $this->settings?->settings['env'] === 'sandbox' ? $this->settings?->settings['sandbox_link'] : $this->settings?->settings['production_link'] ;
            
            // Remove slash from url
            $request_link = rtrim($request_link, "/");
            
            // Send request
            $request      = new \GuzzleHttp\Psr7\Request('Get', "$request_link/payment/$id", $headers);

            // Get response
            $res          = $client->sendAsync($request)->wait();

            // Get resutls
            $data         = json_decode($res->getBody(), true);

            // Check if payment succeeded
            if ( is_array($data) && in_array($data['payment_status'], ['finished', 'sending', 'confirmed']) ) {
                    
                // Done
                return [
                    'success'  => true,
                    'response' => $data
                ];

            } else {

                // Failed
                return [
                    'success' => false,
                    'message' => __('messages.t_error_stripe_payment_failed')
                ];

            }
            
        } catch (\Throwable $th) {
            
            // Error
            return [
                'success' => false,
                'message' => __('messages.t_toast_something_went_wrong')
            ];

        }
    }


    /**
     * Deposit funds into user's account
     *
     * @param int $user_id
     * @param mixed $amount
     * @param string $payment_id
     * @return void
     */
    private function deposit($user_id, $amount, $payment_id)
    {
        try {
            
            // Set amount
            $amount                  = convertToNumber($amount);
            
            // Calculate fee from this amount
            $fee                     = convertToNumber($this->fee('deposit', $amount)); 

            // Make transaction
            $deposit                 = new DepositTransaction();
            $deposit->user_id        = $user_id;
            $deposit->transaction_id = $payment_id;
            $deposit->payment_method = $this->gateway;
            $deposit->amount_total   = $amount;
            $deposit->amount_fee     = $fee;
            $deposit->amount_net     = $amount - $fee;
            $deposit->currency       = $this->settings->currency;
            $deposit->exchange_rate  = $this->settings->exchange_rate;
            $deposit->status         = $this->status;
            $deposit->ip_address     = request()->ip();
            $deposit->save();

            // Get user
            $user                    = User::where('id', $user_id)->firstOrFail();

            // Add funds
            $user->balance_available = convertToNumber($user->balance_available) + convertToNumber($deposit->amount_net);
            $user->save();

            // Send  a notification
            $this->notification('deposit', $user);

        } catch (\Throwable $th) {

            // Error
            throw $th;

        }
    }


    /**
     * Checkout
     *
     * @param array $cart
     * @param object $user
     * @param string $payment_id
     * @return void
     */
    private function checkout($cart, $user, $payment_id)
    {
        try {

            // Set empty variables
            $subtotal = 0;
            $total    = 0;
            $tax      = 0;
            $fee      = 0;

            // Loop through items in cart
            foreach ($cart as $key => $item) {
                    
                // Add gig price to subtotal
                $subtotal += convertToNumber($item['gig']['price']) * convertToNumber($item['quantity']);

                // Check if item has upgrades
                $upgrades  = $item['upgrades'];

                // Loop through upgrades
                if ( isset($upgrades) && is_array($upgrades) && count($upgrades) ) {
                    
                    // Loop through upgrades
                    foreach ($upgrades as $j => $upgrade) {
                        
                        // Check if upgrade checked
                        if ( isset($upgrade['checked']) && $upgrade['checked'] == 1 ) {
                            
                            // Add upgrade price to subtotal
                            $subtotal += convertToNumber($upgrade['price']) * convertToNumber($item['quantity']);

                        }

                    }

                }

            }

            // Get commission settings
            $commission_settings = settings('commission');

            // Check if taxes enabled
            if ($commission_settings->enable_taxes) {
                
                // Check if type of taxes percentage
                if ($commission_settings->tax_type === 'percentage') {
                    
                    // Set tax amount
                    $tax       = convertToNumber(bcmul($subtotal, $commission_settings->tax_value) / 100);

                } else {
                    
                    // Set tax amount
                    $tax       = convertToNumber($commission_settings->tax_value);

                }

            }

            // Calculate payment gateway fee
            $fee                   = convertToNumber($this->fee( 'gigs', $subtotal ));
            
            // Calculate total price
            $total                 = $subtotal + $tax + $fee;
        
            // Get user billing address
            $billing_info          = $user->billing;

            // Set unique id for this order
            $uid                   = uid();

            // Get buyer id
            $buyer_id              = $user->id;

            // Save order
            $order                 = new Order();
            $order->uid            = $uid;
            $order->buyer_id       = $buyer_id;
            $order->total_value    = $total;
            $order->subtotal_value = $subtotal;
            $order->taxes_value    = $tax;
            $order->save();

            // Loop through items in cart
            foreach ($cart as $key => $item) {
                    
                // Get gig
                $gig = Gig::where('uid', $item['id'])->with('owner')->active()->first();

                // Check if gig exists
                if ($gig) {
                    
                    // Set quantity
                    $quantity        = isset($item['quantity']) ? convertToNumber($item['quantity']) : 1;

                    // Set gig upgrades
                    $upgrades        = isset($item['upgrades']) && is_array($item['upgrades']) && count($item['upgrades']) ? $item['upgrades'] : [];

                    // Set empty variable
                    $upgrades_amount = 0;

                    // Loop through upgrades
                    foreach ($upgrades as $index => $upgrade) {
                        
                        // Check if upgrade is selected
                        if ( isset($upgrade['checked']) && $upgrade['checked'] == 1 ) {
                            
                            $upgrades_amount += convertToNumber($upgrade['price']) * $quantity;

                        }

                    }

                    // Set item total price
                    $item_total = $upgrades_amount + ( convertToNumber($item['gig']['price']) * $quantity );

                    // Calculate commission first
                    if ($commission_settings->commission_from === 'orders') {
                        
                        // Check commission type
                        if ($commission_settings->commission_type === 'percentage') {
                            
                            // Calculate commission
                            $commission = convertToNumber($commission_settings->commission_value) * $item_total / 100;
    
                        } else {
    
                            // Fixed amount
                            $commission = convertToNumber($commission_settings->commission_value);
    
                        }

                    } else {
                        
                        // No commission
                        $commission = 0;

                    }

                    // Save order item
                    $order_item                         = new OrderItem();
                    $order_item->uid                    = uid();
                    $order_item->order_id               = $order->id;
                    $order_item->gig_id                 = $gig->id;
                    $order_item->owner_id               = $gig->user_id;
                    $order_item->quantity               = $quantity;
                    $order_item->has_upgrades           = count($upgrades) ? true : false;
                    $order_item->total_value            = $item_total;
                    $order_item->profit_value           = $item_total - $commission;
                    $order_item->commission_value       = $commission;
                    $order_item->save();

                    // Loop through upgrades again
                    foreach ($upgrades as $index => $value) {
                        
                        // Check if upgrade is selected
                        if ( isset($upgrade['checked']) && $upgrade['checked'] == 1 ) {
                        
                            // Get upgrade
                            $upgrade = GigUpgrade::where('uid', $value['id'])->where('gig_id', $gig->id)->first();
    
                            // Check if upgrade exists
                            if ($upgrade) {
                                
                                // Save item upgrade
                                $order_item_upgrade             = new OrderItemUpgrade();
                                $order_item_upgrade->item_id    = $order_item->id;
                                $order_item_upgrade->title      = $upgrade->title;
                                $order_item_upgrade->price      = $upgrade->price;
                                $order_item_upgrade->extra_days = $upgrade->extra_days;
                                $order_item_upgrade->save();
    
                            }

                        }
                        
                    }

                    // Update seller pending balance
                    $gig->owner()->update([
                        'balance_pending' => convertToNumber($gig->owner->balance_pending) + convertToNumber($order_item->profit_value)
                    ]);

                    // Increment orders in queue
                    $gig->increment('orders_in_queue');

                    // Order item placed successfully
                    // Let's notify the seller about new order
                    $gig->owner->notify( (new PendingOrder($order_item))->locale(config('app.locale')) );

                    // Check user's level
                    check_user_level($buyer_id);

                    // Send notification
                    notification([
                        'text'    => 't_u_received_new_order_seller',
                        'action'  => url('seller/orders/details', $order_item->uid),
                        'user_id' => $order_item->owner_id
                    ]);

                }

            }

            // Save invoice
            $invoice                 = new OrderInvoice();
            $invoice->order_id       = $order->id;
            $invoice->payment_method = $this->gateway;
            $invoice->payment_id     = $payment_id;
            $invoice->firstname      = $billing_info->firstname ?? $user->username;
            $invoice->lastname       = $billing_info->lastname ?? $user->username;
            $invoice->email          = $user->email;
            $invoice->company        = !empty($billing_info->company) ? clean($billing_info->company) : null;
            $invoice->address        = !empty($billing_info->address) ? clean($billing_info->address) : "NA";
            $invoice->status         = 'paid';
            $invoice->save();

            // Update balance
            $user->update([
                'balance_purchases' => convertToNumber($user->balance_purchases) + convertToNumber($total)
            ]);

            // Now everything succeeded
            // Let's empty the cart
            session()->forget('cart');

            // Now let's notify the buyer that his order has been placed
            $user->notify( (new OrderPlaced($order, $total))->locale(config('app.locale')) );

        } catch (\Throwable $th) {
            
            // Error
            throw $th;

        }
    }


    /**
     * Handle project promoting checkout
     *
     * @param object $subscription
     * @return void
     */
    public function project($subscription)
    {
        try {
            
            // Get project
            $project              = $subscription->project;

            // Get projects settings
            $settings             = settings('projects');

            // Update subscription
            $subscription->status = 'paid';
            $subscription->save();

            // Check if project has featured plan
            if ($project->is_featured) {
                
                // Get featured plan
                $featured_plan = ProjectPlan::whereType('featured')->first();

            } else {

                // No plan selected
                $featured_plan = null;

            }

            // Check if project has urgent plan
            if ($project->is_urgent) {
                
                // Get urgent plan
                $urgent_plan = ProjectPlan::whereType('urgent')->first();

            } else {

                // No plan selected
                $urgent_plan = null;

            }

            // Check if project has alert plan
            if ($project->is_alert) {
                
                // Get alert plan
                $alert_plan = ProjectPlan::whereType('alert')->first();

            } else {

                // No plan selected
                $alert_plan = null;

            }

            // Check if project has highlighted plan
            if ($project->is_highlighted) {
                
                // Get highlighted plan
                $highlighted_plan = ProjectPlan::whereType('highlight')->first();

            } else {

                // No plan selected
                $highlighted_plan = null;

            }

            // We need to send notifications to freelancer if alert plans was selected for this project
            if ($alert_plan) {
                
                // Run a job for this in background
                SendAlertToFreelancers::dispatch($project);

            }

            // Update project
            $project->status                = $settings->auto_approve_projects ? 'active' : 'pending_approval';
            $project->expiry_date_featured  = $featured_plan ? now()->addDays($featured_plan->days) : null;
            $project->expiry_date_urgent    = $urgent_plan ? now()->addDays($urgent_plan->days) : null;
            $project->expiry_date_highlight = $highlighted_plan ? now()->addDays($highlighted_plan->days) : null;
            $project->save();

        } catch (\Throwable $th) {

            // Error
            throw $th;

        }
    }


    /**
     * Handle bid promoting checkout
     *
     * @param object $subscription
     * @return void
     */
    public function bid($subscription)
    {
        try {
            
            // Get bid
            $bid                          = $subscription->bid;

            // Get projects settings
            $settings                     = settings('projects');

            // Update subscription
            $subscription->status         = 'paid';
            $subscription->save();

            // Update bid
            $bid->status                  = $settings->auto_approve_bids ? 'active' : 'pending_approval';
            $bid->save();

        } catch (\Throwable $th) {

            // Error
            throw $th;

        }
    }


    /**
     * Calculate fee value
     *
     * @param string $type
     * @param mixed $amount
     * @return mixed
     */
    private function fee($type, $amount = null)
    {
        try {
            
            // Set amount for deposit
            $amount = convertToNumber($amount) * $this->settings?->exchange_rate / settings('currency')->exchange_rate;

            // Remove long decimal
            $amount = convertToNumber( number_format($amount, 2, '.', '') );

            // Check fee type
            switch ($type) {
    
                // Deposit
                case 'deposit':
    
                    // Get deposit fixed fee
                    if (isset($this->settings->fixed_fee['deposit'])) {
                        
                        // Set fixed fee
                        $fee_fixed = convertToNumber($this->settings->fixed_fee['deposit']);
    
                    } else {
    
                        // No fixed fee
                        $fee_fixed = 0;
    
                    }
    
                    // Get deposit percentage fee
                    if (isset($this->settings->percentage_fee['deposit'])) {
                        
                        // Set percentage fee
                        $fee_percentage = convertToNumber($this->settings->percentage_fee['deposit']);
    
                    } else {
    
                        // No percentage fee
                        $fee_percentage = 0;
    
                    }
    
                    // Calculate percentage of this amount 
                    $fee_percentage_amount = $this->exchange( $fee_percentage * $amount / 100, $this->settings->exchange_rate );

                    // Calculate exchange rate of this fixed fee
                    $fee_fixed_exchange    = $this->exchange( $fee_fixed,  $this->settings->exchange_rate);
                    
                    // Calculate fee value and visible text
                    if ($fee_fixed > 0 && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount) + convertToNumber($fee_fixed_exchange);
    
                    } else if (!$fee_fixed && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount);
    
                    } else if ($fee_fixed > 0 && !$fee_percentage) {
    
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_fixed_exchange);
                        
                    } else if (!$fee_percentage && !$fee_fixed) {
                        
                        // Calculate fee value
                        $fee_value = 0;
    
                    }
                    
                    // Return fee value
                    return number_format($fee_value, 2, '.', '');
    
                break;

                // Gigs
                case 'gigs':

                    // Get gigs fixed fee
                    if (isset($this->settings->fixed_fee['gigs'])) {
                        
                        // Set fixed fee
                        $fee_fixed = convertToNumber($this->settings->fixed_fee['gigs']);
    
                    } else {
    
                        // No fixed fee
                        $fee_fixed = 0;
    
                    }
    
                    // Get gigs percentage fee
                    if (isset($this->settings->percentage_fee['gigs'])) {
                        
                        // Set percentage fee
                        $fee_percentage = convertToNumber($this->settings->percentage_fee['gigs']);
    
                    } else {
    
                        // No percentage fee
                        $fee_percentage = 0;
    
                    }
    
                    // Calculate percentage of this amount 
                    $fee_percentage_amount = $this->exchange( $fee_percentage * $amount / 100, $this->settings->exchange_rate );

                    // Calculate exchange rate of this fixed fee
                    $fee_fixed_exchange    = $this->exchange( $fee_fixed,  $this->settings->exchange_rate);
    
                    // Calculate fee value and visible text
                    if ($fee_fixed > 0 && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount) + convertToNumber($fee_fixed_exchange);
    
                    } else if (!$fee_fixed && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount);
    
                    } else if ($fee_fixed > 0 && !$fee_percentage) {
    
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_fixed_exchange);
                        
                    } else if (!$fee_percentage && !$fee_fixed) {
                        
                        // Calculate fee value
                        $fee_value = 0;
    
                    }
    
                    // Return fee value
                    return $fee_value;

                break;

                // Projects
                case 'projects':

                    // Get projects fixed fee
                    if (isset($this->settings->fixed_fee['projects'])) {
                        
                        // Set fixed fee
                        $fee_fixed = convertToNumber($this->settings->fixed_fee['projects']);
    
                    } else {
    
                        // No fixed fee
                        $fee_fixed = 0;
    
                    }
    
                    // Get projects percentage fee
                    if (isset($this->settings->percentage_fee['projects'])) {
                        
                        // Set percentage fee
                        $fee_percentage = convertToNumber($this->settings->percentage_fee['projects']);
    
                    } else {
    
                        // No percentage fee
                        $fee_percentage = 0;
    
                    }
    
                    // Calculate percentage of this amount 
                    $fee_percentage_amount = $this->exchange( $fee_percentage * $amount / 100, $this->settings->exchange_rate );

                    // Calculate exchange rate of this fixed fee
                    $fee_fixed_exchange    = $this->exchange( $fee_fixed,  $this->settings->exchange_rate);
    
                    // Calculate fee value and visible text
                    if ($fee_fixed > 0 && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount) + convertToNumber($fee_fixed_exchange);
    
                    } else if (!$fee_fixed && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount);
    
                    } else if ($fee_fixed > 0 && !$fee_percentage) {
    
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_fixed_exchange);
                        
                    } else if (!$fee_percentage && !$fee_fixed) {
                        
                        // Calculate fee value
                        $fee_value = 0;
    
                    }
    
                    // Return fee value
                    return $fee_value;

                break;

                // Bids
                case 'bids':

                    // Get bids fixed fee
                    if (isset($this->settings->fixed_fee['bids'])) {
                        
                        // Set fixed fee
                        $fee_fixed = convertToNumber($this->settings->fixed_fee['bids']);
    
                    } else {
    
                        // No fixed fee
                        $fee_fixed = 0;
    
                    }
    
                    // Get bids percentage fee
                    if (isset($this->settings->percentage_fee['bids'])) {
                        
                        // Set percentage fee
                        $fee_percentage = convertToNumber($this->settings->percentage_fee['bids']);
    
                    } else {
    
                        // No percentage fee
                        $fee_percentage = 0;
    
                    }
    
                    // Calculate percentage of this amount 
                    $fee_percentage_amount = $this->exchange( $fee_percentage * $amount / 100, $this->settings->exchange_rate );

                    // Calculate exchange rate of this fixed fee
                    $fee_fixed_exchange    = $this->exchange( $fee_fixed,  $this->settings->exchange_rate);
    
                    // Calculate fee value and visible text
                    if ($fee_fixed > 0 && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount) + convertToNumber($fee_fixed_exchange);
    
                    } else if (!$fee_fixed && $fee_percentage > 0) {
                        
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_percentage_amount);
    
                    } else if ($fee_fixed > 0 && !$fee_percentage) {
    
                        // Calculate fee value
                        $fee_value = convertToNumber($fee_fixed_exchange);
                        
                    } else if (!$fee_percentage && !$fee_fixed) {
                        
                        // Calculate fee value
                        $fee_value = 0;
    
                    }
    
                    // Return fee value
                    return $fee_value;

                break;
    
            }

        } catch (\Throwable $th) {
            
            // Something went wrong
            return 0;

        }
    }


    /**
     * Calculate exchange rate
     *
     * @param mixed $amount
     * @param mixed $exchange_rate
     * @param boolean $formatted
     * @param string $currency
     * @return mixed
     */
    private function exchange($amount, $exchange_rate, $formatted = false, $currency = null)
    {
        try {

            // Convert amount to number
            $amount                = convertToNumber($amount);

            // Get currency settings
            $currency_settings     = settings('currency');

            // Get default currency exchange rate
            $default_exchange_rate = convertToNumber($currency_settings->exchange_rate);

            // Get exchanged amount
            $exchanged_amount      = convertToNumber( $amount *  $default_exchange_rate / $exchange_rate );

            // Check if we have to return a formatted value
            if ($formatted) {
                
                return money( $exchanged_amount, $currency, true )->format();

            }

            // Return max deposit
            return convertToNumber(number_format( $exchanged_amount, 2, '.', '' ));

        } catch (\Throwable $th) {

            // Something went wrong
            return $amount;

        }
    }


    /**
     * Send a notification to user
     *
     * @param string $type
     * @param object $user
     * @return void
     */
    private function notification($type, $user)
    {
        try {
            
            // Check notification type
            switch ($type) {

                // Deposit funds
                case 'deposit':
                    


                break;

                // Gig checkout
                case 'gig':
                    
                    

                break;

                // Project payment
                case 'project':
                    
                    

                break;

                // Bid payment
                case 'bid':
                    
                    

                break;

            }

        } catch (\Throwable $th) {
            
            // Something went wrong
            return;

        }
    }


    /**
     * Redirecting
     *
     * @param string $type
     * @param string $status
     * @return void
     */
    private function redirect($type, $status = 'success')
    {
        // Check where to redirect
        switch ($type) {

            // Deposit history
            case 'deposit':
                
                // Check if payment succeeded
                if ($status === 'success') {
                    
                    // Redirect to deposit history page
                    return redirect('account/deposit/history')->with('success', __('messages.t_ur_transaction_has_completed'));

                } else if ($status === 'pending') {
                    
                    // Redirect to deposit history page
                    return redirect('account/deposit/history')->with('success', __('messages.t_mollie_payment_pending'));

                }
                

            break;

            // Gigs order
            case 'gigs':
                
                // Check if payment succeeded
                if ($status === 'success') {
                    
                    // Redirect to deposit history page
                    return redirect('account/orders')->with('success', __('messages.t_submit_ur_info_now_seller_start_order'));

                } else if ($status === 'pending') {
                    
                    // Redirect to deposit history page
                    return redirect('account/orders')->with('success', __('messages.t_mollie_payment_pending'));

                }

            break;

            // Projects
            case 'projects':

                // Check if payment succeeded
                if ($status === 'success') {
                    
                    // Redirect to deposit history page
                    return redirect('account/projects')->with('success', __('messages.t_ur_payment_has_succeeded'));

                } else if ($status === 'pending') {
                    
                    // Redirect to deposit history page
                    return redirect('account/projects')->with('success', __('messages.t_mollie_payment_pending'));

                }
            
            break;

            // Bids
            case 'bids':

                // Check if payment succeeded
                if ($status === 'success') {
                    
                    // Redirect to deposit history page
                    return redirect('seller/projects/bids')->with('success', __('messages.t_ur_payment_has_succeeded'));

                } else if ($status === 'pending') {
                    
                    // Redirect to deposit history page
                    return redirect('seller/projects/bids')->with('success', __('messages.t_mollie_payment_pending'));

                }
            
            break;

        }
    }
}
