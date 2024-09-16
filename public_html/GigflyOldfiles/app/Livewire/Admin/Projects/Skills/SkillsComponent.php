<?php
namespace App\Livewire\Admin\Projects\Skills;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\ProjectSkill;
use Livewire\Attributes\Layout;
use App\Models\ProjectRequiredSkill;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class SkillsComponent extends Component
{
    use SEOToolsTrait, Actions, LivewireAlert;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.admin-app')]
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle(__('messages.t_skills'), true) );
        $this->seo()->setDescription( settings('seo')->description );
        
        return view('livewire.admin.projects.skills.skills', [
            'skills' => $this->skills
        ]);
    }


    /**
     * Get projects skills
     *
     * @return object
     */
    public function getSkillsProperty()
    {
        return ProjectSkill::whereHas('category')
                            ->with('category')
                            ->latest('id')
                            ->paginate(40);
    }
    

    /**
     * Delete skill
     *
     * @param int $id
     * @return void
     */
    public function delete($id)
    {
        try {
            
            // Get skill
            $skill = ProjectSkill::where('id', $id)->firstOrFail();

            // Delete this skill from required skills in projects
            ProjectRequiredSkill::where('skill_id', $skill->id)->delete();

            // Delete this skill
            $skill->delete();

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_toast_operation_success') )
            );

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