<?php

namespace App\Livewire\Admin\Projects\Plans\Bidding;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\Attributes\Layout;
use App\Models\ProjectBiddingPlan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Admin\Projects\Plans\Bidding\EditValidator;

class EditComponent extends Component
{
    use SEOToolsTrait, Actions, LivewireAlert;

    public $price;
    public $badge_text_color;
    public $badge_bg_color;
    public $is_active;
    public $plan;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount($id)
    {
        // Get plan
        $plan = ProjectBiddingPlan::where('uid', $id)->firstOrFail();

        // fill form
        $this->fill([
            'price'            => $plan->price,
            'badge_text_color' => $plan->badge_text_color,
            'badge_bg_color'   => $plan->badge_bg_color,
            'is_active'        => $plan->is_active ? 1 : 0
        ]);

        // Set plan
        $this->plan = $plan;
    }


    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.admin-app')]
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle(__('messages.t_edit_bidding_plan'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.projects.plans.bidding.edit');
    }


    /**
     * Update plan
     *
     * @return void
     */
    public function update()
    {
        try {
            
            // Validate form
            EditValidator::validate($this);
            
            // Update plan
            $this->plan->price            = $this->price;
            $this->plan->badge_text_color = $this->badge_text_color;
            $this->plan->badge_bg_color   = $this->badge_bg_color;
            $this->plan->is_active        = $this->is_active ? 1 : 0;
            $this->plan->save();

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_toast_operation_success') )
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
                livewire_alert_params( $th->getMessage(), 'error' )
            );

        }
    }
    
}
