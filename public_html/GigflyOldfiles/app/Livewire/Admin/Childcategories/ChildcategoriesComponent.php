<?php
namespace App\Livewire\Admin\Childcategories;

use App\Models\Gig;
use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\Subcategory;
use Livewire\WithPagination;
use App\Models\Childcategory;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Schema;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ChildcategoriesComponent extends Component
{
    use WithPagination, SEOToolsTrait, LivewireAlert, Actions;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.admin-app')]
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle(__('dashboard.t_childcategories'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.childcategories.childcategories', [
            'childcategories' => $this->childcategories
        ]);
    }


    /**
     * Get list of childcategories
     *
     * @return object
     */
    public function getChildcategoriesProperty()
    {
        return Childcategory::orderByDesc('id')
                            ->with('parent', function($query) {
                                return $query->with('icon')->withTranslation();
                            })
                            ->with('subcategory', function($query) {
                                return $query->with('icon')->withTranslation();
                            })
                            ->with('icon')
                            ->withCount(['gigs', 'projects'])
                            ->withTranslation()
                            ->paginate(42);
    }


    /**
     * Delete subcategory
     *
     * @param integer $id
     * @return void
     */
    public function delete($id)
    {
        // Get subcategory
        $subcategory = Subcategory::where('id', $id)->firstOrFail();

        Schema::disableForeignKeyConstraints();

        // Count gigs in this category
        $gigs     = Gig::where('subcategory_id', $subcategory->id)->count();

        // Check if category has any gig
        if ($gigs) {
            
            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_this_subcategory_has_some_gigs_please_edit_it'), 'error' )
            );

            return;

        }

        // Check if subcategory has icon
        if ($subcategory->icon) {
            deleteModelFile($subcategory->icon);
        }

        // Check if subcategory has image
        if ($subcategory->image) {
            deleteModelFile($subcategory->image);
        }

        // Delete subcategory
        $subcategory->delete();

        Schema::enableForeignKeyConstraints();

        // Success
        $this->alert(
            'success', 
            __('messages.t_success'), 
            livewire_alert_params( __('messages.t_toast_operation_success') )
        );
    }
    
}
