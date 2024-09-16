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
                <i class="ph-duotone ph-shield-check"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_security_settings'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('messages.t_security_settings_subtitle'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">
                
                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginaled32a6555010d9a0924dd1854d52b017 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled32a6555010d9a0924dd1854d52b017 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.toggle','data' => ['checked' => $is_social_media_accounts,'name' => 'is_social_media_accounts','label' => __('messages.t_allow_users_share_social_account_in_profile'),'labelPosition' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($is_social_media_accounts),'name' => 'is_social_media_accounts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_allow_users_share_social_account_in_profile')),'label_position' => 'right']); ?>
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
                    <div class="py-2.5 px-3 rounded text-blue-700 bg-blue-50">
                        <div class="flex items-center gap-x-3">
                            <svg class="inline-block w-5 h-5 flex-none text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            <h3 class="font-semibold grow text-xs leading-5">
                                <?php echo app('translator')->get('dashboard.t_debug_mode_explain'); ?>
                            </h3>
                        </div>
                    </div>
                </div>

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginaled32a6555010d9a0924dd1854d52b017 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled32a6555010d9a0924dd1854d52b017 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.toggle','data' => ['checked' => $debug,'name' => 'debug','label' => __('dashboard.t_enable_app_debug_mode'),'labelPosition' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($debug),'name' => 'debug','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enable_app_debug_mode')),'label_position' => 'right']); ?>
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
</div><?php /**PATH /home/u304230485/domains/gigfly.in/public_html/resources/views/livewire/admin/settings/security.blade.php ENDPATH**/ ?>