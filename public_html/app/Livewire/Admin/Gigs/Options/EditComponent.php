<?php
namespace App\Livewire\Admin\Gigs\Options;

use App\Models\Gig;
use App\Models\Admin;
use App\Models\GigFaq;
use App\Models\GigSeo;
use Livewire\Component;
use App\Models\Category;
use App\Models\GigImage;
use App\Models\GigUpgrade;
use WireUi\Traits\Actions;
use App\Models\GigDocument;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use App\Models\Childcategory;
use Livewire\WithFileUploads;
use App\Models\GigRequirement;
use Livewire\Attributes\Layout;
use App\Models\GigRequirementOption;
use Illuminate\Support\Facades\File;
use App\Utils\Uploader\ImageUploader;
use App\Notifications\Admin\PendingGig;
use Illuminate\Database\Eloquent\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Admin\Gigs\Edit\GalleryValidator;
use App\Http\Validators\Admin\Gigs\Edit\PricingValidator;
use App\Http\Validators\Admin\Gigs\Edit\OverviewValidator;
use App\Http\Validators\Admin\Gigs\Edit\RequirementsValidator;

class EditComponent extends Component
{
    use SEOToolsTrait, LivewireAlert, Actions, WithFileUploads;
    
    public Gig $gig;
    
    public $subcategories        = [];
    public $childcategories      = [];
    public $tags                 = [];
    public $add_upgrade          = [];
    public $available_deliveries = [];
    public $faqs                 = [];
    public $upgrades             = [];
    public $requirements         = [];
    public $add_requirement      = [
        'options' => [0 => '', 1 => '']
    ];

    // Requirements
    public $question;
    public $answer;
    public $selected;

    // Overview section
    public $title;
    public $category;
    public $subcategory;
    public $childcategory;
    public $description;
    public $seo_title;
    public $seo_description;
    
    // Pricing
    public $price;
    public $delivery_time;
    public $currency_symbol;

    // Gallery
    public $images    = [];
    public $documents = [];
    public $thumbnail;

    public $isFinished  = false;
    public $is_approved = false;
    public $is_edit     = false;

