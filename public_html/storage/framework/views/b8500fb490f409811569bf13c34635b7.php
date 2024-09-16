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
                <?php echo app('translator')->get('dashboard.t_payment_gateways'); ?>
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
                                <?php echo app('translator')->get('dashboard.t_payment_gateways'); ?>
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

    </div>

    
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>

                        <th><?php echo app('translator')->get('dashboard.t_payment_gateway'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_default_currency'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_status'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_exchange_rate'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_options'); ?></th>

                    </tr>
                </thead>
                <tbody>

                    
                    <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr wire:key="payment-gateways-<?php echo e($g->uid, false); ?>">

                            
                            <td>
                                <div class="flex items-center space-x-2 rtl:space-x-reverse">

                                    
                                    <div class="h-8 w-8 inline-flex flex-shrink-0 relative">
                                        <?php if($g->logo): ?>
                                            <img class="mask is-squircle object-cover w-full h-full block" src="<?php echo e(src($g->logo), false); ?>" alt="<?php echo e($g->name, false); ?>">
                                        <?php else: ?>
                                            <?php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            ?>
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba(<?php echo e($color, false); ?>, .1);color: rgb(<?php echo e($color, false); ?>)">
                                                <?php echo e(Str::substr($g->name, 0, 2), false); ?>

                                            </div>   
                                        <?php endif; ?>
                                    </div>

                                    
                                    <div class="space-y-1 font-medium dark:text-white">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse">

                                            
                                            <div class="font-semibold whitespace-nowrap truncate block max-w-[240px] hover:text-zinc-900 dark:text-white text-xs+ text-zinc-700">
                                                <?php echo e($g->name, false); ?>

                                            </div>

                                            
                                            <?php if($g->country): ?>
                                                <img src="<?php echo e(countryFlag($g->country), false); ?>" alt="<?php echo e($g->country, false); ?>" class="h-3.5">
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                </div>
                            </td>

                            
                            <td class="text-center">
                                <div class="text-gray-700 dark:text-gray-100 text-sm font-bold tracking-widest">
                                    <?php echo e($g->currency, false); ?>    
                                </div>
                            </td>

                            
                            <td class="text-center">
                                <label class="relative inline-flex items-center mt-2.5 cursor-pointer">
                                    <input type="checkbox" wire:change="update('<?php echo e($g->slug, false); ?>')" <?php echo e($g->is_active ? 'checked' : '', false); ?> class="sr-only peer">
                                    <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-primary-600"></div>
                                </label>
                            </td>

                            
                            <td class="text-center">
                                <div class="dark:text-gray-100 flex items-center justify-center space-x-2 text-slate-500 text-sm">
                                    <span>1$</span>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="5" x2="19" y1="9" y2="9"></line><line x1="5" x2="19" y1="15" y2="15"></line></svg>
                                    <span>
                                        <?php if(isset(config('money')[$g->currency])): ?>
                                            <?php echo e(money($g->exchange_rate, $g->currency, true), false); ?>

                                        <?php else: ?>
                                            <?php echo e($g->exchange_rate, false); ?> <?php echo e($g->currency, false); ?>

                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>

                            
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'gear','title' => __('messages.t_settings'),'href' => ''.e(admin_url('services/payment/edit/' . $g->slug), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'gear','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_settings')),'href' => ''.e(admin_url('services/payment/edit/' . $g->slug), false).'']); ?>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php
                        $offline_method = payment_gateway('offline', false, true);
                    ?>
                    <?php if( !empty( $offline_method?->name ) ): ?>
                        <tr wire:key="payment-gateways-offline">

                            
                            <td>
                                <div class="flex items-center space-x-4 rtl:space-x-reverse">

                                    
                                    <div class="h-8 w-8 inline-flex flex-shrink-0 relative">
                                        <?php if($offline_method->logo): ?>
                                            <img class="mask is-squircle object-cover w-full h-full block" src="<?php echo e(src($offline_method->logo), false); ?>" alt="<?php echo e($offline_method->name, false); ?>">
                                        <?php else: ?>
                                            <?php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            ?>
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba(<?php echo e($color, false); ?>, .1);color: rgb(<?php echo e($color, false); ?>)">
                                                <?php echo e(Str::substr($offline_method->name, 0, 2), false); ?>

                                            </div>   
                                        <?php endif; ?>
                                    </div>

                                    
                                    <div class="space-y-1 font-medium dark:text-white">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse">

                                            
                                            <div class="font-semibold whitespace-nowrap truncate block max-w-[240px] hover:text-zinc-900 dark:text-white text-xs+ text-zinc-700">
                                                <?php echo e($offline_method->name, false); ?>

                                            </div>

                                            
                                            <?php if($offline_method->country): ?>
                                                <img src="<?php echo e(countryFlag($offline_method->country), false); ?>" alt="<?php echo e($offline_method->country, false); ?>" class="h-3.5">
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                </div>
                            </td>

                            
                            <td class="text-center">
                                <div class="text-gray-700 dark:text-gray-100 text-sm font-bold tracking-widest">
                                    <?php echo e($offline_method->currency, false); ?>    
                                </div>
                            </td>

                            
                            <td class="text-center">
                                <label class="relative inline-flex items-center mt-2.5 cursor-pointer">
                                    <input type="checkbox" wire:change="update('<?php echo e($offline_method->slug, false); ?>')" <?php echo e($offline_method->is_active ? 'checked' : '', false); ?> class="sr-only peer">
                                    <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-primary-600"></div>
                                </label>
                            </td>

                            
                            <td class="text-center">
                                <div class="dark:text-gray-100 flex items-center justify-center space-x-2 text-slate-500 text-sm">
                                    <span>1$</span>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="5" x2="19" y1="9" y2="9"></line><line x1="5" x2="19" y1="15" y2="15"></line></svg>
                                    <span>
                                        <?php if(isset(config('money')[$offline_method?->currency])): ?>
                                            <?php echo e(money($offline_method?->exchange_rate, $offline_method?->currency, true), false); ?>

                                        <?php else: ?>
                                            <?php echo e($offline_method?->exchange_rate, false); ?> <?php echo e($offline_method?->currency, false); ?>

                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>

                            
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'gear','title' => __('messages.t_settings'),'href' => ''.e(admin_url('services/payment/edit/offline'), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'gear','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_settings')),'href' => ''.e(admin_url('services/payment/edit/offline'), false).'']); ?>
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
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

</div><?php /**PATH /home/u304230485/domains/gigfly.in/public_html/resources/views/livewire/admin/services/payment/payment.blade.php ENDPATH**/ ?>