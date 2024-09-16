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
                <?php echo app('translator')->get('dashboard.t_caching_system'); ?>
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
                                <?php echo app('translator')->get('messages.t_cache'); ?>
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

    </div>

    
    <ul role="list" class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-4">

        
        <li class="col-span-1">
            <button wire:click="clear('cache')" wire:confirm="<?php echo e(__('dashboard.t_are_u_sure_want_proceed'), false); ?>" type="button" class="card dark:hover:bg-zinc-900 dark:hover:text-white dark:text-zinc-200 font-semibold hover:bg-gray-100 hover:text-gray-900 inline-flex items-center justify-center px-4 py-3 rounded-lg text-gray-500 text-xs truncate bg-white">

                
                <i class="ph-duotone ph-hard-drives ltr:mr-3 rtl:ml-3 text-2xl text-red-400"></i>      
                
                
                <span class="w-full tracking-wide ltr:text-left rtl:text-right">
                    <?php echo app('translator')->get('dashboard.t_clear_system_cache'); ?>
                </span>

                
                <i class="ph-duotone ph-question ltr:ml-2 rtl:mr-2 text-xl text-slate-300 hover:text-slate-500 dark:text-zinc-400 dark:hover:text-zinc-200" data-popover-target="caching-system-popover-1" data-popover-trigger="hover" data-popover-placement="bottom"></i>

                
                <div data-popover id="caching-system-popover-1" role="tooltip" class="absolute card duration-300 font-normal inline-block leading-6 opacity-0 rounded text-slate-500 dark:text-zinc-300 text-xs transition-opacity invisible w-64 z-10">
                    <div class="px-3 py-2">
                        <p><?php echo app('translator')->get('dashboard.t_cache_system_popover_info'); ?></p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

            </button>
        </li>

        
        <li class="col-span-1">
            <button wire:click="clear('views')" wire:confirm="<?php echo e(__('dashboard.t_are_u_sure_want_proceed'), false); ?>" type="button" class="card dark:hover:bg-zinc-900 dark:hover:text-white dark:text-zinc-200 font-semibold hover:bg-gray-100 hover:text-gray-900 inline-flex items-center justify-center px-4 py-3 rounded-lg text-gray-500 text-xs truncate bg-white">

                
                <i class="ph-duotone ph-files ltr:mr-3 rtl:ml-3 text-2xl text-blue-400"></i>      
                
                
                <span class="w-full tracking-wide ltr:text-left rtl:text-right">
                    <?php echo app('translator')->get('dashboard.t_clear_compiled_views_cache'); ?>
                </span>

                
                <i class="ph-duotone ph-question ltr:ml-2 rtl:mr-2 text-xl text-slate-300 hover:text-slate-500 dark:text-zinc-400 dark:hover:text-zinc-200" data-popover-target="caching-system-popover-2" data-popover-trigger="hover" data-popover-placement="bottom"></i>

                
                <div data-popover id="caching-system-popover-2" role="tooltip" class="absolute card duration-300 font-normal inline-block leading-6 opacity-0 rounded text-slate-500 dark:text-zinc-300 text-xs transition-opacity invisible w-64 z-10">
                    <div class="px-3 py-2">
                        <p><?php echo app('translator')->get('dashboard.t_views_cache_popover_info'); ?></p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

            </button>
        </li>

        
        <li class="col-span-1">
            <button wire:click="clear('sessions')" wire:confirm="<?php echo e(__('dashboard.t_are_u_sure_want_proceed'), false); ?>" type="button" class="card dark:hover:bg-zinc-900 dark:hover:text-white dark:text-zinc-200 font-semibold hover:bg-gray-100 hover:text-gray-900 inline-flex items-center justify-center px-4 py-3 rounded-lg text-gray-500 text-xs truncate bg-white">

                
                <i class="ph-duotone ph-database ltr:mr-3 rtl:ml-3 text-2xl text-amber-400"></i>      
                
                
                <span class="w-full tracking-wide ltr:text-left rtl:text-right">
                    <?php echo app('translator')->get('dashboard.t_clear_sessions_cache'); ?>
                </span>

                
                <i class="ph-duotone ph-question ltr:ml-2 rtl:mr-2 text-xl text-slate-300 hover:text-slate-500 dark:text-zinc-400 dark:hover:text-zinc-200" data-popover-target="caching-system-popover-3" data-popover-trigger="hover" data-popover-placement="bottom"></i>

                
                <div data-popover id="caching-system-popover-3" role="tooltip" class="absolute card duration-300 font-normal inline-block leading-6 opacity-0 rounded text-slate-500 dark:text-zinc-300 text-xs transition-opacity invisible w-64 z-10">
                    <div class="px-3 py-2">
                        <p><?php echo app('translator')->get('dashboard.t_clear_sessions_popover_info'); ?></p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

            </button>
        </li>

        
        <li class="col-span-1">
            <button wire:click="clear('log')" wire:confirm="<?php echo e(__('dashboard.t_are_u_sure_want_proceed'), false); ?>" type="button" class="card dark:hover:bg-zinc-900 dark:hover:text-white dark:text-zinc-200 font-semibold hover:bg-gray-100 hover:text-gray-900 inline-flex items-center justify-center px-4 py-3 rounded-lg text-gray-500 text-xs truncate bg-white">

                
                <i class="ph-duotone ph-bug ltr:mr-3 rtl:ml-3 text-2xl text-green-400"></i>      
                
                
                <span class="w-full tracking-wide ltr:text-left rtl:text-right">
                    <?php echo app('translator')->get('dashboard.t_clear_log_files'); ?>
                </span>

                
                <i class="ph-duotone ph-question ltr:ml-2 rtl:mr-2 text-xl text-slate-300 hover:text-slate-500 dark:text-zinc-400 dark:hover:text-zinc-200" data-popover-target="caching-system-popover-4" data-popover-trigger="hover" data-popover-placement="bottom"></i>

                
                <div data-popover id="caching-system-popover-4" role="tooltip" class="absolute card duration-300 font-normal inline-block leading-6 opacity-0 rounded text-slate-500 dark:text-zinc-300 text-xs transition-opacity invisible w-64 z-10">
                    <div class="px-3 py-2">
                        <p><?php echo app('translator')->get('dashboard.t_clear_log_files_popover_info'); ?></p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

            </button>
        </li>
  
    </ul>
    
</div>
<?php /**PATH /home/u304230485/domains/gigfly.in/public_html/resources/views/livewire/admin/system/cache.blade.php ENDPATH**/ ?>