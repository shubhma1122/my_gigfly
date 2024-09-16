<?php
namespace App\Livewire\Main\Seller\Gigs;

use App\Models\Gig;
use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class GigsComponent extends Component
{
    use WithPagination, SEOToolsTrait, LivewireAlert, Actions;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.seller-app')]
    public function render()
    {
        // SEO
        $separator   = settings('general')->separator;
        $title       = __('messages.t_my_gigs') . " $separator " . settings('general')->title;
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

        return view('livewire.main.seller.gigs.gigs', [
            'gigs' => $this->gigs
        ]);
    }


    /**
     * Get seller's gigs
     *
     * @return object
     */
    public function getGigsProperty()
    {
        // Get gigs by this seller
        $gigs = Gig::where('user_id', auth()->id())->latest()->paginate(42);

        // Return gigs
        return $gigs;
    }


    /**
     * Confirm deleting gig
     *
     * @param string $id
     * @return void
     */
    public function confirmDelete($id)
    {
        try {
            
            // Get gig
            $gig = Gig::where('user_id', auth()->id())->where('uid', $id)->where('status', '!=', 'deleted')->firstOrFail();

            // Check if gig has orders in queue
            if ($gig->total_orders_in_queue()) {
                
                // Finish orders first then you can delete it
                $this->notification([
                    'title'       => __('messages.t_error'),
                    'description' => __('messages.t_this_gig_has_orders_in_queue_delete'),
                    'icon'        => 'error'
                ]);

                return;

            }

            // Confirm delete
            $this->dialog()->confirm([
                'title'       => __('messages.t_confirm_delete'),
                'description' => "<div class='leading-relaxed'>" . __('messages.t_are_u_sure_u_want_to_delete_gig') . "<br>". $gig->title . "</div>",
                'icon'        => 'error',
                'accept'      => [
                    'label'  => __('messages.t_delete'),
                    'method' => 'delete',
                    'params' => $gig->uid,
                ],
                'reject' => [
                    'label'  => __('messages.t_cancel')
                ],
            ]);

        } catch (\Throwable $th) {
            
            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( $th->getMessage(), 'error' )
            );

        }
    }


    /**
     * Delete selected gig
     *
     * @param string $id
     * @return void
     */
    public function delete($id)
    {
        // Get gig
        $gig = Gig::where('user_id', auth()->id())->where('uid', $id)->where('status', '!=', 'deleted')->firstOrFail();

        // Check if gig has orders in queue
        if ($gig->total_orders_in_queue()) {
            
            // Finish orders first then you can delete it
            $this->notification([
                'title'       => __('messages.t_error'),
                'description' => __('messages.t_this_gig_has_orders_in_queue_delete'),
                'icon'        => 'error'
            ]);

            return;

        }

        // Delete gig
        $gig->status     = 'deleted';
        $gig->deleted_at = now();
        $gig->save();

        // Success
        $this->alert(
            'success', 
            __('messages.t_success'), 
            livewire_alert_params( __('messages.t_toast_operation_success') )
        );
    }
    
}