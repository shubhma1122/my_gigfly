<div class="w-full sm:mx-auto sm:max-w-2xl">
	<div class="card px-4 py-10 sm:p-10 md:mx-0">

        
        <div class="flex items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

            
            <?php if($user->avatar): ?>
                <div class="relative">
                    <img class="w-14 h-14 rounded-full object-cover" src="<?php echo e(src($user->avatar), false); ?>" alt="<?php echo e($user->username, false); ?>">
                    <?php if($user->isOnline()): ?>
                        <span class="top-0 ltr:left-10 rtl:right-10 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-zinc-800 rounded-full"></span>
                    <?php else: ?>
                        <span class="top-0 ltr:left-10 rtl:right-10 absolute w-3.5 h-3.5 bg-red-500 border-2 border-white dark:border-zinc-800 rounded-full"></span>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                    <i class="ph-duotone ph-user"></i>
                </div>
            <?php endif; ?>

            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_user_details'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('messages.t_more_details_about_this_user'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_username'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e($user->username, false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_email_address'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e($user->email, false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_email_verified_at'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->email_verified_at): ?>
                            <?php echo e(format_date($user->email_verified_at, 'ago'), false); ?>

                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_account_type'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->account_type === 'seller'): ?>
                            <?php echo e(__('messages.t_freelancer'), false); ?>

                        <?php else: ?>
                            <?php echo e(__('messages.t_buyer'), false); ?>

                        <?php endif; ?>
                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_level'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->level): ?>
                            <?php echo e($user->level->title, false); ?>

                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_registeration_method'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->provider_id && $user->provider_name): ?>
                            <?php switch($user->provider_name):
                                case ('facebook'): ?>
                                    <?php echo e(__('messages.t_facebook'), false); ?>

                                <?php break; ?>

                                <?php case ('twitter'): ?>
                                    <?php echo e(__('messages.t_twitter'), false); ?>

                                <?php break; ?>

                                <?php case ('google'): ?>
                                    <?php echo e(__('messages.t_google'), false); ?>

                                <?php break; ?>

                                <?php case ('github'): ?>
                                    <?php echo e(__('messages.t_github'), false); ?>

                                <?php break; ?>

                                <?php case ('linkedin'): ?>
                                    <?php echo e(__('messages.t_linkedin'), false); ?>

                                <?php break; ?>

                                <?php default: ?>
                            <?php endswitch; ?>
                        <?php else: ?>
                            <?php echo e(__('messages.t_email_address'), false); ?>

                        <?php endif; ?>
                    </dd>
                </div>

                
                <?php if($user->country): ?>
                    <div class="sm:col-span-1">
                        <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                            <?php echo e(__('messages.t_country'), false); ?>

                        </dt>
                        <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                            <?php if($user->country): ?>
                                <div class="flex items-center">
                                    <img src="<?php echo e(countryFlag($user->country?->code), false); ?>"
                                        alt="<?php echo e($user->country->name, false); ?>" class="h-3 ltr:mr-2 rtl:ml-2">
                                    <span><?php echo e($user->country->name, false); ?></span>
                                </div>
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </dd>
                    </div>
                <?php endif; ?>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_fullname'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->fullname): ?>
                            <?php echo e($user->fullname, false); ?>

                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_headline'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->headline): ?>
                            <?php echo e($user->headline, false); ?>

                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_registeration_date'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e(format_date($user->created_at, 'ago'), false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_net_balance'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e(money($user->balance_net, settings('currency')->code, true), false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_withdrawn_money'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e(money($user->balance_withdrawn, settings('currency')->code, true), false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_used_for_purchases'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e(money($user->balance_purchases, settings('currency')->code, true), false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_pending_clearance'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e(money($user->balance_pending, settings('currency')->code, true), false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_available_balance'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php echo e(money($user->balance_available, settings('currency')->code, true), false); ?>

                    </dd>
                </div>

                
                <div class="sm:col-span-1">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_last_activity'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->last_activity): ?>
                            <?php echo e(format_date($user->last_activity, 'ago'), false); ?>

                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </dd>
                </div>

                
                <div class="sm:col-span-2">
                    <dt class="text-xs+ font-normal text-gray-400 dark:text-zinc-300">
                        <?php echo e(__('messages.t_description'), false); ?>

                    </dt>
                    <dd class="mt-1 text-sm font-semibold text-gray-900 dark:text-zinc-100">
                        <?php if($user->description): ?>
                            <?php echo e($user->description, false); ?>

                        <?php endif; ?>
                    </dd>
                </div>

            </dl>
        </div>

    </div>
</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/admin/users/options/details.blade.php ENDPATH**/ ?>