    /**
     * Init component
     *
     * @param integer $id
     * @return void
     */
    public function mount($id)
    {
        // Get gig
        $gig       = Gig::where('uid', $id)->firstOrFail();

        // Set gig
        $this->gig = $gig;

        // Set tags
        if ($gig->tags) {
            foreach ($gig->tags as $tag) {
                array_push($this->tags, $tag->name);
            }
        }

        // Set faqs
        if ($gig->faqs) {
            foreach ($gig->faqs as $faq) {
                // Set faq
                $faq = [
                    'question' => $faq->question,
                    'answer'   => $faq->answer
                ];

                // Add this faq to list
                array_push($this->faqs, $faq);
            }
        }

        // Set gig upgrades
        if ($gig->upgrades()->count()) {
            
            // Loop through upgrades
            foreach ($gig->upgrades as $upgrade) {

                // Add this upgrade to list
                array_push($this->upgrades, [
                    'title'      => $upgrade->title,
                    'price'      => $upgrade->price,
                    'extra_days' => $upgrade->extra_days,
                ]);

            }

        }

        // Set requirements
        foreach ($gig->requirements as $req) {
            
            // Set empty options
            $options = [];

            // Check if requirement has options
            if ($req->options()->count()) {
                foreach ($req->options as $option) {
                    array_push($options, $option->option);
                }
            }
            
            // Set requirement
            $requirement = [
                'question'    => $req->question,
                'type'        => $req->type,
                'is_required' => $req->is_required,
                'is_multiple' => $req->is_multiple,
                'options'     => $options
            ];

            // Add this requirement to list
            array_push($this->requirements, $requirement);

        }

        // Fill form
        $this->fill([
            'title'           => $gig->title,
            'category'        => $gig->category_id,
            'subcategory'     => $gig->subcategory_id,
            'childcategory'   => $gig->childcategory_id,
            'description'     => $gig->description,
            'seo_title'       => $gig->seo ? $gig->seo->title : null,
            'seo_description' => $gig->seo ? $gig->seo->description : null,
            'price'           => $gig->price,
            'delivery_time'   => $gig->delivery_time
        ]);

        // Set subcategories
        $this->subcategories = Subcategory::where('parent_id', $gig->category_id)
                                            ->select('id', 'uid', 'created_at')
                                            ->withTranslation()
                                            ->latest()
                                            ->get();

        // Set childcategories
        $this->childcategories = Childcategory::where('subcategory_id', $gig->subcategory_id)
                                                ->where('parent_id', $gig->category_id)
                                                ->select('id', 'uid', 'created_at')
                                                ->withTranslation()
                                                ->latest()
                                                ->get();

        // Set available deliveries dates
        $this->available_deliveries = [
            ['value' => 0, 'text' => __('messages.t_none')],
            ['value' => 1, 'text' => __('messages.t_1_day')],
            ['value' => 2, 'text' => __('messages.t_2_days')],
            ['value' => 3, 'text' => __('messages.t_3_days')],
            ['value' => 4, 'text' => __('messages.t_4_days')],
            ['value' => 5, 'text' => __('messages.t_5_days')],
            ['value' => 6, 'text' => __('messages.t_6_days')],
            ['value' => 7, 'text' => __('messages.t_1_week')],
            ['value' => 14, 'text' => __('messages.t_2_weeks')],
            ['value' => 21, 'text' => __('messages.t_3_weeks')],
            ['value' => 30, 'text' => __('messages.t_1_month')]
        ];

        // Get default currency
        $currency              = settings('currency');

        // Set currency symbol
        $this->currency_symbol = isset(config('money')[$currency->code]['symbol']) ? config('money')[$currency->code]['symbol'] : $currency->code;

    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.admin-app')]
    public function render()
    {
        return view('livewire.admin.gigs.options.edit', [
            'categories' => $this->categories
        ]);
    }


    /**
     * Get parent categories
     *
     * @return Collection
     */
    public function getCategoriesProperty() : Collection
    {
        return Category::select('id', 'uid', 'created_at')->withTranslation()->latest()->get();
    }


    /**
     * Set subcategories
     *
     * @param int $id
     * @return void
     */
    public function updatedCategory($id) : void
    {
        // Set subcategories
        $this->subcategories = Subcategory::where('parent_id', $id)
                                            ->select('id', 'uid', 'created_at')
                                            ->withTranslation()
                                            ->latest()
                                            ->get();
    }


    /**
     * Set childcategories
     *
     * @param int $id
     * @return void
     */
    public function updatedSubcategory($id) : void
    {
        // Set childcategories
        $this->childcategories = Childcategory::where('subcategory_id', $id)
                                                ->where('parent_id', $this->category)
                                                ->select('id', 'uid', 'created_at')
                                                ->withTranslation()
                                                ->latest()
                                                ->get();
    }


    /**
     * Add tag to list
     *
     * @param string $tag
     * @return void
     */
    public function addTag(string $tag)
    {
        // Validate form
        try {

            // Validate form
            OverviewValidator::tag($tag);

            // Clear tag
            $clean = str_replace(['"', "'", ";", ":", "/", ",", ".", "-", "_", "&", "!"], "", $tag);

            // Add add tag to list
            array_push($this->tags, $clean);

            // Refresh tags list
            array_values($this->tags);

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
     * Remove tag from list
     *
     * @param string $tag
     * @return void
     */
    public function removeTag($tag)
    {
        // Get tag key
        $key = array_search($tag, $this->tags);

        // Check if tag exists
        if (isset($this->tags[$key])) {
            
            // Delete this tag
            unset($this->tags[$key]);

            // Refresh tags list
            array_values($this->tags);

        }
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
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_faq_added_successfully') )
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
     * Add a service upgrade
     *
     * @return void
     */
    public function addUpgrade()
    {
        // Validate form
        try {

            // Validate form
            PricingValidator::upgrade($this);

            // Set upgrade
            $upgrade = [
                'title'      => $this->add_upgrade['title'],
                'price'      => $this->add_upgrade['price'],
                'extra_days' => isset($this->add_upgrade['extra_days']) ? $this->add_upgrade['extra_days'] : 0,
            ];

            // Add this upgrade to list
            array_push($this->upgrades, $upgrade);

            // Reset form
            $this->reset('add_upgrade');

            // Close modal
            $this->dispatch('close-modal', 'modal-add-upgrade-container');

            // Scroll to see this upgrade
            $this->dispatch('scrollTo', 'scroll-to-upgrade-id-' . array_key_last($this->upgrades));

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
     * Remove select upgrade from list
     *
     * @param integer $key
     * @return void
     */
    public function removeUpgrade($key)
    {
        // Check if upgrade exists in list
        if (isset($this->upgrades[$key])) {
            
            // Delete upgrade from list
            unset($this->upgrades[$key]);

        }
    }


    /**
     * Add new option to list
     *
     * @return void
     */
    public function addOption()
    {
        // Set new option
        $option = [''];

        // Add new option
        array_push($this->add_requirement['options'], $option);

        // Refresh value
        array_values($this->add_requirement['options']);

        // Success
        $this->alert(
            'success', 
            __('messages.t_success'), 
            livewire_alert_params( __('messages.t_toast_operation_success') )
        );
    }


    /**
     * Delete selected option
     *
     * @param integer $index
     * @return void
     */
    public function deleteOption($index)
    {
        // Check if option exists
        if (isset($this->add_requirement['options'][$index])) {
            
            // Remove it
            unset($this->add_requirement['options'][$index]);

            // Refresh options
            array_values($this->add_requirement['options']);

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_toast_operation_success') )
            );

        }
    }

    
    /**
     * Add requirement
     *
     * @return void
     */
    public function addRequirement()
    {
        try {

            // Validate form
            RequirementsValidator::add($this);

            // Set requirement
            $requirement = [
                'question'    => $this->add_requirement['question'],
                'type'        => $this->add_requirement['type'],
                'is_required' => isset($this->add_requirement['is_required']) && $this->add_requirement['is_required'] ? true : false,
                'is_multiple' => isset($this->add_requirement['is_multiple']) && $this->add_requirement['is_multiple'] ? true : false,
                'options'     => isset($this->add_requirement['options']) ? $this->add_requirement['options'] : [],
            ];

            // Add this requirement to list
            array_push($this->requirements, $requirement);

            // Reset form
            $this->reset('add_requirement');

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
     * Delete selected requirement
     *
     * @param integer $index
     * @return void
     */
    public function deleteRequirement($index)
    {
        // Check if requirement exists
        if (isset($this->requirements[$index])) {
            
            // Delete it
            unset($this->requirements[$index]);

            // Refresh array
            array_values($this->requirements);

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_toast_operation_success') )
            );

        }
    }


    /**
     * Edit requirement by id
     *
     * @param integer $index
     * @return void
     */
    public function editRequirement($index)
    {
        // Check if requirement exists
        if (isset($this->requirements[$index])) {
            
            // Get requirement
            $req = $this->requirements[$index];

            // Set requirement
            $this->add_requirement['question']    = isset($req['question']) ? $req['question'] : null;
            $this->add_requirement['type']        = isset($req['type']) ? $req['type'] : null;
            $this->add_requirement['is_required'] = isset($req['is_required']) ? $req['is_required'] : null;
            $this->add_requirement['is_multiple'] = isset($req['is_multiple']) ? $req['is_multiple'] : null;
            $this->add_requirement['options']     = isset($req['options']) ? $req['options'] : [];

            // Set default action as edit
            $this->is_edit  = true;

            // Set selected requirement
            $this->selected = $index;

            // Open modal
            $this->dispatch('open-modal', 'modal-add-requirement-container');
        }
    }


    /**
     * Update requirement
     *
     * @return void
     */
    public function updateRequirement()
    {
        try {
                
            // Get requirement
            $requirement = $this->requirements[$this->selected];

            // Check if exists
            if (isset($requirement)) {

                // Validate form
                RequirementsValidator::add($this);
                
                // Update requirement
                $this->requirements[$this->selected]['question']    = $this->add_requirement['question'];
                $this->requirements[$this->selected]['type']        = $this->add_requirement['type'];
                $this->requirements[$this->selected]['is_required'] = isset($this->add_requirement['is_required']) ? true : false;
                $this->requirements[$this->selected]['is_multiple'] = isset($this->add_requirement['is_multiple']) ? true : false;
                $this->requirements[$this->selected]['options']     = isset($this->add_requirement['options']) ? $this->add_requirement['options'] : [];

                // Close modal
                $this->dispatch('close-modal', 'modal-add-service-requirement-container');

                // Reset form
                $this->reset('add_requirement');

                // Success
                $this->alert(
                    'success', 
                    __('messages.t_success'), 
                    livewire_alert_params( __('messages.t_toast_operation_success') )
                );

            }

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


    public function update() : void
    {
        try {
            
            // Check if requirements are set
            if (!count($this->requirements)) {
                
                // Error
                $this->alert(
                    'error', 
                    __('messages.t_error'), 
                    livewire_alert_params( __('messages.t_u_have_to_add_at_least_1_requirement'), 'error' )
                );

                return;

            }

            // Validate form
            OverviewValidator::all($this);
            PricingValidator::all($this);
            RequirementsValidator::all($this);
            GalleryValidator::all($this);

            // Check if request has tags
            if (count($this->tags)) {
                
                // Delete old tags
                $this->gig->untag();

                // Add new tags
                foreach ($this->tags as $tag) {
                    $this->gig->tag($tag);
                }

            }

            // Check if request has new faqs
            if (count($this->faqs)) {
                
                // Delete old faqs
                GigFaq::where('gig_id', $this->gig->id)->delete();

                // Add new faqs
                foreach ($this->faqs as $faq) {
                    
                    // Save faq
                    GigFaq::create([
                        'gig_id'   => $this->gig->id,
                        'question' => clean($faq['question']),
                        'answer'   => clean($faq['answer'])
                    ]);

                }

            }

            // Check if request has seo details
            if ($this->seo_title && $this->seo_description) {
                
                // Delete old seo
                GigSeo::where('gig_id', $this->gig->id)->delete();

                // Add new seo
                GigSeo::create([
                    'gig_id'      => $this->gig->id,
                    'title'       => clean($this->seo_title),
                    'description' => clean($this->seo_description),
                ]);

            }

            // Get title
            $title                     = htmlspecialchars_decode(clean($this->title));

            // Generate unique slug for this gig
            $slug                      = substr( Str::slug($title), 0, 138 ) . '-' . $this->gig->uid;

            // Get description
            $description               = clean($this->description);

            // Get gig status
            $status                    = settings('publish')->auto_approve_gigs ? 'active' : 'pending';

            // Update gig data
            $this->gig->title          = $title;
            $this->gig->slug           = $slug;
            $this->gig->status         = $status;
            $this->gig->description    = $description;
            $this->gig->category_id    = $this->category;
            $this->gig->subcategory_id = $this->subcategory;
            $this->gig->save();


            // Delete old upgrades
            GigUpgrade::where('gig_id', $this->gig->id)->delete();

            // Create new upgrades
            foreach ($this->upgrades as $upgrade) {
                
                // Save uprade
                GigUpgrade::create([
                    'uid'        => uid(),
                    'gig_id'     => $this->gig->id,
                    'title'      => $upgrade['title'],
                    'price'      => $upgrade['price'],
                    'extra_days' => isset($upgrade['extra_days']) ? $upgrade['extra_days'] : 0,
                ]);

            }

            // Update gig
            $this->gig->price         = $this->price;
            $this->gig->delivery_time = $this->delivery_time;
            $this->gig->save();

            // Get old requirements
            $old = GigRequirement::where('gig_id', $this->gig->id)->get();

            // Loop through requirements
            foreach ($old as $o) {
                
                // Delete options
                GigRequirementOption::where('requirement_id', $o->id)->delete();

                // Delete requirement
                $o->delete();

            }

            // Save new requirements
            foreach ($this->requirements as $req) {
                    
                // Save requirement
                $requirement = GigRequirement::create([
                    'gig_id'      => $this->gig->id,
                    'question'    => clean($req['question']),
                    'type'        => $req['type'],
                    'is_required' => isset($req['is_required']) ? $req['is_required'] : false,
                    'is_multiple' => isset($req['is_multiple']) ? $req['is_multiple'] : false
                ]);

                // Check if requirement multiple choices
                if ($req['type'] === 'choice') {
                    
                    // Loop through options
                    foreach ($req['options'] as $option) {
                        
                        // Save option
                        GigRequirementOption::create([
                            'requirement_id' => $requirement->id,
                            'option'         => $option
                        ]);

                    }

                }

            }

            // Check if request has thumbnail image
            if ($this->thumbnail) {

                // Upload new files
                $image_thumb_id  = ImageUploader::make($this->thumbnail)
                                                ->deleteById($this->gig->image_thumb_id)
                                                ->resize(400)
                                                ->folder('gigs/previews/small')
                                                ->handle();
                $image_medium_id = ImageUploader::make($this->thumbnail)
                                                ->deleteById($this->gig->image_medium_id)
                                                ->resize(800)
                                                ->folder('gigs/previews/medium')
                                                ->handle();
                $image_large_id  = ImageUploader::make($this->thumbnail)
                                                ->deleteById($this->gig->image_large_id)
                                                ->resize(1200)
                                                ->folder('gigs/previews/large')
                                                ->handle();

            } else {

                // Set default values
                $image_thumb_id  = $this->gig->image_thumb_id;
                $image_medium_id = $this->gig->image_medium_id;
                $image_large_id  = $this->gig->image_large_id;

            }

            // Update gig
            $this->gig->image_thumb_id  = $image_thumb_id;
            $this->gig->image_medium_id = $image_medium_id;
            $this->gig->image_large_id  = $image_large_id;
            $this->gig->save();

            // Check if request has new gallery images
            if (is_array($this->images) && count($this->images)) {
                
                // Loop through old images
                foreach ($this->gig->images as $image) {
                    
                    // Delete files
                    deleteModelFile($image->small);
                    deleteModelFile($image->medium);
                    deleteModelFile($image->large);

                }

                // Delete old gallery
                GigImage::where('gig_id', $this->gig->id)->delete();

                // Upload new images
                foreach ($this->images as $image) {
                
                    // Upload small image
                    $thumb_id  = ImageUploader::make($image)->resize(400)->folder('gigs/gallery/small')->handle();
    
                    // Upload medium image
                    $medium_id = ImageUploader::make($image)->resize(800)->folder('gigs/gallery/medium')->handle();
    
                    // Upload large image
                    $large_id  = ImageUploader::make($image)->resize(1200)->folder('gigs/gallery/large')->handle();
    
                    // Save images
                    GigImage::create([
                        'gig_id'        => $this->gig->id,
                        'img_thumb_id'  => $thumb_id,
                        'img_medium_id' => $medium_id,
                        'img_large_id'  => $large_id
                    ]);
    
                }

            }

            // Check if request has new documents
            if (settings('publish')->is_documents_enabled && is_array($this->documents) && count($this->documents)) {
            
                // Delete old documents
                foreach ($this->gig->documents as $doc) {
                    
                    // Get document path
                    $path     = public_path('storage/gigs/documents/' . $doc->uid . '.pdf');

                    // Check if file exists
                    if (File::exists($path)) {
                        
                        // Delete file from local storage
                        File::delete($path);

                    }

                    // Delete document
                    $doc->delete();

                }

                // Upload new documents
                foreach ($this->documents as $d) {
                    
                    // Generate document unique id
                    $doc_uid = uid();

                    // Get original name
                    $name    = $d->getClientOriginalName();

                    // Get file size
                    $size    = $d->getSize();

                    // Move document to local storage
                    $d->storeAs('gigs/documents', $doc_uid . '.pdf', 'custom');

                    // Save document in database
                    GigDocument::create([
                        'uid'    => $doc_uid,
                        'gig_id' => $this->gig->id,
                        'name'   => $name,
                        'size'   => $size
                    ]);


                }

            }

            // Gig has been posted successfully
            $this->isFinished = url('service', $slug);

            // Send notification to admin
            if ($status === 'pending') {
                
                $this->is_approved = false;

                Admin::first()->notify( (new PendingGig($this->gig))->locale(config('app.locale')) );

            } else {

                $this->is_approved = true;

            }

            // Success message
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_gig_created_successfully') )
            );

            // Scroll up
            $this->dispatch('scrollUp');

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

        }
    }
    
}
