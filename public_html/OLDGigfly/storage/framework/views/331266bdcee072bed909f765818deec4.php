<div class="flex flex-col rounded-lg shadow bg-white overflow-hidden relative">
   
    
    <div wire:loading wire:loading.block>
        <div class="absolute w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-50 rounded-lg">
            <div class="lds-ripple"><div></div><div></div></div>
        </div>
    </div>

    
    <div class="py-4 px-5 lg:px-6 w-full sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-center sm:justify-left">
            <h3 class="inline-flex items-center font-semibold">
                <span><?php echo app('translator')->get('messages.t_trashed_users'); ?></span>
            </h3>
        </div>
    </div>
    
    
    <div class="grow w-full">
        <div class="overflow-x-auto min-w-full bg-white">
            <table class="min-w-full text-sm align-middle whitespace-nowrap">
                
                <thead>
                    <tr>
                        <th class="px-7 py-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest ltr:text-left rtl:text-right">
                            <?php echo app('translator')->get('messages.t_user'); ?>
                        </th>
                        <th class="p-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest text-center">
                            <?php echo app('translator')->get('messages.t_deleted_date'); ?>
                        </th>
                        <th class="p-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest text-center">
                            <?php echo app('translator')->get('messages.t_options'); ?>
                        </th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr wire:key="trashed-users-<?php echo e($user->uid, false); ?>">

                            
                            <td class="px-7 py-3 ltr:text-left rtl:text-right">
                                <a href="<?php echo e(url('profile', $user->username), false); ?>" target="_blank" class="flex items-center">
                                    <div class="w-8 h-8">
                                        <img class="w-full h-full rounded object-cover lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($user->avatar), false); ?>" alt="<?php echo e($user->username, false); ?>" />
                                    </div>
                                    <div class="ltr:pl-4 rtl:pr-4">
                                        <p class="font-medium text-xs flex items-center">
                                            <?php echo e($user->username, false); ?>

                                            <?php if($user->status === 'verified'): ?>
                                                <img data-tooltip-target="tooltip-account-verified-<?php echo e($user->id, false); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg'), false); ?>" alt="<?php echo e(__('messages.t_account_verified'), false); ?>">
                                                <div id="tooltip-account-verified-<?php echo e($user->id, false); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    <?php echo e(__('messages.t_account_verified'), false); ?>

                                                </div>
                                            <?php endif; ?>
                                        </p>
                                        <p class="text-[11px] leading-3 text-gray-600 pt-2"><?php echo e($user->email, false); ?></p>
                                    </div>
                                </a>
                            </td>

                            
                            <td class="p-3 text-center">
                                <span class="text-gray-500 font-semibold text-[13px]"><?php echo e(format_date($user->deleted_at), false); ?></span>
                            </td>

                            
                            <td class="p-3 text-center">
                                <div class="space-x-4 rtl:space-x-reverse">
                                    
                                    
                                    <button type="button" wire:click="confirmRestore('<?php echo e($user->id, false); ?>')" data-tooltip-target="tooltip-action-restore-<?php echo e($user->id, false); ?>" class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                                        <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 12c2.28 0 4-1.72 4-4s-1.72-4-4-4-4 1.72-4 4 1.72 4 4 4zm0-6c1.178 0 2 .822 2 2s-.822 2-2 2-2-.822-2-2 .822-2 2-2zm1 7H7c-2.757 0-5 2.243-5 5v1h2v-1c0-1.654 1.346-3 3-3h2c1.654 0 3 1.346 3 3v1h2v-1c0-2.757-2.243-5-5-5zm9.364-10.364L16.95 4.05C18.271 5.373 19 7.131 19 9s-.729 3.627-2.05 4.95l1.414 1.414C20.064 13.663 21 11.403 21 9s-.936-4.663-2.636-6.364z"></path><path d="M15.535 5.464 14.121 6.88C14.688 7.445 15 8.198 15 9s-.312 1.555-.879 2.12l1.414 1.416C16.479 11.592 17 10.337 17 9s-.521-2.592-1.465-3.536z"></path></svg>
                                    </button>
                                    <div id="tooltip-action-restore-<?php echo e($user->id, false); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <?php echo e(__('messages.t_restore_user'), false); ?>

                                    </div>

                                    
                                    <button type="button" wire:click="confirmDelete('<?php echo e($user->id, false); ?>')" data-tooltip-target="tooltip-action-delete-<?php echo e($user->id, false); ?>" class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                                        <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                    </button>
                                    <div id="tooltip-action-delete-<?php echo e($user->id, false); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <?php echo e(__('messages.t_permanently_delete'), false); ?>

                                    </div>

                                </div>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>

    
    <?php if($users->hasPages()): ?>
        <div class="px-4 py-5 sm:px-6 flex justify-center">
            <?php echo $users->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>

</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/livewire/admin/users/trash/trash.blade.php ENDPATH**/ ?>