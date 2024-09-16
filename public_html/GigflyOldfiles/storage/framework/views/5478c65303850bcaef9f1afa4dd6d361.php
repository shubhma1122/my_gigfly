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
    
    
    <div class="mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">
    
                <div class="min-w-0 flex-1">
    
                    
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        <?php echo app('translator')->get('messages.t_invoices'); ?>
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
                                        <?php echo app('translator')->get('messages.t_invoices'); ?>
                                    </span>
                                </div>
                            </li>
            
                        </ol>
                    </div>
                    
                </div>
    
                
                <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">
        
                </div>
    
            </div>
        </div>
    </div>

    
    <div class="w-full">
        <div class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
            <table class="w-full text-left border-spacing-y-[10px] border-separate -mt-2">
                <thead class="">
                    <tr class="bg-slate-200 dark:bg-zinc-600">

                        
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right"><?php echo app('translator')->get('messages.t_buyer'); ?></th>

                        
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right"><?php echo app('translator')->get('messages.t_payment_method'); ?></th>

                        
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_amount'); ?></th>

                        
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_date'); ?></th>

                        
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_status'); ?></th>
                        
                        
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_options'); ?></th>
                        
                    </tr>
                </thead>
                <thead>
                    <?php $__empty_1 = true; $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr class="intro-x shadow-sm bg-white dark:bg-zinc-800 rounded-md h-16" wire:key="admin-invoices-<?php echo e($i->uid, false); ?>">

                            
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md w-64 rtl:text-right">
                                <div class="flex items-center space-x-3 rtl:space-x-reverse w-64">

                                    
                                    <a href="<?php echo e(url('profile', $i->order->buyer->username), false); ?>" target="_blank" class="h-10 w-10 flex-shrink-0">
                                        <img class="w-full h-full rounded-md object-cover lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($i->order->buyer->avatar), false); ?>" alt="<?php echo e($i->order->buyer->username, false); ?>">
                                    </a>

                                    
                                    <div>
                                        
                                        
                                        <div class="font-medium whitespace-nowrap truncate block hover:text-primary-600 dark:text-white text-sm max-w-[240px]">
                                            <?php echo e($i->order->buyer->fullname ?? $i->order->buyer->username, false); ?>

                                        </div>

                                        
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-2 max-w-[240px] truncate block">
                                            <?php echo e($i->order->buyer->email, false); ?>

                                        </div>

                                    </div>

                                </div>
                            </td>

                            
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">
                                <div class="flex flex-col">

                                    
                                    <div class="font-normal whitespace-nowrap truncate block dark:text-zinc-200 text-[13px] text-gray-600">
                                                    
                                        
                                        <?php if($i->payment_method === "offline"): ?>
                            
                                            
                                            <?php if( !empty(payment_gateway($i->payment_method, false, true)->name) ): ?>
                                                
                                                
                                                <?php echo e(payment_gateway($i->payment_method, false, true)?->name, false); ?>

    
                                            <?php else: ?>
    
                                                
                                                -
    
                                            <?php endif; ?>
    
                                        <?php elseif( !empty(payment_gateway($i->payment_method)->name) ): ?>
    
                                            
                                            <?php echo e(payment_gateway($i->payment_method)?->name, false); ?>

    
                                        <?php elseif($i->payment_method === "wallet"): ?>

                                            <?php echo app('translator')->get('messages.t_wallet'); ?>

                                        <?php else: ?>
    
                                            -
    
                                        <?php endif; ?>
    
                                    </div>

                                    
                                    <span class="text-xs tracking-wide text-gray-400 mt-1"><?php echo e($i->payment_id, false); ?></span>

                                </div>
                            </td>

                            
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <span class="text-sm font-bold text-zinc-900 tracking-wide">
                                    <?php echo e(money($i->order->total_value, settings('currency')->code, true), false); ?>

                                </span>
                            </td>

                            
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <div class="text-gray-500 dark:text-gray-100 text-[13px] font-normal whitespace-nowrap">
                                    <?php echo e(format_date($i->created_at), false); ?>

                                </div>
                            </td>

                            
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <?php switch($i->status):

                                    
                                    case ('paid'): ?>
                                        <span class="bg-emerald-100 text-emerald-700 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                            <?php echo app('translator')->get('messages.t_paid'); ?>
                                        </span>
                                    <?php break; ?>

                                    
                                    <?php case ('pending'): ?>
                                        <span class="bg-amber-100 text-amber-700 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                            <?php echo app('translator')->get('messages.t_pending'); ?>
                                        </span>
                                    <?php break; ?>
                                        
                                <?php endswitch; ?>
                            </td>

                            
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <div class="flex items-center justify-center space-x-3 rtl:space-x-reverse">

                                    
                                    <div>
                                        <a href="<?php echo e(admin_url('orders/details/' . $i->order->uid), false); ?>" data-tooltip-target="tooltip-actions-details-<?php echo e($i->id, false); ?>" class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-700 dark:border-zinc-700 dark:hover:bg-zinc-900 dark:hover:border-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"/> <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"/> <path d="M9 12h6"/> <path d="M9 16h6"/></svg>
                                        </a>
                                        <?php if (isset($component)) { $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Tooltip::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tooltip-actions-details-'.e($i->id, false).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_order_details'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $attributes = $__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $component = $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
                                    </div>

                                    
                                    <?php if($i->status === 'pending' && $i->payment_method === "offline"): ?>
                                        <div>
                                            <button x-on:click="confirm('<?php echo e(__('messages.t_are_u_sure_u_received_invocie_payment'), false); ?>') ? $wire.paid('<?php echo e($i->id, false); ?>') : ''" wire:loading.attr="disabled" wire:target="paid('<?php echo e($i->id, false); ?>')" type="button" data-tooltip-target="tooltip-actions-received-<?php echo e($i->id, false); ?>" class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-700 dark:border-zinc-700 dark:hover:bg-zinc-900 dark:hover:border-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12"/> <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"/></svg>
                                            </button>
                                            <?php if (isset($component)) { $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Tooltip::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tooltip-actions-received-'.e($i->id, false).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_payment_received'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $attributes = $__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__attributesOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $component = $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="py-4.5 font-light text-sm text-gray-400 dark:text-zinc-200 text-center tracking-wide shadow-sm bg-white dark:bg-zinc-800 rounded-md">
                                <?php echo app('translator')->get('messages.t_no_results_found'); ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                </thead>
            </table>
        </div>
    </div>

    
    <?php if($invoices->hasPages()): ?>
        <div class="flex justify-center pt-12">
            <?php echo $invoices->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>

</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/admin/invoices/invoices.blade.php ENDPATH**/ ?>