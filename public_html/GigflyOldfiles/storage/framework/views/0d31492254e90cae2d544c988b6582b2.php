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
                <i class="ph-duotone ph-chats-circle"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_live_chat_settings'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('dashboard.t_live_chat_settings_subtite'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                
                <div class="col-span-12">
                    <div>
                        <ul class="flex space-x-4 rtl:space-x-reverse text-xs text-primary-600 font-semibold">
                            <li>
                                <a href="https://pusher.com" class="hover:text-black hover:underline" target="_blank">Step 1</a>
                            </li>
    
                            <li>
                                <a href="https://i.postimg.cc/JnK3kQ9q/1.png" class="hover:text-black hover:underline" target="_blank">Step 2</a>
                            </li>
    
                            <li>
                                <a href="https://i.postimg.cc/fW2jWB7W/2.png" class="hover:text-black hover:underline" target="_blank">Step 3</a>
                            </li>
    
                            <li>
                                <a href="https://i.postimg.cc/90Mdt72j/3.png" class="hover:text-black hover:underline" target="_blank">Step 4</a>
                            </li>
    
                            <li>
                                <a href="https://i.postimg.cc/rsPShwyR/4.png" class="hover:text-black hover:underline" target="_blank">Step 5</a>
                            </li>
                        </ul>
                    </div>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_pusher_key')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enter_pusher_key')),'model' => 'pusher_key','icon' => 'key']); ?>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_pusher_secret')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enter_pusher_secret')),'model' => 'pusher_secret','icon' => 'lock-key']); ?>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_pusher_app_id')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enter_pusher_app_id')),'model' => 'pusher_app_id','icon' => 'fingerprint-simple']); ?>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_pusher_cluster')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enter_pusher_cluster')),'model' => 'pusher_cluster','icon' => 'globe']); ?>
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

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginaled32a6555010d9a0924dd1854d52b017 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled32a6555010d9a0924dd1854d52b017 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.toggle','data' => ['checked' => $pusher_encrypted,'name' => 'pusher_encrypted','label' => __('dashboard.t_enable_pusher_encryption'),'labelPosition' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pusher_encrypted),'name' => 'pusher_encrypted','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enable_pusher_encryption')),'label_position' => 'right']); ?>
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

                
                <div class="col-span-12 -mx-4 sm:-mx-10">
                    <div class="h-0.5 w-full bg-zinc-100 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginaled32a6555010d9a0924dd1854d52b017 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled32a6555010d9a0924dd1854d52b017 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.toggle','data' => ['checked' => $enable_attachments,'name' => 'enable_attachments','label' => __('dashboard.t_enable_chat_attachments'),'labelPosition' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($enable_attachments),'name' => 'enable_attachments','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enable_chat_attachments')),'label_position' => 'right']); ?>
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

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginaled32a6555010d9a0924dd1854d52b017 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled32a6555010d9a0924dd1854d52b017 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.toggle','data' => ['checked' => $enable_emojis,'name' => 'enable_emojis','label' => __('dashboard.t_enable_emojis'),'labelPosition' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($enable_emojis),'name' => 'enable_emojis','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enable_emojis')),'label_position' => 'right']); ?>
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

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginaled32a6555010d9a0924dd1854d52b017 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled32a6555010d9a0924dd1854d52b017 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.toggle','data' => ['checked' => $play_notification_sound,'name' => 'play_notification_sound','label' => __('dashboard.t_play_new_message_notification_sound'),'labelPosition' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($play_notification_sound),'name' => 'play_notification_sound','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_play_new_message_notification_sound')),'label_position' => 'right']); ?>
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

                
                <div class="col-span-12 -mx-4 sm:-mx-10">
                    <div class="h-0.5 w-full bg-zinc-100 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginal2f60389a9e230471cd863683376c182f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f60389a9e230471cd863683376c182f = $attributes; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_allowed_image_extensions')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_separate_each_ext_with_comma')),'model' => 'allowed_images','rows' => 6]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $attributes = $__attributesOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__attributesOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $component = $__componentOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__componentOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
                </div>

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginal2f60389a9e230471cd863683376c182f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f60389a9e230471cd863683376c182f = $attributes; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_allowed_file_extensions')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_separate_each_ext_with_comma')),'model' => 'allowed_files','rows' => 6]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $attributes = $__attributesOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__attributesOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $component = $__componentOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__componentOriginal2f60389a9e230471cd863683376c182f); ?>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_max_size_mb')),'placeholder' => '00.00','model' => 'max_file_size','icon' => 'floppy-disk']); ?>
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
</div><?php /**PATH /home/u304230485/domains/gigfly.in/public_html/resources/views/livewire/admin/settings/chat.blade.php ENDPATH**/ ?>