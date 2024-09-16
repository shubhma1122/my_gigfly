<div class="w-full sm:mx-auto sm:max-w-2xl" x-data="{ driver: <?php if ((object) ('driver') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId(), false); ?>').entangle('<?php echo e('driver'->value(), false); ?>')<?php echo e('driver'->hasModifier('live') ? '.live' : '', false); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId(), false); ?>').entangle('<?php echo e('driver', false); ?>')<?php endif; ?> }" x-cloak>
    
    
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

    
	<?php if (isset($component)) { $__componentOriginalefda5ddba01882262075fadff48950fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefda5ddba01882262075fadff48950fb = $attributes; } ?>
<?php $component = Rawilk\FormComponents\Components\Form::resolve(['hasFiles' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Rawilk\FormComponents\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:submit' => 'update','class' => 'card px-4 py-10 sm:p-10 md:mx-0 mb-6']); ?>

        
        <div class="flex items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">
            <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                <i class="ph-duotone ph-at"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_smtp_settings'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('messages.t_smtp_settings_subtitle'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                
                <div class="col-span-12">
                    <div class="py-2.5 px-3 rounded text-amber-700 bg-amber-100">
                        <div class="flex items-center gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-5 h-5 flex-none text-amber-600"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd"/></svg>
                            <h3 class="font-semibold grow text-xs leading-5">
                                <?php echo app('translator')->get('dashboard.t_smtp_ports_restrictions_alert'); ?>
                            </h3>
                        </div>
                    </div>
                </div>

                
                <div class="col-span-12">

                    
                    <div class="w-full" wire:ignore>
                        <?php if (isset($component)) { $__componentOriginal763d7a4c405696a85a7a7ec4f959c809 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select','data' => ['required' => true,'componentId' => $this->__id,'name' => 'driver','selectedValue' => $driver,'label' => __('dashboard.t_default_mail_transport_driver'),'placeholder' => __('dashboard.t_choose_a_value'),'data' => 'manual']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'component-id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->__id),'name' => 'driver','selected_value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($driver),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_default_mail_transport_driver')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_choose_a_value')),'data' => 'manual']); ?>
                        
                            
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => 'SMTP','value' => 'smtp']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'SMTP','value' => 'smtp']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $attributes = $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $component = $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>

                            
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => 'Sendmail','value' => 'sendmail']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Sendmail','value' => 'sendmail']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $attributes = $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $component = $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763d7a4c405696a85a7a7ec4f959c809)): ?>
<?php $attributes = $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809; ?>
<?php unset($__attributesOriginal763d7a4c405696a85a7a7ec4f959c809); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763d7a4c405696a85a7a7ec4f959c809)): ?>
<?php $component = $__componentOriginal763d7a4c405696a85a7a7ec4f959c809; ?>
<?php unset($__componentOriginal763d7a4c405696a85a7a7ec4f959c809); ?>
<?php endif; ?>
                    </div>

                      
                    <?php $__errorArgs = ['driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('driver'), false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

                </div>

                
                <div class="col-span-12 -mx-4 sm:-mx-10">
                    <div class="h-0.5 w-full bg-zinc-100 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12" x-show="driver == 'smtp'">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_smtp_host')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_smtp_host')),'model' => 'host','icon' => 'hard-drives']); ?>
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

                
                <div class="col-span-12" x-show="driver == 'smtp'">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_smtp_port')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_smtp_port')),'model' => 'port','icon' => 'usb']); ?>
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

                
                <div class="col-span-12" x-show="driver == 'smtp'">

                    
                    <div class="w-full" wire:ignore>
                        <?php if (isset($component)) { $__componentOriginal763d7a4c405696a85a7a7ec4f959c809 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select','data' => ['required' => true,'componentId' => $this->__id,'name' => 'encryption','selectedValue' => $encryption,'label' => __('messages.t_smtp_encryption'),'placeholder' => __('messages.t_choose_smtp_encryption'),'data' => 'manual']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'component-id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->__id),'name' => 'encryption','selected_value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($encryption),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_smtp_encryption')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_choose_smtp_encryption')),'data' => 'manual']); ?>
                        
                            
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => 'SSL','value' => 'ssl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'SSL','value' => 'ssl']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $attributes = $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $component = $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>

                            
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => 'TLS','value' => 'tls']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'TLS','value' => 'tls']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $attributes = $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $component = $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763d7a4c405696a85a7a7ec4f959c809)): ?>
<?php $attributes = $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809; ?>
<?php unset($__attributesOriginal763d7a4c405696a85a7a7ec4f959c809); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763d7a4c405696a85a7a7ec4f959c809)): ?>
<?php $component = $__componentOriginal763d7a4c405696a85a7a7ec4f959c809; ?>
<?php unset($__componentOriginal763d7a4c405696a85a7a7ec4f959c809); ?>
<?php endif; ?>
                    </div>

                      
                    <?php $__errorArgs = ['encryption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('encryption'), false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

                </div>

                
                <div class="col-span-12" x-show="driver == 'smtp'">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_username')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_username')),'model' => 'username','icon' => 'fingerprint']); ?>
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

                
                <div class="col-span-12" x-show="driver == 'smtp'">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_password')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_password')),'hint' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_leave_blank_if_u_dont_want_t_change_it')),'model' => 'password','type' => 'password','icon' => 'password']); ?>
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

                
                <?php if($driver == 'sendmail'): ?>
                    
                    
                    <div class="col-span-12">
                        <div class="py-2.5 px-3 rounded text-blue-700 bg-blue-50">
                            <div class="flex items-center gap-x-3">
                                <svg class="inline-block w-5 h-5 flex-none text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                <h3 class="font-semibold grow text-xs leading-5">
                                    <?php echo app('translator')->get('dashboard.t_sendmail_path_explain_hint'); ?>
                                </h3>
                            </div>
                        </div>
                    </div>

                    
                    <?php if(ini_get('sendmail_path')): ?>
                        <div class="col-span-12">
                            <div class="py-2.5 px-3 rounded text-yellow-700 bg-yellow-50">
                                <div class="flex items-center gap-x-3">
                                    <svg class="inline-block w-5 h-5 flex-none text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    <h3 class="font-semibold grow text-xs leading-5">
                                        <?php echo e(ini_get('sendmail_path'), false); ?>

                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_sendmail_path')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enter_sendmail_path')),'model' => 'sendmail_path','icon' => 'folder-open']); ?>
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

                <?php endif; ?>

                
                <div class="col-span-12 -mx-4 sm:-mx-10">
                    <div class="h-0.5 w-full bg-zinc-100 dark:bg-zinc-700 block"></div>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_smtp_from_address')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_email_address')),'model' => 'from_address','type' => 'email','icon' => 'paper-plane-tilt']); ?>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_smtp_from_name')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_your_company_website_name')),'model' => 'from_name','icon' => 'user']); ?>
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

    
    <?php if (isset($component)) { $__componentOriginalefda5ddba01882262075fadff48950fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefda5ddba01882262075fadff48950fb = $attributes; } ?>
<?php $component = Rawilk\FormComponents\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Rawilk\FormComponents\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:submit' => 'send','class' => 'card px-4 py-10 sm:p-10 md:mx-0']); ?>

        
        <div class="flex items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">
            <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                <i class="ph-duotone ph-paper-plane-tilt"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_test_settings'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('messages.t_test_settings_smtp_subtitle'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                
                <div class="col-span-12">
                    <div class="py-2.5 px-3 rounded text-blue-700 bg-blue-50">
                        <div class="flex items-center gap-x-3">
                            <svg class="inline-block w-5 h-5 flex-none text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            <h3 class="font-semibold grow text-xs leading-5">
                                <?php echo app('translator')->get('dashboard.t_test_smtp_enable_debug_mode_hint'); ?>
                            </h3>
                        </div>
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
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_email_address')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_email_address')),'model' => 'email','type' => 'email','icon' => 'at']); ?>
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
                <?php echo app('translator')->get('messages.t_send'); ?>
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

</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/admin/settings/smtp.blade.php ENDPATH**/ ?>