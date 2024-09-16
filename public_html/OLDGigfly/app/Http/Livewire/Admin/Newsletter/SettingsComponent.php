<?php

namespace App\Http\Livewire\Admin\Newsletter;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\NewsletterSettings;
use App\Http\Validators\Admin\Newsletter\EditValidator;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class SettingsComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $is_enabled;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // Set default settings
        $this->fill([
            'is_enabled' => settings('newsletter')->is_enabled
        ]);
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle(__('messages.t_newsletter_settings'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.newsletter.settings')->extends('livewire.admin.layout.app')->section('content');
    }


    /**
     * Update settings
     *
     * @return void
     */
    public function update()
    {
        try {

            // Validate form
            EditValidator::validate($this);

            // Update newsletter settings
            NewsletterSettings::where('id', 1)->update([
                'is_enabled' => $this->is_enabled
            ]);

            // Refresh settings
            settings('newsletter', true);

            // Success
            $this->notification([
                'title'       => __('messages.t_success'),
                'description' => __('messages.t_toast_operation_success'),
                'icon'        => 'success'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->notification([
                'title'       => __('messages.t_error'),
                'description' => __('messages.t_toast_form_validation_error'),
                'icon'        => 'error'
            ]);

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->notification([
                'title'       => __('messages.t_error'),
                'description' => __('messages.t_toast_something_went_wrong'),
                'icon'        => 'error'
            ]);

            throw $th;

        }
    }
    
}
