<?php

namespace App\Livewire\Admin\Countries;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class CountriesComponent extends Component
{
    use WithPagination, SEOToolsTrait;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.admin-app')]
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle(__('messages.t_countries'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.countries.countries', [
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
        return Country::orderBy('name', 'asc')->paginate(44);
    }
    
}
