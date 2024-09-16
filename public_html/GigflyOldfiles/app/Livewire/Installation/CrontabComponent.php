<?php

namespace App\Livewire\Installation;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class CrontabComponent extends Component
{
    use SEOToolsTrait, LivewireAlert, Actions;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.install')] 
    public function render()
    {
        // SEO
        $this->seo()->setTitle("Installation | Cron jobs");

        return view('livewire.installation.crontab');
    }


    /**
     * Go to next step
     *
     * @return void
     */
    public function next()
    {
        // Redirect to next step
        return redirect('install/finish');
    }
    
}
