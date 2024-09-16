<?php
namespace App\Livewire\Main\Create\Steps;

use Livewire\Component;
use App\Models\Category;
use WireUi\Traits\Actions;
use App\Models\Subcategory;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Validators\Main\Create\OverviewValidator;

class Overview extends Component
{
    use Actions, LivewireAlert;
    
    public $title;
    public $category;
    public $subcategory;
    public $description;
    public $seo_title;
    public $seo_description;
    public $question;
    public $answer;
    public $tags          = [];
    public $faqs          = [];
    public $subcategories = [];

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.main-app')]
    public function render()
    {   
        return view('livewire.main.create.steps.overview', [
            'categories' => $this->categories
        ]);
    }


    /**
     * Get all parent categories
     *
     * @return object
     */
    public function getCategoriesProperty()
    {
        return Category::orderBy('id')->get();
    }


    /**
     * Get subcategories
     *
     * @param integer $id
     * @return void
     */
    public function updatedCategory($id)
    {
        // Get all subcategories in this parent category
        $this->subcategories = Subcategory::where('parent_id', $id)->orderBy('id')->get();
    }


    /**
     * Add a FAQ to list
     *
     * @return void
     */
    public function addFaq()
    {
        // Validate form
        try {

            // Validate form
            OverviewValidator::faq($this);

            // Set faq
            $faq = [
                'question' => $this->question,
                'answer'   => $this->answer
            ];

            // Add this faq to list
            array_push($this->faqs, $faq);

            // Reset form
            $this->reset(['answer', 'question']);

            // Success
            $this->notification([
                'title'       => __('messages.t_success'),
                'description' => __('messages.t_faq_added_successfully'),
                'icon'        => 'success'
            ]);

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
     * Remove item from list
     *
     * @param integer $key
     * @return void
     */
    public function removeFaq($key)
    {
        // Check if item set in array
        if (isset($this->faqs[$key])) {
            
            // Remove it
            unset($this->faqs[$key]);

        }
    }


    


    /**
     * Save overview data section
     *
     * @return void
     */
    public function save()
    {
        try {
            
            // Validate form
            OverviewValidator::all($this);

            // Set data
            $data['title']           = $this->title;
            $data['category']        = $this->category;
            $data['subcategory']     = $this->subcategory;
            $data['description']     = $this->description;
            $data['seo_title']       = $this->seo_title ? $this->seo_title : null;
            $data['seo_description'] = $this->seo_description ? $this->seo_description : null;
            $data['tags']            = $this->tags;
            $data['faqs']            = $this->faqs ? $this->faqs : null;

            // Send this data to parent component
            $this->emit('data-saved-overview', $data);

            // Success
            $this->notification([
                'title'       => __('messages.t_success'),
                'description' => __('messages.t_data_has_been_saved'),
                'icon'        => 'success'
            ]);

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
