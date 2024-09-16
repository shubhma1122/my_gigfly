<div class="w-full sm:mx-auto sm:max-w-2xl">
	<?php if (isset($component)) { $__componentOriginalefda5ddba01882262075fadff48950fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefda5ddba01882262075fadff48950fb = $attributes; } ?>
<?php $component = Rawilk\FormComponents\Components\Form::resolve(['hasFiles' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Rawilk\FormComponents\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:submit' => 'update','class' => 'card px-4 py-10 sm:p-10 md:mx-0']); ?>

        
        <?php if (isset($component)) { $__componentOriginala21f49a74cfebdbb98a47509c8a19010 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala21f49a74cfebdbb98a47509c8a19010 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $attributes = $__attributesOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $component = $__componentOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__componentOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>

        
        <div class="flex items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">
            <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                <i class="ph-duotone ph-slideshow"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_hero_section_settings'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('messages.t_hero_section_settings_subtitle'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginaled32a6555010d9a0924dd1854d52b017 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled32a6555010d9a0924dd1854d52b017 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.toggle','data' => ['checked' => $enable_bg_img,'name' => 'enable_bg_img','label' => __('messages.t_enable_hero_section_background_img'),'labelPosition' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($enable_bg_img),'name' => 'enable_bg_img','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enable_hero_section_background_img')),'label_position' => 'right']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled32a6555010d9a0924dd1854d52b017)): ?>
<?php $attributes = $__attributesOriginaled32a6555010d9a0924dd1854d52b017; ?>
<?php unset($__attributesOriginaled32a6555010d9a0924dd1854d52b017); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled32a6555010d9a0924dd1854d52b017)): ?>
<?php $component = $__componentOriginaled32a6555010d9a0924dd1854d52b017; ?>
<?php unset($__componentOriginaled32a6555010d9a0924dd1854d52b017); ?>
<?php endif; ?>
                </div>

                
                <div class="col-span-12" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal74ca15e70645af8cef7acd003df5945e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74ca15e70645af8cef7acd003df5945e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.filepicker','data' => ['url' => !empty(settings('hero')->background_large) ? src(settings('hero')->background_large) : '','name' => 'bg_large','placeholder' => __('messages.t_large_screen_background_img'),'acceptedFileTypes' => '.jpg,.png,.jpeg,.gif,.svg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.filepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!empty(settings('hero')->background_large) ? src(settings('hero')->background_large) : ''),'name' => 'bg_large','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_large_screen_background_img')),'accepted_file_types' => '.jpg,.png,.jpeg,.gif,.svg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $attributes = $__attributesOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__attributesOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $component = $__componentOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__componentOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>  
                </div>

                
                <div class="col-span-12" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal74ca15e70645af8cef7acd003df5945e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74ca15e70645af8cef7acd003df5945e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.filepicker','data' => ['url' => !empty(settings('hero')->background_medium) ? src(settings('hero')->background_medium) : '','name' => 'bg_medium','placeholder' => __('messages.t_medium_screen_background_img'),'acceptedFileTypes' => '.jpg,.png,.jpeg,.gif,.svg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.filepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!empty(settings('hero')->background_medium) ? src(settings('hero')->background_medium) : ''),'name' => 'bg_medium','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_medium_screen_background_img')),'accepted_file_types' => '.jpg,.png,.jpeg,.gif,.svg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $attributes = $__attributesOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__attributesOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $component = $__componentOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__componentOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>  
                </div>

                
                <div class="col-span-12" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal74ca15e70645af8cef7acd003df5945e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74ca15e70645af8cef7acd003df5945e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.filepicker','data' => ['url' => !empty(settings('hero')->background_small) ? src(settings('hero')->background_small) : '','name' => 'bg_small','placeholder' => __('messages.t_small_screen_background_img'),'acceptedFileTypes' => '.jpg,.png,.jpeg,.gif,.svg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.filepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!empty(settings('hero')->background_small) ? src(settings('hero')->background_small) : ''),'name' => 'bg_small','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_small_screen_background_img')),'accepted_file_types' => '.jpg,.png,.jpeg,.gif,.svg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $attributes = $__attributesOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__attributesOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $component = $__componentOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__componentOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>  
                </div>

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_hero_section_default_bg_color')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_color_hex_color_example')),'model' => 'bg_color','icon' => 'palette']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                </div>

                
                <div class="col-span-12 md:col-span-6">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_large_screen_height')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_value_in_pixel')),'model' => 'bg_large_height','icon' => 'ruler']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                </div>

                
                <div class="col-span-12 md:col-span-6">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_small_screen_height')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_value_in_pixel')),'model' => 'bg_small_height','icon' => 'ruler']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                </div>
                
            </div>
        </div>

        
        <div class="w-full mt-12">
            <?php if (isset($component)) { $__componentOriginal9a524495f8fba1bb9db48a43313dffc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a524495f8fba1bb9db48a43313dffc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.button.index','data' => ['size' => 'small','class' => 'mx-auto block w-full','canSubmit' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'small','class' => 'mx-auto block w-full','can_submit' => 'true']); ?>
                <?php echo app('translator')->get('messages.t_update'); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a524495f8fba1bb9db48a43313dffc1)): ?>
<?php $attributes = $__attributesOriginal9a524495f8fba1bb9db48a43313dffc1; ?>
<?php unset($__attributesOriginal9a524495f8fba1bb9db48a43313dffc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a524495f8fba1bb9db48a43313dffc1)): ?>
<?php $component = $__componentOriginal9a524495f8fba1bb9db48a43313dffc1; ?>
<?php unset($__componentOriginal9a524495f8fba1bb9db48a43313dffc1); ?>
<?php endif; ?>
        </div>
            
	 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefda5ddba01882262075fadff48950fb)): ?>
<?php $attributes = $__attributesOriginalefda5ddba01882262075fadff48950fb; ?>
<?php unset($__attributesOriginalefda5ddba01882262075fadff48950fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefda5ddba01882262075fadff48950fb)): ?>
<?php $component = $__componentOriginalefda5ddba01882262075fadff48950fb; ?>
<?php unset($__componentOriginalefda5ddba01882262075fadff48950fb); ?>
<?php endif; ?>
</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/admin/settings/hero.blade.php ENDPATH**/ ?>