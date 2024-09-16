<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Mail\Admin\Settings\TrySmtp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Validators\Admin\Settings\SmtpValidator;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class SmtpComponent extends Component
{
    use SEOToolsTrait, LivewireAlert;
    
    public $driver;
    public $host;
    public $port;
    public $encryption;
    public $username;
    public $password;
    public $from_address;
    public $from_name;
    public $sendmail_path;
    public $email;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Fill default settings
        $this->fill([
            'driver'        => config('mail.default'),
            'sendmail_path' => config('mail.mailers.sendmail.path'),
            'host'          => config('mail.mailers.smtp.host'),
            'port'          => config('mail.mailers.smtp.port'),
            'encryption'    => config('mail.mailers.smtp.encryption'),
            'username'      => config('mail.mailers.smtp.username'),
            'from_address'  => config('mail.from.address'),
            'from_name'     => config('mail.from.name'),
            'email'         => auth('admin')->user()->email
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
        $this->seo()->setTitle( setSeoTitle(__('messages.t_smtp_settings'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.settings.smtp');
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
            SmtpValidator::validate($this);

            // Update settings
            Config::write('mail.default', $this->driver);
            Config::write('mail.from.address', $this->from_address);
            Config::write('mail.from.name', $this->from_name);

            // Check if driver is smtp
            if ($this->driver == 'smtp') {

                // Write config
                Config::write('mail.mailers.smtp.host', $this->host);
                Config::write('mail.mailers.smtp.port', $this->port);
                Config::write('mail.mailers.smtp.encryption', $this->encryption);
                Config::write('mail.mailers.smtp.username', $this->username);

                // Update smtp password
                if ($this->password) {
                    Config::write('mail.mailers.smtp.password', $this->password);
                }

            }

            // Update the sendmail path
            if ($this->driver == 'sendmail') {
                Config::write('mail.mailers.sendmail.path', $this->sendmail_path);
            }

            // Clear cache
            Artisan::call('config:clear');

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
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            throw $th;

        }
    }


    /**
     * Send a test email
     *
     * @return void
     */
    public function send()
    {
        try {
            
            // check if insert email address
            if (!$this->email || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                
                // Error
                $this->alert(
                    'error', 
                    __('messages.t_error'), 
                    livewire_alert_params( __('messages.t_validator_email'), 'error' )
                );
    
                return;
    
            }
    
            // Send a test email address
            Mail::to($this->email)->send(new TrySmtp);
    
            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_smtp_email_test_sent_success') )
            );

        } catch (\Throwable $th) {
            
            // Error message
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            // Error
            throw $th;

        }
    }
    
}
