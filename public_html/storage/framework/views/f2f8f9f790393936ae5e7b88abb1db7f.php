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
                <i class="ph-duotone ph-pencil"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_edit_user'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('dashboard.t_create_update_user_subtitle'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_username')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_username')),'model' => 'username','icon' => 'user']); ?>
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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_email_address')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_email_address')),'model' => 'email','type' => 'email','icon' => 'at']); ?>
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
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_password')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_password')),'model' => 'password','type' => 'password','icon' => 'lock']); ?>
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

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12">

                    
                    <div class="w-full" wire:ignore>
                        <?php if (isset($component)) { $__componentOriginal763d7a4c405696a85a7a7ec4f959c809 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select','data' => ['required' => true,'searchable' => true,'componentId' => $this->id(),'name' => 'account_type','selectedValue' => $account_type,'label' => __('messages.t_account_type'),'placeholder' => __('messages.t_choose_account_type'),'data' => 'manual']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'searchable' => true,'component-id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->id()),'name' => 'account_type','selected_value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($account_type),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_account_type')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_choose_account_type')),'data' => 'manual']); ?>
                        
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => __('messages.t_freelancer'),'value' => 'seller']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_freelancer')),'value' => 'seller']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => __('messages.t_buyer'),'value' => 'buyer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_buyer')),'value' => 'buyer']); ?>
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

                      
                    <?php $__errorArgs = ['account_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('account_type'), false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

                </div>

                
                <div class="col-span-12">

                    
                    <div class="w-full" wire:ignore>
                        <?php if (isset($component)) { $__componentOriginal763d7a4c405696a85a7a7ec4f959c809 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select','data' => ['required' => true,'searchable' => true,'componentId' => $this->id(),'name' => 'level','selectedValue' => $level,'label' => __('messages.t_level'),'placeholder' => __('messages.t_choose_level'),'data' => 'manual']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'searchable' => true,'component-id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->id()),'name' => 'level','selected_value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($level),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_level')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_choose_level')),'data' => 'manual']); ?>
                        
                            <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => $user_level->title,'value' => $user_level->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_level->title),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_level->id)]); ?>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

                      
                    <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('level'), false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

                </div>

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12">

                    
                    <div class="w-full" wire:ignore>
                        <?php if (isset($component)) { $__componentOriginal763d7a4c405696a85a7a7ec4f959c809 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select','data' => ['required' => true,'searchable' => true,'componentId' => $this->id(),'name' => 'country','selectedValue' => $country,'label' => __('messages.t_country'),'placeholder' => __('messages.t_choose_country'),'data' => 'manual']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'searchable' => true,'component-id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->id()),'name' => 'country','selected_value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($country),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_country')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_choose_country')),'data' => 'manual']); ?>
                        
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => $user_country->name,'value' => $user_country->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_country->name),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_country->id)]); ?>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

                      
                    <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('country'), false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

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
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_fullname')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_fullname')),'model' => 'fullname','icon' => 'identification-badge']); ?>
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
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_headline')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_your_headline')),'model' => 'headline','icon' => 'text-aa']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal2f60389a9e230471cd863683376c182f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f60389a9e230471cd863683376c182f = $attributes; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_description')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_description')),'rows' => '6','model' => 'description','icon' => 'text-columns']); ?>
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

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12">

                    
                    <div class="w-full" wire:ignore>
                        <?php if (isset($component)) { $__componentOriginal763d7a4c405696a85a7a7ec4f959c809 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select','data' => ['required' => true,'searchable' => true,'componentId' => $this->id(),'name' => 'status','selectedValue' => $status,'label' => __('messages.t_status'),'placeholder' => __('messages.t_choose_status'),'data' => 'manual']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'searchable' => true,'component-id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->id()),'name' => 'status','selected_value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($status),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_status')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_choose_status')),'data' => 'manual']); ?>
                        
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => __('messages.t_active'),'value' => 'active']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_active')),'value' => 'active']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => __('messages.t_verified'),'value' => 'verified']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_verified')),'value' => 'verified']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => __('messages.t_banned'),'value' => 'banned']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_banned')),'value' => 'banned']); ?>
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

                      
                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('status'), false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

                </div>

                
                <div class="col-span-12" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal74ca15e70645af8cef7acd003df5945e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74ca15e70645af8cef7acd003df5945e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.filepicker','data' => ['url' => !empty($user->avatar) ? src($user->avatar) : '','name' => 'avatar','placeholder' => __('messages.t_upload_avatar'),'acceptedFileTypes' => '.jpg,.png,.jpeg,.gif,.svg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.filepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!empty($user->avatar) ? src($user->avatar) : ''),'name' => 'avatar','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_upload_avatar')),'accepted_file_types' => '.jpg,.png,.jpeg,.gif,.svg']); ?>
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

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
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
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_available_balance')),'placeholder' => '0.00','model' => 'balance','icon' => 'wallet']); ?>
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
</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/admin/users/options/edit.blade.php ENDPATH**/ ?>