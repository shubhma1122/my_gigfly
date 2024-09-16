<?php

namespace App\Livewire\Admin\Advertisements;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\Advertisement;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class AdvertisementsComponent extends Component
{
    use SEOToolsTrait, LivewireAlert, Actions;

    public $header_code;
    public $ad_service_360;
    public $ad_service_720;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // Get advertisements
        $advertisements = Advertisement::first();

        // Fill form
        $this->fill([
            'header_code'    => $advertisements->header_code,
            'ad_service_360' => $advertisements->ad_service_360,
            'ad_service_720' => $advertisements->ad_service_720,
        ]);
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
        $this->seo()->setTitle( setSeoTitle(__('messages.t_advertisements'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.advertisements.advertisements');
    }


    /**
     * Update ads
     *
     * @return void
     */
    public function update()
    {
        // Update ads
        Advertisement::where('id', 1)->update([
            'header_code'    => $this->header_code ? $this->header_code : null,
            'ad_service_360' => $this->ad_service_360 ? $this->ad_service_360 : null,
            'ad_service_720' => $this->ad_service_720 ? $this->ad_service_720 : null
        ]);

        // Clear cache
        advertisements(null, true);

        // Success
        $this->alert(
            'success', 
            __('messages.t_success'), 
            livewire_alert_params( __('messages.t_ads_has_updated_successfully') )
        );
    }
    
}
