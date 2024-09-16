<div class="w-full">

    
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

    
    <div class="lg:flex lg:items-center lg:justify-between mb-14">
    
        <div class="min-w-0 flex-1">

            
            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                <?php echo app('translator')->get('messages.t_users'); ?>
            </h2>

            
            <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                    
                    <li>
                        <div class="flex items-center">
                            <a href="<?php echo e(url('/'), false); ?>" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                <?php echo app('translator')->get('messages.t_home'); ?>
                            </a>
                        </div>
                    </li>
    
                    
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="<?php echo e(admin_url('/'), false); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                <?php echo app('translator')->get('messages.t_dashboard'); ?>
                            </a>
                        </div>
                    </li>
    
                    
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                <?php echo app('translator')->get('messages.t_users'); ?>
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

        
        <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4 justify-between space-x-4 rtl:space-x-reverse">

            
            <a href="<?php echo e(admin_url('users/trash'), false); ?>" class="btn p-2.5 hover:shadow-none ring-slate-300 dark:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-slate-300 dark:focus:ring-offset-zinc-600 space-x-2 rtl:space-x-reverse border">
                <?php if (isset($component)) { $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $attributes; } ?>
<?php $component = WireUi\View\Components\Icon::resolve(['name' => 'trash'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gray-400 dark:text-zinc-300','variant' => 'solid','mini' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $attributes = $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $component = $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
            </a>

            
            <a href="<?php echo e(admin_url('users/create'), false); ?>" class="btn p-2.5 hover:shadow-none ring-slate-300 dark:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-slate-300 dark:focus:ring-offset-zinc-600 space-x-2 rtl:space-x-reverse border">
                <?php if (isset($component)) { $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $attributes; } ?>
<?php $component = WireUi\View\Components\Icon::resolve(['name' => 'plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400 dark:text-zinc-300','variant' => 'solid','mini' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $attributes = $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $component = $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
            </a>

        </div>

    </div>

    
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>

                        <th><?php echo app('translator')->get('messages.t_user'); ?></th>
                        <th><?php echo app('translator')->get('messages.t_level'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('dashboard.t_available_funds'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_registeration_date'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_status'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_options'); ?></th>

                    </tr>
                </thead>
                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr wire:key="users-<?php echo e($user->uid, false); ?>">
                        
                            
                            <td>
                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <div class="h-10 w-10 inline-flex flex-shrink-0 relative">
                                        <?php if($user->avatar): ?>
                                            <img class="mask is-squircle object-cover w-full h-full block" src="<?php echo e(src($user->avatar), false); ?>" alt="<?php echo e($user->username, false); ?>">
                                        <?php else: ?>
                                            <?php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            ?>
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba(<?php echo e($color, false); ?>, .1);color: rgb(<?php echo e($color, false); ?>)">
                                                <?php echo e(Str::substr($user->username, 0, 2), false); ?>

                                            </div>   
                                        <?php endif; ?>
                                    </div>
                                    <div class="-mt-1">
                                        <a href="<?php echo e(url('profile', $user->username), false); ?>" target="_blank" class="text-xs+ font-bold tracking-wide whitespace-nowrap dark:text-zinc-100 truncate">
                                            <?php echo e($user->username, false); ?>

                                        </a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap dark:text-zinc-300 font-medium truncate">
                                            <?php echo e($user->email, false); ?>

                                        </div>
                                    </div>
                                </div>
                            </td>

                            
                            <td>
                                <?php if($user->level?->badge): ?>
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <img src="<?php echo e(src($user->level?->badge), false); ?>" alt="<?php echo e($user->level?->title, false); ?>" class="h-6 w-6">
                                        <span class="<?php if($user->level->level_bg_color): ?> px-3 <?php else: ?> font-semibold <?php endif; ?> py-1 rounded text-xs tracking-wide" style="color: <?php echo e($user->level->level_color, false); ?>;<?php if($user->level->level_bg_color): ?> background-color: <?php echo e($user->level->level_bg_color, false); ?> <?php endif; ?>"><?php echo e($user->level?->title, false); ?></span>
                                    </div>
                                <?php else: ?>
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <span class="<?php if($user->level->level_bg_color): ?> px-3 <?php else: ?> font-semibold <?php endif; ?> py-1 rounded text-xs tracking-wide" style="color: <?php echo e($user->level->level_color, false); ?>;<?php if($user->level->level_bg_color): ?> background-color: <?php echo e($user->level->level_bg_color, false); ?> <?php endif; ?>"><?php echo e($user->level?->title, false); ?></span>
                                    </div>
                                <?php endif; ?>
                            </td>

                            
                            <td class="text-center">
                                <span class="text-sm font-normal tracking-wide text-gray-700 dark:text-zinc-200">
                                    <?php echo e(money($user->balance_available, settings('currency')->code, true), false); ?>

                                </span>
                            </td>

                            
                            <td class="text-center">
                                <span class="text-xs+ font-normal tracking-wide text-gray-400 dark:text-zinc-300">
                                    <?php echo e(format_date($user->created_at), false); ?>

                                </span>
                            </td>

                            
                            <td class="text-center">
                                <?php if($user->is_restricted): ?>
                                    <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-red-500 dark:text-red-400 lowercase tracking-wide">
                                        <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-red-600 ltr:-mr-1 rtl:-ml-1"></i>
                                        <span><?php echo app('translator')->get('dashboard.t_restricted'); ?></span>
                                    </div>
                                <?php else: ?>

                                    
                                    <?php switch($user->status):

                                        
                                        case ('pending'): ?>
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-amber-500 dark:text-amber-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-amber-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span><?php echo app('translator')->get('messages.t_pending'); ?></span>
                                            </div>
                                        <?php break; ?>

                                        
                                        <?php case ('active'): ?>
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-green-500 dark:text-green-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-green-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span><?php echo app('translator')->get('messages.t_active'); ?></span>
                                            </div>
                                        <?php break; ?>

                                        
                                        <?php case ('banned'): ?>
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-zinc-500 dark:text-zinc-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-zinc-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span><?php echo app('translator')->get('messages.t_banned'); ?></span>
                                            </div>
                                        <?php break; ?>

                                        
                                        <?php case ('verified'): ?>
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-blue-500 dark:text-blue-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-blue-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span><?php echo app('translator')->get('messages.t_verified'); ?></span>
                                            </div>
                                        <?php break; ?>
                                            
                                    <?php endswitch; ?>

                                <?php endif; ?>
                            </td>

                            
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    
                                    <?php if($user->status == 'pending'): ?>
                                        <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['wire:confirm' => ''.e(__('dashboard.t_are_u_sure_want_proceed'), false).'','icon' => 'check-fat','title' => __('messages.t_approve'),'iconColor' => 'text-green-400','action' => 'activate('.e($user->id, false).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:confirm' => ''.e(__('dashboard.t_are_u_sure_want_proceed'), false).'','icon' => 'check-fat','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_approve')),'icon-color' => 'text-green-400','action' => 'activate('.e($user->id, false).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
                                    <?php endif; ?>

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'pencil','title' => __('messages.t_edit'),'href' => ''.e(admin_url('users/edit/' . $user->uid), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_edit')),'href' => ''.e(admin_url('users/edit/' . $user->uid), false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'identification-card','title' => __('messages.t_details'),'href' => ''.e(admin_url('users/details/' . $user->uid), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'identification-card','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_details')),'href' => ''.e(admin_url('users/details/' . $user->uid), false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'paper-plane-tilt','title' => __('messages.t_send_an_email'),'href' => ''.e(admin_url('users/message/' . $user->uid), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'paper-plane-tilt','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_send_an_email')),'href' => ''.e(admin_url('users/message/' . $user->uid), false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'user-minus','title' => __('dashboard.t_restrict'),'href' => ''.e(admin_url('users/restrict/' . $user->uid), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'user-minus','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_restrict')),'href' => ''.e(admin_url('users/restrict/' . $user->uid), false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>

                                    
                                    <?php if($user->status != 'banned'): ?>
                                        <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['wire:confirm' => ''.e(__('dashboard.t_are_u_sure_want_proceed'), false).'','icon' => 'prohibit','title' => __('dashboard.t_ban'),'action' => 'ban($user->id)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:confirm' => ''.e(__('dashboard.t_are_u_sure_want_proceed'), false).'','icon' => 'prohibit','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_ban')),'action' => 'ban($user->id)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
                                    <?php endif; ?>

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['wire:confirm' => ''.e(__('dashboard.t_are_u_sure_want_proceed'), false).'','icon' => 'trash','title' => __('messages.t_move_to_trash'),'iconColor' => 'text-red-600','action' => 'delete('.e($user->id, false).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:confirm' => ''.e(__('dashboard.t_are_u_sure_want_proceed'), false).'','icon' => 'trash','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_move_to_trash')),'icon-color' => 'text-red-600','action' => 'delete('.e($user->id, false).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>

                                </div>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6">
                                <div class="text-center px-4 bw-empty-state py-10">

                                    
                                    <img src="<?php echo e(asset('img/svg/no-results.svg'), false); ?>" class="h-44 rounded-full border w-44 object-cover border-slate-50 max-w-xs mx-auto mb-6">  
                                    
                                    
                                    <div class="text-slate-600/70 dark:text-zinc-300 font-normal px-6">
                                        <?php echo app('translator')->get('dashboard.t_no_results_table_hint'); ?>
                                    </div> 

                                    
                                    <a href="<?php echo e(admin_url('users/create'), false); ?>" class="bw-button primary !bg-primary-600 focus:ring-primary-500/70 hover:!bg-primary-700 active:!bg-primary-700 focus:!ring cursor-pointer rounded-full inline-block mx-auto my-4 !px-10 !font-normal !text-[11px] !py-2.5 tracking-widest uppercase">
                                        <span class="grow"><?php echo app('translator')->get('messages.t_create'); ?></span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

    
    <?php if($users->hasPages()): ?>
        <div class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
            <?php echo $users->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>
    
</div>








<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/admin/users/users.blade.php ENDPATH**/ ?>