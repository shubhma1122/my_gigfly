<?php
namespace App\Livewire\Main\Account\Billing;

use App\Models\Country;
use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\UserBilling;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Notifications\User\Everyone\BillingInfoUpdated;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Main\Account\Billing\EditValidator;

class BillingComponent extends Component
{
    use SEOToolsTrait, LivewireAlert, Actions;

    public $firstname;
    public $lastname;
    public $company;
    public $city;
    public $zip;
    public $country;
    public $address;
    public $vat_number;

    // Redirect
    public $redirect;
    protected $queryString = ['redirect'];

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // Get or create new billing info
        $billing = UserBilling::firstOrCreate(['user_id' => auth()->id()]);

        // Fill form
        $this->fill([
            'firstname'  => $billing->firstname,
            'lastname'   => $billing->lastname,
            'company'    => $billing->company,
            'city'       => $billing->city,
            'zip'        => $billing->zip,
            'country'    => $billing->country_id,
            'address'    => $billing->address,
            'vat_number' => $billing->vat_number
        ]);
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.main-app')]
    public function render()
    {
        // SEO
        $separator   = settings('general')->separator;
        $title       = __('messages.t_billing_information') . " $separator " . settings('general')->title;
        $description = settings('seo')->description;
        $ogimage     = src( settings('seo')->ogimage );

        $this->seo()->setTitle( $title );
        $this->seo()->setDescription( $description );
        $this->seo()->setCanonical( url()->current() );
        $this->seo()->opengraph()->setTitle( $title );
        $this->seo()->opengraph()->setDescription( $description );
        $this->seo()->opengraph()->setUrl( url()->current() );
        $this->seo()->opengraph()->setType('website');
        $this->seo()->opengraph()->addImage( $ogimage );
        $this->seo()->twitter()->setImage( $ogimage );
        $this->seo()->twitter()->setUrl( url()->current() );
        $this->seo()->twitter()->setSite( "@" . settings('seo')->twitter_username );
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle( $title );
        $this->seo()->jsonLd()->setDescription( $description );
        $this->seo()->jsonLd()->setUrl( url()->current() );
        $this->seo()->jsonLd()->setType('WebSite');

        return view('livewire.main.account.billing.billing', [
            'countries' => $this->countries
        ]);
    }


    /**
     * Get list of countries
     *
     * @return object
     */
    public function getCountriesProperty()
    {
        return Country::where('is_active', true)->orderBy('name', 'asc')->get();
    }


    /**
     * Update user account billing
     *
     * @return void
     */
    public function update()
    {
        try {

            // Validate form
            EditValidator::validate($this);

            // Update user billing info
            UserBilling::where('user_id', auth()->id())->update([
                'firstname'  => $this->firstname,
                'lastname'   => $this->lastname,
                'company'    => $this->company,
                'city'       => $this->city,
                'zip'        => $this->zip,
                'country_id' => $this->country,
                'address'    => $this->address,
                'vat_number' => $this->vat_number
            ]);

            // Password changed
            auth()->user()->notify( (new BillingInfoUpdated)->locale(config('app.locale')) );

            // If user must be redirect to checkout
            if ($this->redirect === 'checkout') {
                return redirect('checkout');
            }

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_billing_info_updated_success') )
            );


        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            throw $th;

        }
    }
    
}
