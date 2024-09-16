<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24">

    
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
                
    
    <div class="w-full mb-16">
        <div class="lg:flex lg:items-center lg:justify-between">

            <div class="min-w-0 flex-1">

                
                <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                    <?php echo app('translator')->get('messages.t_submitted_offers'); ?>
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
                                <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                    <?php echo app('translator')->get('messages.t_my_offers'); ?>
                                </span>
                            </div>
                        </li>
        
                    </ol>
                </div>
                
            </div>

            
            <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                
                <span class="">
                    <a href="<?php echo e(url('sellers'), false); ?>" class="relative inline-flex items-center px-4 py-3 border border-gray-300 dark:border-zinc-600 dark:hover:bg-zinc-700 dark:text-gray-200 bg-white dark:bg-zinc-800 text-[13px] font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-primary-600 focus:border-primary-600 shadow-sm rounded">
                        <?php echo app('translator')->get('messages.t_find_freelancers'); ?>
                    </a>
                </span>
    
            </div>

        </div>
    </div>

    
    <?php if(session()->has('success')): ?>
        <div class="mb-6 w-full">
            <div class="rounded-sm bg-green-100 p-5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <p class="text-sm font-medium text-green-800"><?php echo e(session()->get('success'), false); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if(session()->has('error')): ?>
        <div class="mb-6 w-full">
            <div class="rounded-sm bg-red-100 p-5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <p class="text-sm font-medium text-red-800"><?php echo e(session()->get('error'), false); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <div class="w-full">

        
        <?php if($offers->count()): ?>
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-6 gap-y-5">
                <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-lg shadow-sm border px-5 py-6 dark:bg-zinc-800 dark:border-zinc-700 dark:shadow-none" wire:key="account-offers-<?php echo e($offer->uid, false); ?>">

                        
                        <div class="flex items-center mb-4 space-x-4 rtl:space-x-reverse">
                            <img class="w-10 h-10 rounded-full object-cover lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($offer->freelancer->avatar), false); ?>" alt="<?php echo e($offer->freelancer->username, false); ?>">
                            <div class="space-y-1 font-medium dark:text-white">
                                <div class="flex items-center">
                                    <a href="<?php echo e(url('profile', $offer->freelancer->username), false); ?>" target="_blank" class="font-bold whitespace-nowrap truncate block max-w-[240px] hover:text-zinc-900 dark:text-white text-sm text-zinc-700" title="<?php echo e($offer->freelancer->username, false); ?>">
                                        <?php echo e($offer->freelancer->fullname ? $offer->freelancer->fullname : $offer->freelancer->username, false); ?>

                                    </a>
                                </div>
                                <div class="flex items-center space-x-3 rtl:space-x-reverse text-xs font-normal text-gray-400 dark:text-zinc-300">
        
                                    
                                    <?php if($offer->freelancer->country): ?>
                                        <p class="flex items-center space-x-1 rtl:space-x-reverse">
                                            <img class="h-4 ltr:pr-0.5 rtl:pl-0.5 -mt-0.5 lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(countryFlag($offer->freelancer->country->code), false); ?>" alt="<?php echo e($offer->freelancer->country->name, false); ?>">
                                            <span class="dark:text-zinc-300 hidden sm:block"><?php echo e($offer->freelancer->country->name, false); ?></span>
                                        </p>
                
                                        <div class="mx-2 my-0.5 text-gray-300 dark:text-zinc-600">|</div>
                                    <?php endif; ?>
                
                                    
                                    <p class="flex shrink-0 items-center space-x-1 rtl:space-x-reverse">
                                        <svg aria-hidden="true" class="w-4 h-4 <?php echo e($offer->freelancer->rating() == 0 ? 'text-gray-400' : 'text-amber-500', false); ?> -mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <span class="dark:text-zinc-300">
                                            <?php echo e($offer->freelancer->rating(), false); ?>

                                        </span>
                                    </p>
                
                                    
                                    <?php if($offer->freelancer->status === 'verified'): ?>
                                        <div class="mx-2 my-0.5 text-gray-300 dark:text-zinc-600">|</div>
                                        <div class="flex shrink-0 items-center space-x-1 rtl:space-x-reverse">
                                            <div>
                                                <svg data-popover-target="popover-profile-verified-<?php echo e($offer->uid, false); ?>" data-popover-placement="bottom" class="-mt-0.5 h-4 text-blue-500 w-4" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path></svg>
                                                <div data-popover id="popover-profile-verified-<?php echo e($offer->uid, false); ?>" role="tooltip" class="absolute z-[99] invisible inline-block w-64 text-xs tracking-wide text-gray-600 transition-opacity duration-300 bg-gray-50 border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 leading-relaxed">
                                                    <div class="px-3 py-2">
                                                        <p><?php echo app('translator')->get('messages.t_this_freelancer_id_has_verified_gov_id_check_tooltip'); ?></p>
                                                    </div>
                                                    <div data-popper-arrow></div>
                                                </div>
                                            </div>
                                            <span class="dark:text-zinc-300"><?php echo app('translator')->get('messages.t_verified_account'); ?></span>
                                        </div>
                                    <?php endif; ?>
                
                                </div>
                            </div>
                        </div>

                        
                        <div class="mb-1">

                            
                            <?php if($offer->status === 'pending'): ?>
                                <div class="ltr:border-l-4 rtl:border-r-4 border-yellow-400 bg-yellow-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-zinc-400 text-yellow-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <p class="text-sm dark:text-zinc-400 text-yellow-700">
                                                <?php echo app('translator')->get('messages.t_ur_offer_is_currently_under_review_before_visible'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif($offer->status === 'rejected'): ?>

                                
                                <div class="ltr:border-l-4 rtl:border-r-4 border-red-400 bg-red-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 dark:text-zinc-400 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M8.485 3.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 3.495zM10 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 6zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path> </svg>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <p class="text-sm dark:text-zinc-400 text-red-700">
                                                <?php echo app('translator')->get('messages.t_ur_offer_needs_some_changes_before_it_visible'); ?>
                                                <!-- Space -->
                                                <?php if($offer->rejection_reason): ?>
                                                    <span id="modal-team-rejection-reason-button-<?php echo e($offer->uid, false); ?>" class="font-bold hover:underline lowercase cursor-pointer"><?php echo app('translator')->get('messages.t_read_more'); ?></span>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                
                                <?php if($offer->rejection_reason): ?>
                                    <?php if (isset($component)) { $__componentOriginal626cd0ad8c496eb8a190505b15f0d732 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-team-rejection-reason-container-'.e($offer->uid, false).'','target' => 'modal-team-rejection-reason-button-'.e($offer->uid, false).'','uid' => 'modal_'.e(uid(), false).'','placement' => 'center-center','size' => 'max-w-md']); ?>

                                        
                                         <?php $__env->slot('title', null, []); ?> <?php echo e(__('messages.t_rejection_reason'), false); ?> <?php $__env->endSlot(); ?>

                                        
                                         <?php $__env->slot('content', null, []); ?> 
                                            <div class="text-sm text-gray-500 dark:text-zinc-300 leading-relaxed">
                                                <?php echo nl2br($offer->rejection_reason); ?>

                                            </div>
                                         <?php $__env->endSlot(); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $attributes = $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $component = $__componentOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
                                <?php endif; ?>

                            <?php elseif($offer->freelancer_status === 'pending'): ?>
                                <div class="ltr:border-l-4 rtl:border-r-4 border-amber-400 bg-amber-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-zinc-400 text-amber-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <p class="text-sm dark:text-zinc-400 text-amber-700">
                                                <?php echo app('translator')->get('messages.t_ur_offer_is_currently_pending_freelancer_approval'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif($offer->freelancer_status === 'rejected'): ?>

                                
                                <div class="ltr:border-l-4 rtl:border-r-4 border-pink-400 bg-pink-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-zinc-400 text-pink-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <p class="text-sm dark:text-zinc-400 text-pink-700">
                                                <?php echo app('translator')->get('messages.t_freelancer_has_rejected_this_offer'); ?>
                                                <!-- Space -->
                                                <?php if($offer->freelancer_rejection_reason): ?>
                                                    <span id="modal-freelancer-rejection-reason-button-<?php echo e($offer->uid, false); ?>" class="font-bold hover:underline lowercase cursor-pointer"><?php echo app('translator')->get('messages.t_read_more'); ?></span>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                
                                <?php if($offer->freelancer_rejection_reason): ?>
                                    <?php if (isset($component)) { $__componentOriginal626cd0ad8c496eb8a190505b15f0d732 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-freelancer-rejection-reason-container-'.e($offer->uid, false).'','target' => 'modal-freelancer-rejection-reason-button-'.e($offer->uid, false).'','uid' => 'modal_'.e(uid(), false).'','placement' => 'center-center','size' => 'max-w-md']); ?>

                                        
                                         <?php $__env->slot('title', null, []); ?> <?php echo e(__('messages.t_rejection_reason'), false); ?> <?php $__env->endSlot(); ?>

                                        
                                         <?php $__env->slot('content', null, []); ?> 
                                            <div class="text-sm text-gray-500 dark:text-zinc-300 leading-relaxed">
                                                <?php echo e($offer->freelancer_rejection_reason, false); ?>

                                            </div>
                                         <?php $__env->endSlot(); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $attributes = $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $component = $__componentOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
                                <?php endif; ?>

                            <?php elseif($offer->freelancer_status === 'approved'): ?>

                                
                                <?php if($offer->payment_status === 'pending'): ?>
                                    <div class="ltr:border-l-4 rtl:border-r-4 border-blue-400 bg-blue-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-zinc-400 text-blue-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <p class="text-sm dark:text-zinc-400 text-blue-700">
                                                    <?php echo app('translator')->get('messages.t_freelancer_approved_ur_offer'); ?>
                                                    <!-- Space -->
                                                    <span wire:click="confirmAddFunds('<?php echo e($offer->uid, false); ?>')" class="underline lowercase cursor-pointer animate-ping hover:animate-none ease-linear"><?php echo app('translator')->get('messages.t_add_funds'); ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="ltr:border-l-4 rtl:border-r-4 border-violet-400 bg-violet-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <svg class="h-5 w-5 dark:text-zinc-400 text-violet-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.78 15.84S18.64 13 19.61 12c3.07-3 1.54-9.18 1.54-9.18S15 1.29 12 4.36C9.66 6.64 8.14 8.22 8.14 8.22S4.3 7.42 2 9.72L14.25 22c2.3-2.33 1.53-6.16 1.53-6.16zm-1.5-9a2 2 0 0 1 2.83 0 2 2 0 1 1-2.83 0zM3 21a7.81 7.81 0 0 0 5-2l-3-3c-2 1-2 5-2 5z"></path></svg>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <p class="text-sm dark:text-zinc-400 text-violet-700">
                                                    <?php echo app('translator')->get('messages.t_freelancer_is_now_working_on_ur_order'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php elseif($offer->freelancer_status === 'completed'): ?>
                                <div class="ltr:border-l-4 rtl:border-r-4 border-green-400 bg-green-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-zinc-400 text-green-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <p class="text-sm dark:text-zinc-400 text-green-700">
                                                <?php echo app('translator')->get('messages.t_freelancer_has_finished_this_order'); ?>
                                                <?php if($offer->payment_status === 'funded'): ?>
                                                    <!-- Space -->
                                                    <span wire:click="confirmRelease('<?php echo e($offer->uid, false); ?>')" class="underline lowercase cursor-pointer animate-ping hover:animate-none ease-linear"><?php echo app('translator')->get('messages.t_release_payment'); ?></span>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif($offer->freelancer_status === 'canceled'): ?>
                                <div class="ltr:border-l-4 rtl:border-r-4 border-zinc-400 bg-zinc-50 p-4 mb-5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-zinc-400 text-zinc-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <p class="text-sm dark:text-zinc-400 text-zinc-700">
                                                <?php echo app('translator')->get('messages.t_freelancer_has_canceled_this_order'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        
                        <div class="text-gray-500 dark:text-gray-300 text-sm leading-relaxed">

                            
                            <?php if(strlen($offer->message) > 420): ?>
                                <?php echo e(add_3_dots(htmlspecialchars_decode($offer->message), 420), false); ?>

                            <?php else: ?>
                                <?php echo e($offer->message, false); ?>

                            <?php endif; ?>

                        </div>

                        
                        <?php if(strlen($offer->message) > 420): ?>
                            <span id="modal-read-more-msg-button-<?php echo e($offer->uid, false); ?>" class="inline-block mb-5 text-[13px] font-medium text-blue-600 hover:underline dark:text-blue-500 cursor-pointer"><?php echo app('translator')->get('messages.t_read_more'); ?></span>
                        <?php endif; ?>

                        
                        <?php if(strlen($offer->message) > 420): ?>
                            <?php if (isset($component)) { $__componentOriginal626cd0ad8c496eb8a190505b15f0d732 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-read-more-msg-container-'.e($offer->uid, false).'','target' => 'modal-read-more-msg-button-'.e($offer->uid, false).'','uid' => 'modal_'.e(uid(), false).'','placement' => 'center-center','size' => 'max-w-2xl']); ?>

                                
                                 <?php $__env->slot('title', null, []); ?> <?php echo e(__('messages.t_your_offer'), false); ?> <?php $__env->endSlot(); ?>

                                
                                 <?php $__env->slot('content', null, []); ?> 
                                    <div class="text-sm text-gray-500 dark:text-zinc-300 leading-relaxed">

                                        
                                        <?php echo e($offer->message, false); ?>


                                        
                                        <?php if($offer->attachments && $offer->attachments()->count()): ?>
                                            
                                            
                                            <div class="h-px bg-zinc-100 -mx-6 my-5 dark:bg-zinc-700"></div>

                                            
                                            <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200 dark:divide-zinc-700 dark:border-zinc-700">
                            
                                                <?php $__currentLoopData = $offer->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="flex items-center justify-between py-3 ltr:pl-3 ltr:pr-4 rtl:pr-3 rtl:pl-4 text-sm">
                                                        <div class="flex w-0 flex-1 items-center">
                                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd"></path> </svg>
                                                            <span class="ltr:ml-2 rtl:mr-2 w-0 flex-1 truncate">
                                                                <?php echo e($attachment->uid, false); ?>.<?php echo e($attachment->file_extension, false); ?>

                                                            </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <a href="<?php echo e(url('uploads/offers', $attachment->uid . '.' . $attachment->file_extension), false); ?>" class="font-medium text-blue-600 hover:text-blue-500">
                                                                <?php echo app('translator')->get('messages.t_download'); ?>
                                                            </a>
                                                        </div>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            </ul>

                                        <?php endif; ?>

                                    </div>
                                 <?php $__env->endSlot(); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $attributes = $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $component = $__componentOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
                        <?php endif; ?>

                        
                        <div>

                            
                            <div class="text-gray-900 dark:text-gray-100 text-sm font-black"><?php echo e(money($offer->budget_amount, settings('currency')->code, true), false); ?></div>
        
                            
                            <div class="text-xs text-gray-400 tracking-wide font-normal mt-1 whitespace-nowrap block"><?php echo e(__('messages.t_number_days_for_delivery', ['number' => $offer->delivery_time]), false); ?></div>

                            
                            <div class="text-xs text-gray-400 tracking-wide font-normal mt-1 whitespace-nowrap block">
                                <?php echo app('translator')->get('messages.t_submitted_ago'); ?> <?php echo e(format_date($offer->submitted_at), false); ?>  
                            </div>

                        </div>

                        
                        <div class="h-px bg-zinc-100 -mx-5 my-5 dark:bg-zinc-700"></div>

                        
                        <aside class="bg-slate-50 -mx-5 -my-6 rounded-b-lg px-5 py-4 dark:bg-zinc-600">
                            <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                
                                <div>
                                    <a href="<?php echo e(url('messages/new', $offer->freelancer->username), false); ?>" target="_blank" class="block text-gray-600 p-2 border border-slate-200 shadow-sm hover:shadow-none bg-white dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer dark:border-zinc-500 dark:text-zinc-300 rounded focus:outline-none" data-tooltip-target="tooltip-actions-chat-<?php echo e($offer->uid, false); ?>">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"/></svg>
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
<?php $component->withAttributes(['id' => 'tooltip-actions-chat-'.e($offer->uid, false).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_chat_now'))]); ?>
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

                                
                                <?php if($offer->work && $offer->work()->count()): ?>

                                    
                                    <div>
                                        <button type="button" id="modal-offer-work-button-<?php echo e($offer->uid, false); ?>" class="block text-gray-600 p-2 border border-slate-200 shadow-sm hover:shadow-none bg-white dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer dark:border-zinc-500 dark:text-zinc-300 rounded focus:outline-none" data-tooltip-target="tooltip-actions-files-<?php echo e($offer->uid, false); ?>">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"/> <path d="M12 13l0 9"/> <path d="M9 19l3 3l3 -3"/></svg>
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
<?php $component->withAttributes(['id' => 'tooltip-actions-files-'.e($offer->uid, false).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_delivered_work'))]); ?>
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

                                    
                                    <?php if (isset($component)) { $__componentOriginal626cd0ad8c496eb8a190505b15f0d732 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-offer-work-container-'.e($offer->uid, false).'','target' => 'modal-offer-work-button-'.e($offer->uid, false).'','uid' => 'modal_offer_work_'.e($offer->uid, false).'','placement' => 'center-center','size' => 'max-w-lg']); ?>

                                        
                                         <?php $__env->slot('content', null, []); ?> 

                                            
                                            <div class="flex items-center justify-between mb-11">
                                                <p tabindex="0" class="focus:outline-none text-base font-semibold leading-5 text-gray-800 dark:text-white"><?php echo app('translator')->get('messages.t_delivered_work'); ?></p>
                                                <button x-on:click="close" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ltr:ml-auto rtl:mr-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                </button>
                                            </div>

                                            
                                            <?php $__currentLoopData = $offer->work()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="mt-6 flex" wire:key="employer-delivered-work-<?php echo e($file->uid, false); ?>">

                                                    <div class="w-10 flex flex-col items-center">
                                                        
                                                        
                                                        <div class="fiv-sqo fiv-icon-<?php echo e($file->file_extension, false); ?> text-4xl"></div>

                                                        <div class="pt-4">
                                                            <svg class="text-gray-400 dark:text-zinc-600" width="1" height="40" viewBox="0 0 1 47" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="0.5" y1="2.18557e-08" x2="0.499998" y2="47" stroke="currentColor" stroke-dasharray="2 2"></line> </svg>
                                                        </div>

                                                    </div>

                                                    
                                                    <div class="ltr:pl-3 rtl:pr-3">

                                                        
                                                        <p class="focus:outline-none text-sm font-semibold leading-normal text-gray-800 pb-1 -mt-1 dark:text-zinc-200">
                                                            <?php echo e($file->uid, false); ?>.<?php echo e($file->file_extension, false); ?>

                                                        </p>

                                                        
                                                        <div class="focus:outline-none text-xs leading-3 text-gray-500 pt-1 space-x-2 rtl:space-x-reverse dark:text-zinc-400">
                                                            
                                                            
                                                            <a href="<?php echo e(url('uploads/offers/work', $file->uid . '.' . $file->file_extension), false); ?>" class="text-primary-600 hover:underline"><?php echo app('translator')->get('messages.t_download'); ?></a>

                                                            
                                                            <span class="text-gray-300 dark:text-zinc-600" aria-hidden="true">|</span>

                                                            
                                                            <span><?php echo e(format_date($file->created_at), false); ?></span>

                                                        </div>

                                                        
                                                        <p class="focus:outline-none pt-4 text-sm leading-4 text-gray-600 whitespace-pre-line dark:text-zinc-200">
                                                            <?php echo e($file->notes, false); ?>

                                                        </p>
                                                    </div>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                                         <?php $__env->endSlot(); ?>
        
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $attributes = $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $component = $__componentOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>

                                <?php endif; ?>

                                
                                <?php if( ($offer->status === 'rejected' || $offer->freelancer_status === 'rejected') && !$offer->isDelivered() && $offer->payment_status === 'pending' ): ?>

                                    
                                    <div>
                                        <button wire:click="edit('<?php echo e($offer->uid, false); ?>')" class="text-gray-600 p-2 border border-slate-200 shadow-sm hover:shadow-none bg-white dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer dark:border-zinc-500 dark:text-zinc-300 rounded focus:outline-none" data-tooltip-target="tooltip-actions-edit-<?php echo e($offer->uid, false); ?>">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"/> <path d="M13.5 6.5l4 4"/></svg>
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
<?php $component->withAttributes(['id' => 'tooltip-actions-edit-'.e($offer->uid, false).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_edit_offer'))]); ?>
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

                                    
                                    <?php if (isset($component)) { $__componentOriginal626cd0ad8c496eb8a190505b15f0d732 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-edit-custom-offer-container-'.e($offer->uid, false).'','target' => 'modal-edit-custom-offer-button-'.e($offer->uid, false).'','uid' => 'modal_'.e(uid(), false).'','placement' => 'center-center','size' => 'max-w-xl']); ?>

                                        
                                         <?php $__env->slot('title', null, []); ?> <?php echo e(__('messages.t_edit_offer'), false); ?> <?php $__env->endSlot(); ?>
                        
                                        
                                         <?php $__env->slot('content', null, []); ?> 
                                            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">
                        
                                                
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
<?php $component->withAttributes(['placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_describe_service_ur_looking_for_custom_offer_msg')),'model' => 'edit_form.message','svg_icon' => '<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z"></path><path d="M7 9h10v2H7zm0 4h7v2H7z"></path></svg>','maxlength' => '2500']); ?>
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
                        
                                                
                                                <?php if(settings('publish')->custom_offer_enable_attachments): ?>
                        
                                                    
                                                    <div class="col-span-12" wire:ignore wire:key='attachments-uploader-form'>
                                                        <?php if (isset($component)) { $__componentOriginalb18dd6947576dcfc4eebdb736563555f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb18dd6947576dcfc4eebdb736563555f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.attachments-form','data' => ['label' => __('messages.t_drag_attachments_here'),'model' => 'edit_form.attachments','id' => 'uploader_attachments','extensions' => explode(',', settings('publish')->custom_offer_attachments_allowed_extensions),'size' => ''.e(settings('publish')->custom_offer_attachment_max_size, false).'','max' => ''.e(settings('publish')->custom_offer_attachment_max_files, false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.attachments-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_drag_attachments_here')),'model' => 'edit_form.attachments','id' => 'uploader_attachments','extensions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(explode(',', settings('publish')->custom_offer_attachments_allowed_extensions)),'size' => ''.e(settings('publish')->custom_offer_attachment_max_size, false).'','max' => ''.e(settings('publish')->custom_offer_attachment_max_files, false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb18dd6947576dcfc4eebdb736563555f)): ?>
<?php $attributes = $__attributesOriginalb18dd6947576dcfc4eebdb736563555f; ?>
<?php unset($__attributesOriginalb18dd6947576dcfc4eebdb736563555f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb18dd6947576dcfc4eebdb736563555f)): ?>
<?php $component = $__componentOriginalb18dd6947576dcfc4eebdb736563555f; ?>
<?php unset($__componentOriginalb18dd6947576dcfc4eebdb736563555f); ?>
<?php endif; ?>
                                                            
                                                    </div>
                                            
                                                    
                                                    <?php if($errors->has('attachments')): ?>
                                                        <div class="col-span-12" wire:key='attachments-errors'>
                                                            <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 ltr:mr-3 rtl:ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                                                <span class="sr-only">Error</span>
                                                                <div>
                                                                <span class="font-medium"><?php echo app('translator')->get('messages.t_attachments_errors'); ?></span>
                                                                    <ul class="mt-1.5 ltr:ml-4 rtl:mr-4 list-disc list-inside">
                                                                        <?php $__currentLoopData = $errors->get('attachments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li wire:key="attachments-errors-item-<?php echo e($key, false); ?>"><?php echo e($error, false); ?></li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                        
                                                    
                                                    <div class="col-span-12">
                                                        <div class="p-4 md:p-5 rounded text-slate-700 bg-slate-50 dark:bg-zinc-600 dark:text-zinc-300">
                                                            <div class="flex items-center mb-3">
                                                                <svg class="inline-block w-5 h-5 ltr:mr-3 rtl:ml-3 flex-none text-slate-500 dark:text-zinc-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 48C141.2 48 48 141.2 48 256s93.2 208 208 208 208-93.2 208-208S370.8 48 256 48zm21 312h-42V235h42v125zm0-166h-42v-42h42v42z"></path></svg>
                                                                <h3 class="font-semibold text-xs uppercase tracking-wider">
                                                                    <?php echo app('translator')->get('messages.t_upload_instructions'); ?>
                                                                </h3>
                                                            </div>
                                                            <ul class="list-inside ltr:ml-8 rtl:mr-8 space-y-2">
                        
                                                                
                                                                <li class="flex items-center text-[13px] tracking-wide">
                                                                    <svg class="inline-block w-4 h-4 flex-none ltr:mr-2 rtl:pl-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                    <?php echo app('translator')->get('messages.t_acceptable_file_types_are'); ?> &nbsp; <b><?php echo e(str_replace(',', ' | ', settings('publish')->custom_offer_attachments_allowed_extensions), false); ?></b>
                                                                </li>
                        
                                                                
                                                                <li class="flex items-center text-[13px] tracking-wide">
                                                                    <svg class="inline-block w-4 h-4 flex-none ltr:mr-2 rtl:pl-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                    <?php echo app('translator')->get('messages.t_the_max_allowable_file_size_is'); ?> &nbsp; <b><?php echo e(settings('publish')->custom_offer_attachment_max_size, false); ?> <?php echo app('translator')->get('messages.t_size_mb'); ?></b>
                                                                </li>
                        
                                                                
                                                                <li class="flex items-center text-[13px] tracking-wide">
                                                                    <svg class="inline-block w-4 h-4 flex-none ltr:mr-2 rtl:pl-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                    <?php echo app('translator')->get('messages.t_u_can_upload_max_files'); ?> &nbsp; <b><?php echo e(settings('publish')->custom_offer_attachment_max_files, false); ?></b>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                        
                                                <?php endif; ?>

                                                
                                                <?php if($offer->attachments && $offer->attachments()->count()): ?>
                                                    <div class="col-span-12">
                                                        <ul class="divide-y divide-gray-200 rounded-md border border-gray-200 dark:divide-zinc-700 dark:border-zinc-700">
                                                            <?php $__currentLoopData = $offer->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="flex items-center justify-between py-3 ltr:pl-3 ltr:pr-4 rtl:pr-3 rtl:pl-4 text-sm">
                                                                <div class="flex w-0 flex-1 items-center">
                                                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 2l.117 .007a1 1 0 0 1 .876 .876l.007 .117v4l.005 .15a2 2 0 0 0 1.838 1.844l.157 .006h4l.117 .007a1 1 0 0 1 .876 .876l.007 .117v9a3 3 0 0 1 -2.824 2.995l-.176 .005h-10a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005h5z" stroke-width="0" fill="currentColor"></path><path d="M19 7h-4l-.001 -4.001z" stroke-width="0" fill="currentColor"></path></svg>
                                                                    <span class="ltr:ml-2 rtl:mr-2 w-0 flex-1 truncate dark:text-zinc-300">
                                                                        <?php echo e($attachment->uid, false); ?>.<?php echo e($attachment->file_extension, false); ?>

                                                                    </span>
                                                                </div>

                                                                
                                                                <div class="ltr:ml-4 rtl:mr-4 flex flex-shrink-0 space-x-4">

                                                                    
                                                                    <button wire:click="confirmRemoveAttachment('<?php echo e($attachment->uid, false); ?>')" type="button" class="rounded-md bg-transparent font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                        <?php echo app('translator')->get('messages.t_remove'); ?>
                                                                    </button>

                                                                    <span class="text-gray-300 dark:text-zinc-600" aria-hidden="true">|</span>

                                                                    
                                                                    <a href="<?php echo e(url('uploads/offers', $attachment->uid . '.' . $attachment->file_extension), false); ?>" class="rounded-md bg-transparent font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                        <?php echo app('translator')->get('messages.t_download'); ?>
                                                                    </a>

                                                                </div>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                        
                                                
                                                <div class="col-span-12 h-px bg-slate-200 dark:bg-zinc-700 -mx-6 mt-4"></div>
                        
                                                
                                                <div class="col-span-12">
                        
                                                    
                                                    <h3 class="mb-4 text-sm font-medium tracking-wide <?php echo e($errors->first('expected_duration') ? 'text-red-600 dark:text-red-500' : 'text-gray-600 dark:text-white', false); ?>"><?php echo app('translator')->get('messages.t_expected_duration'); ?></h3>
                        
                                                    
                                                    <ul class="grid w-full gap-x-2 gap-y-3 md:grid-cols-4">
                        
                                                        
                                                        <li>
                                                            <input type="radio" id="expected-duration-1-day" name="expected_duration" value="1" class="hidden peer" required wire:model.defer="edit_form.expected_duration">
                                                            <label for="expected-duration-1-day" class="text-xs font-medium px-2 py-3 inline-flex items-center justify-center w-full text-gray-500 bg-white border border-slate-200 rounded-md cursor-pointer dark:hover:text-zinc-300 peer-checked:border-primary-600 peer-checked:text-white peer-checked:bg-primary-600 hover:text-gray-600 hover:bg-slate-100 dark:text-zinc-300 dark:bg-zinc-700 dark:hover:bg-zinc-800 dark:border-zinc-600 dark:hover:peer-checked:bg-primary-600 dark:hover:peer-checked:text-white" onclick="document.getElementById('expected-duration-other').value = ''">                           
                                                                <?php echo app('translator')->get('messages.t_24_hours'); ?>
                                                            </label>
                                                        </li>
                        
                                                        
                                                        <li>
                                                            <input type="radio" id="expected-duration-3-days" name="expected_duration" value="3" class="hidden peer" required wire:model.defer="edit_form.expected_duration">
                                                            <label for="expected-duration-3-days" class="text-xs font-medium px-2 py-3 inline-flex items-center justify-center w-full text-gray-500 bg-white border border-slate-200 rounded-md cursor-pointer dark:hover:text-zinc-300 peer-checked:border-primary-600 peer-checked:text-white peer-checked:bg-primary-600 hover:text-gray-600 hover:bg-slate-100 dark:text-zinc-300 dark:bg-zinc-700 dark:hover:bg-zinc-800 dark:border-zinc-600 dark:hover:peer-checked:bg-primary-600 dark:hover:peer-checked:text-white" onclick="document.getElementById('expected-duration-other').value = ''">                           
                                                                <?php echo app('translator')->get('messages.t_3_days'); ?>
                                                            </label>
                                                        </li>
                        
                                                        
                                                        <li>
                                                            <input type="radio" id="expected-duration-7-days" name="expected_duration" value="7" class="hidden peer" required wire:model.defer="edit_form.expected_duration">
                                                            <label for="expected-duration-7-days" class="text-xs font-medium px-2 py-3 inline-flex items-center justify-center w-full text-gray-500 bg-white border border-slate-200 rounded-md cursor-pointer dark:hover:text-zinc-300 peer-checked:border-primary-600 peer-checked:text-white peer-checked:bg-primary-600 hover:text-gray-600 hover:bg-slate-100 dark:text-zinc-300 dark:bg-zinc-700 dark:hover:bg-zinc-800 dark:border-zinc-600 dark:hover:peer-checked:bg-primary-600 dark:hover:peer-checked:text-white" onclick="document.getElementById('expected-duration-other').value = ''">                           
                                                                <?php echo app('translator')->get('messages.t_7_days'); ?>
                                                            </label>
                                                        </li>
                        
                                                        
                                                        <li>
                                                            <div class="relative">
                                                                <div class="absolute inset-y-0 left-0 flex items-center ltr:pl-3 rtl:pr-3 pointer-events-none">
                                                                    <svg class="w-4 h-4 text-gray-300 dark:text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                                                </div>
                                                                <input type="number" min="1" max="365" maxlength="3" id="expected-duration-other" wire:model.defer="edit_form.expected_duration" class="text-xs font-medium py-3 bg-white border border-slate-200 text-gray-900 rounded-md focus:ring-0 focus:ring-offset-0 focus:border-slate-200 focus:outline-none block w-full ltr:pl-10 rtl:pr-10 hover:text-gray-600 hover:bg-slate-100 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder-zinc-300 dark:hover:bg-zinc-800" placeholder="<?php echo app('translator')->get('messages.t_other'); ?>" onkeyup="$('input[name=expected_duration]').prop('checked',false);">
                                                            </div>
                                                        </li>
                        
                                                    </ul>
                        
                                                    
                                                    <?php $__errorArgs = ['expected_duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('expected_duration'), false); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                                                </div>
                        
                                                
                                                <div class="col-span-12 h-px bg-slate-200 dark:bg-zinc-700 -mx-6"></div>
                        
                                                
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
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_budget')),'placeholder' => '0.00','model' => 'edit_form.budget','suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('money.currencies.' . mb_strtoupper( settings('currency')->code ))['symbol'])]); ?>
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
                        
                                                
                                                <?php if(settings('publish')->custom_offers_commission_value_buyer > 0): ?>
                                                    <?php
                                                        if (settings('publish')->custom_offers_commission_type === 'percentage') {
                                                            
                                                            // Percentage amount
                                                            $offer_fee = settings('publish')->custom_offers_commission_value_buyer . "%";
                        
                                                        } else {
                        
                                                            // Fixed amount
                                                            $offer_fee = money(settings('publish')->custom_offers_commission_value_buyer, settings('currency')->code, true);
                        
                                                        }
                                                    ?>
                                                    <div class="col-span-12">
                                                        <div class="flex items-start space-x-1 rtl:space-x-reverse text-[13px] italic text-slate-400 tracking-wide">
                                                            <svg class="h-5 w-5 flex-shrink-0" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 56C145.72 56 56 145.72 56 256s89.72 200 200 200 200-89.72 200-200S366.28 56 256 56zm0 82a26 26 0 11-26 26 26 26 0 0126-26zm64 226H200v-32h44v-88h-32v-32h64v120h44z"></path></svg>
                                                            <span><?php echo app('translator')->get('messages.t_u_will_be_charged_fee_custom_offer_buyer', ['fee_amount' => $offer_fee]); ?></span>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                        
                                            </div>
                                         <?php $__env->endSlot(); ?>
                        
                                        
                                         <?php $__env->slot('footer', null, []); ?> 
                                            <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039608dc70b2e4c26356f5d84408f584 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'update','text' => ''.e(__('messages.t_update'), false).'','block' => 0]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $attributes = $__attributesOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__attributesOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                                         <?php $__env->endSlot(); ?>
                        
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $attributes = $__attributesOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__attributesOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $component = $__componentOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>

                                <?php endif; ?>

                                
                                <?php if( in_array($offer->status, ['rejected', 'approved']) && !$offer->isDelivered() && ( $offer->isExpired() || in_array($offer->freelancer_status, ['rejected', 'canceled', 'pending'])) ): ?>
                                    <div>
                                        <button wire:click="confirmDelete('<?php echo e($offer->uid, false); ?>')" class="text-red-500 p-2 border border-slate-200 shadow-sm hover:shadow-none bg-white dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer dark:border-zinc-500 dark:text-zinc-300 rounded focus:outline-none" data-tooltip-target="tooltip-actions-delete-<?php echo e($offer->uid, false); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon cursor-pointer icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z"></path> <line x1="4" y1="7" x2="20" y2="7"></line> <line x1="10" y1="11" x2="10" y2="17"></line> <line x1="14" y1="11" x2="14" y2="17"></line> <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path> <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path> </svg>
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
<?php $component->withAttributes(['id' => 'tooltip-actions-delete-'.e($offer->uid, false).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_delete_offer'))]); ?>
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
                        </aside>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>

            
            <div class="border-dashed border-2 dark:border-zinc-500 rounded-md">
                <div class="py-14 px-6 text-center text-sm sm:px-14">
                    <svg class="mx-auto h-14 w-14 text-slate-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M12.414 5H21a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7.414l2 2zM11 9v5h2V9h-2zm0 6v2h2v-2h-2z"></path></g></svg>
                    <p class="mt-4 font-semibold text-slate-700 dark:text-zinc-300 text-[15px]"><?php echo e(__('messages.t_no_submitted_offers_yet'), false); ?></p>
                    <p class="mt-2 text-slate-500 dark:text-zinc-400 max-w-md mx-auto"><?php echo e(__('messages.t_offers_u_will_submit_freelancers_visible_here'), false); ?></p>
                </div>
            </div>

        <?php endif; ?>

    </div>

    
    <?php if($offers->hasPages()): ?>
        <div class="flex justify-center pt-12">
            <?php echo $offers->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>

</div>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(url('public/js/plugins/file-icon-vectors/file-icon-vectors.min.css'), false); ?>" />
<?php $__env->stopPush(); ?><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/main/account/offers/offers.blade.php ENDPATH**/ ?>