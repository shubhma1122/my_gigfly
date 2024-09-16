<div class="w-full">

    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
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
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-10">
        <nav class="justify-between px-4 py-3 text-gray-700 border border-gray-100 rounded-lg shadow-sm sm:flex sm:px-5 bg-white dark:bg-zinc-800 dark:border-zinc-700 dark:shadow-none" aria-label="Breadcrumb">

            
            <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                
                <li>
                    <div class="flex items-center">
                        <a href="<?php echo e(url('/'), false); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                            <?php echo app('translator')->get('messages.t_home'); ?>
                        </a>
                    </div>
                </li>

                
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="<?php echo e(url('seller/home'), false); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                            <?php echo app('translator')->get('messages.t_my_dashboard'); ?>
                        </a>
                    </div>
                </li>

                
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="<?php echo e(url('seller/refunds'), false); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                            <?php echo app('translator')->get('messages.t_refunds'); ?>
                        </a>
                    </div>
                </li>

                
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                            <?php echo app('translator')->get('messages.t_refund_details'); ?>
                        </span>
                    </div>
                </li>

            </ol>

            
            <div>
                <?php if($refund->status === 'pending'): ?>
                    
                    <span class="ltr:ml-3 rtl:mr-3">
                        <button x-on:click="confirm('<?php echo e(__('messages.t_are_u_sure_u_want_to_give_refund'), false); ?>') ? $wire.accept() : ''" wire:loading.attr="disabled" wire:target="accept()" type="button" class="inline-flex items-center px-4 py-3 border border-transparent text-xs leading-4 font-bold tracking-wide rounded-sm text-green-700 bg-green-200 hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <?php echo e(__('messages.t_give_refund'), false); ?>

                        </button>
                    </span>

                    
                    <span class="ltr:ml-3 rtl:mr-3">
                        <button x-on:click="confirm('<?php echo e(__('messages.t_are_u_sure_u_want_to_decline_refund'), false); ?>') ? $wire.decline() : ''" wire:loading.attr="disabled" wire:target="decline()" type="button" class="inline-flex items-center px-4 py-3 border border-transparent text-xs leading-4 font-bold tracking-wide rounded-sm text-red-700 bg-red-200 hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <?php echo e(__('messages.t_decline_refund'), false); ?>

                        </button>
                    </span>
                <?php endif; ?>
            </div>

        </nav>
    </div>

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

            
            <div class="col-span-12 lg:col-span-8">
                <div class="bg-white dark:bg-zinc-800 dark:border-zinc-700 shadow-sm rounded-md overflow-hidden border border-gray-100">
                    <div class="divide-y divide-gray-200 dark:divide-zinc-700">
                        <div class="px-4 py-5 sm:px-6">
                            <h2 class="text-sm font-semibold tracking-wide text-gray-700 dark:text-gray-100"><?php echo e(__('messages.t_conversation'), false); ?></h2>
                        </div>
                        <div class="px-4 py-6 sm:px-6">
                            <ul role="list" class="space-y-8">
                          
                                <?php $__empty_1 = true; $__currentLoopData = $refund->conversation()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li>
                                        <div class="relative pb-8">
                                            <?php if(!$loop->last): ?>
                                                <span class="absolute top-5 ltr:left-5 rtl:right-5 ltr:-ml-px rtl:-mr-px h-full w-0.5 bg-gray-200 dark:bg-zinc-700"></span>
                                            <?php endif; ?>
                                            <div class="relative flex items-start space-x-3 rtl:space-x-reverse">

                                                <div class="relative">
                                                    <img class="h-10 w-10 rounded-full bg-gray-400 dark:bg-zinc-700 flex items-center justify-center ring-8 ring-white dark:ring-transparent object-cover lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e($msg->author_type === 'buyer' ? src($msg->buyer->avatar) : src($msg->seller->avatar), false); ?>" alt="<?php echo e($msg->author_type === 'buyer' ? $msg->buyer->username : $msg->seller->username, false); ?>">
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <div>
                                                        <div class="text-sm">
                                                            <a href="<?php echo e(url('profile', $msg->author_type === 'buyer' ? $msg->buyer->username : $msg->seller->username), false); ?>"
                                                                target="_blank" class="font-medium text-gray-900 dark:text-gray-100 hover:text-primary-600"><?php echo e($msg->author_type === 'buyer' ? $msg->buyer->username : $msg->seller->username, false); ?></a>
                                                        </div>
                                                        <p class="mt-0.5 text-xs text-gray-500 dark:text-gray-400">
                                                            <?php echo e(format_date($msg->created_at, 'ago'), false); ?>

                                                        </p>
                                                    </div>
                                                    <div class="mt-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <p>
                                                            <?php echo e($msg->message, false); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <span class="text-center text-gray-400 dark:text-gray-300 block py-12 font-extrabold text-xs tracking-wider"><?php echo e(__('messages.t_no_messages_in_this_refund_conversation'), false); ?></span>
                                <?php endif; ?>
                          
                            </ul>
                        </div>
                    </div>
                    <?php if($refund->status === 'pending'): ?>
                        <div class="bg-white dark:bg-zinc-800 px-4 py-6 sm:px-6 border-t dark:border-zinc-700">
                            <div class="mt-6">
                                <div class="flex space-x-3 rtl:space-x-reverse">
                                    <div class="flex-shrink-0">
                                        <div class="relative">
                                            <img class="h-10 w-10 rounded-full bg-gray-400 dark:bg-zinc-700 flex items-center justify-center object-cover lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src(auth()->user()->avatar), false); ?>" alt="<?php echo e(auth()->user()->username, false); ?>">
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div>
                                            <textarea wire:model.defer="message" rows="4" class="shadow-sm block w-full focus:ring-gray-900 focus:border-gray-900 sm:text-sm border border-gray-300 dark:bg-transparent dark:border-zinc-600 dark:focus:bg-primary-600 dark:focus:ring-primary-600 dark:text-gray-300 rounded-md resize-none" placeholder="<?php echo e(__('messages.t_enter_your_message'), false); ?>" maxlength="500"></textarea>
                                        </div>
                                        <div class="mt-6 flex items-center justify-end space-x-4 rtl:space-x-reverse">
                                            
                                            <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'send','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_send')),'block' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                  </div>
            </div>

            
            <div class="col-span-12 lg:col-span-4">
                <div class="space-y-6 pb-16">

                    
                    <div class="mb-14">
                        <div class="aspect-w-10 aspect-h-7 block w-full overflow-hidden rounded-md">
                            <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($refund->item->gig->thumbnail), false); ?>" alt="<?php echo e($refund->item->gig->title, false); ?>" class="lazy object-cover">
                        </div>
                        <div class="mt-4">
                            <div>
                                <a href="<?php echo e(url('service', $refund->item->gig->slug), false); ?>" target="_blank" class="text-base font-bold tracking-wide text-gray-900 dark:text-gray-200 hover:text-primary-600">
                                    <?php echo e($refund->item->gig->title, false); ?>

                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <h3 class="text-gray-900 dark:text-gray-300 text-sm font-bold tracking-wide"><?php echo e(__('messages.t_details'), false); ?></h3>
                        <dl class="mt-2 divide-y divide-gray-200 border-t border-b border-gray-200 dark:divide-zinc-600 dark:border-zinc-600">

                            
                            <div class="flex justify-between py-3 text-sm font-medium">
                                <dt class="text-gray-500 dark:text-gray-400"><?php echo e(__('messages.t_refund_status'), false); ?></dt>
                                <dd class="text-gray-900 dark:text-gray-200">
                                    <?php switch($refund->status):

                                        
                                        case ('pending'): ?>
                                            <span class="text-amber-600 text-sm font-medium"><?php echo e(__('messages.t_in_progress'), false); ?></span>
                                            <?php break; ?>

                                        
                                        <?php case ('rejected_by_seller'): ?>
                                            <span class="text-red-600 text-sm font-medium"><?php echo e(__('messages.t_declined_by_seller'), false); ?></span>
                                            <?php break; ?>

                                        
                                        <?php case ('rejected_by_admin'): ?>
                                            <span class="text-red-600 text-sm font-medium"><?php echo e(__('messages.t_declined_by_admin', ['app_name' => config('app.name')]), false); ?></span>
                                            <?php break; ?>

                                        
                                        <?php case ('accepted_by_seller'): ?>
                                            <span class="text-green-600 text-sm font-medium"><?php echo e(__('messages.t_approved_by_seller'), false); ?></span>
                                            <?php break; ?>

                                        
                                        <?php case ('accepted_by_admin'): ?>
                                            <span class="text-green-600 text-sm font-medium"><?php echo e(__('messages.t_approved_by_admin', ['app_name' => config('app.name')]), false); ?></span>
                                            <?php break; ?>
                                            
                                        
                                        <?php case ('closed'): ?>
                                            <span class="text-gray-600 text-sm font-medium"><?php echo e(__('messages.t_closed'), false); ?></span>
                                            <?php break; ?>
                                            
                                    <?php endswitch; ?>
                                </dd>
                            </div>

                            
                            <div class="flex justify-between py-3 text-sm font-medium">
                                <dt class="text-gray-500 dark:text-gray-400"><?php echo e(__('messages.t_amount'), false); ?></dt>
                                <dd class="text-gray-900 dark:text-gray-200  font-extrabold"><?php echo money($refund->item->profit_value, settings('currency')->code, true); ?></dd>
                            </div>

                            
                            <div class="flex justify-between py-3 text-sm font-medium">
                                <dt class="text-gray-500 dark:text-gray-400"><?php echo e(__('messages.t_refund_date'), false); ?></dt>
                                <dd class="text-gray-900 dark:text-gray-200"><?php echo e(format_date($refund->created_at, 'ago'), false); ?></dd>
                            </div>

                            
                            <div class="flex justify-between py-3 text-sm font-medium">
                                <dt class="text-gray-500 dark:text-gray-400"><?php echo e(__('messages.t_buyer'), false); ?></dt>
                                <dd class="text-primary-700">
                                    <a href="<?php echo e(url('profile', $refund->buyer->username), false); ?>" target="_blank"><?php echo e($refund->buyer->username, false); ?></a>
                                </dd>
                            </div>
                            
                        </dl>
                    </div>

                    
                    <div>
                        <h3 class="text-gray-900 dark:text-gray-300 text-sm font-bold tracking-wide"><?php echo e(__('messages.t_refund_reason'), false); ?></h3>
                        <div class="mt-2">
                            <p class="text-sm italic text-gray-500 dark:text-gray-200">
                                <?php echo e($refund->reason, false); ?>

                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/livewire/main/seller/refunds/options/details.blade.php ENDPATH**/ ?>