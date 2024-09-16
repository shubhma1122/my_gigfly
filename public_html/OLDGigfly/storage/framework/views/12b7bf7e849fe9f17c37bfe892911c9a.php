<main class="w-full"
    x-data="window.aelkGHWmZHjwNJZ" 
    x-init="initialize()"
    x-on:livewire-upload-start="uploadStart()"
    x-on:livewire-upload-finish="uploadFinish()"
    x-on:livewire-upload-error="uploadError()"
    x-on:livewire-upload-progress="uploadingProgress = $event.detail.progress" >
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal897c321ee9b9bb967400e80c55835c23 = $component; } ?>
<?php $component = App\View\Components\Main\Account\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main.account.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main\Account\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897c321ee9b9bb967400e80c55835c23)): ?>
<?php $component = $__componentOriginal897c321ee9b9bb967400e80c55835c23; ?>
<?php unset($__componentOriginal897c321ee9b9bb967400e80c55835c23); ?>
<?php endif; ?>
                </aside>

                
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">

                        
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100"><?php echo e(__('messages.t_send_requirements'), false); ?></h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_send_requirements_subtitle'), false); ?></p>
                        </div>
                        
                        
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                            
                            <div class="col-span-12 xl:col-span-7 grid items-end border-2 border-dashed dark:border-zinc-700 rounded-md <?php echo e($item->requirements()->exists()  ? 'relative' : '', false); ?>">

                                
                                <?php if($item->requirements()->exists()): ?>
                                    <div class="absolute inset-6 backdrop-blur-sm w-full h-full top-0 ltr:left-0 rtl:right-0 bg-gray-100/60 dark:bg-black/25 z-30 rounded-bl-md"></div>
                                <?php endif; ?>

                                
                                <div class="grid grid-cols-12 md:gap-x-6 gap-y-6 px-6 py-8">

                                    
                                    <div class="col-span-12 mb-6">
                                        <div class="flex flex-col space-y-4 overflow-y-auto">
                                            <div class="flex items-center">
                                                <div class="flex flex-col space-y-2 text-sm ltr:ml-2 rtl:mr-2 order-2 items-center">
                                                   <div><span class="px-4 py-2 rounded-lg italic inline-block bg-gray-100 dark:bg-zinc-600 text-gray-900 dark:text-gray-300 w-full"><?php echo e(__('messages.t_hey_before_i_start_working_on_order_msg'), false); ?></span></div>
                                                </div>
                                                <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($item->owner->avatar), false); ?>" alt="<?php echo e($item->owner->username, false); ?>" class="lazy w-10 h-10 rounded-full order-1 object-cover">
                                            </div>
                                        </div>
                                    </div>

                                    <?php $__currentLoopData = $item->gig->requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                        
                                        <?php if($req->type === 'text'): ?>
                                        
                                            <div class="col-span-12">
                                                <label for="requirements-text-<?php echo e($key, false); ?>-<?php echo e($item->uid, false); ?>" class="block text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    <?php echo e($req->question, false); ?>

                                                    <?php if($req->is_required): ?>
                                                        <span class="ltr:ml-1 rtl:mr-1 text-red-600 font-light text-xs italic lowercase"><?php echo e(__('messages.t_required'), false); ?></span>
                                                    <?php endif; ?>
                                                </label>
                                                <div class="mt-2.5 relative">
                                                    <textarea placeholder="<?php echo e(__('messages.t_type_ur_message_here'), false); ?>" wire:model.defer="requirements.<?php echo e($req->id, false); ?>.value" rows="8" id="requirements-text-<?php echo e($key, false); ?>-<?php echo e($item->uid, false); ?>" class="dark:bg-transparent block w-full text-xs rounded border-2 ltr:pr-10 rtl:pl-10 ltr:pl-3 rtl:pr-3 py-3 font-normal resize-none border-gray-200 dark:border-zinc-600 placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:text-gray-50"></textarea>
                                                    <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3 rtl:pl-3 flex items-center pointer-events-none">
                                                        <svg class="text-gray-400 w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <?php endif; ?>
                                        
                                        
                                        <?php if($req->type === 'file'): ?>
                                        
                                            <div class="col-span-12">
                                                <label for="requirements-file-<?php echo e($key, false); ?>-<?php echo e($item->uid, false); ?>" class="block text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    <?php echo e($req->question, false); ?>

                                                    <?php if($req->is_required): ?>
                                                        <span class="ltr:ml-1 rtl:mr-1 text-red-600 font-light text-xs italic lowercase"><?php echo e(__('messages.t_required'), false); ?></span>
                                                    <?php endif; ?>
                                                </label>
                                                <div class="mt-2.5 relative">
                                                    <input type="file" x-on:change="fileInputChanged($event, 'requirements.<?php echo e($req->id, false); ?>.value')" accept="<?php echo e(acceptableRequirementsMimeTypes(), false); ?>"  id="requirements-file-<?php echo e($key, false); ?>-<?php echo e($item->uid, false); ?>" class="block w-full text-xs text-gray-700 font-medium bg-gray-100 rounded-md cursor-pointer focus:ring-0 focus:outline-none" />
                                                </div>
                                                <span class="text-xs text-gray-400 dark:text-gray-300 font-normal">Only <span class="text-gray-600 dark:text-white"><?php echo e(settings('media')->requirements_file_allowed_extensions, false); ?></span> file extensions are allowed. Max file size is: <span class="text-gray-600 dark:text-white"><?php echo e(settings('media')->requirements_file_max_size, false); ?> MB</span></span>
                                            </div>

                                        <?php endif; ?>
                                        
                                        
                                        <?php if($req->type === 'choice'): ?>
                                        
                                            
                                            <?php if($req->is_multiple): ?>
                                                
                                                <div class="col-span-12">
                                                    <fieldset>
                                                        <legend class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                            <?php echo e($req->question, false); ?>

                                                            <?php if($req->is_required): ?>
                                                                <span class="ltr:ml-1 rtl:mr-1 text-red-600 font-light text-xs italic lowercase"><?php echo e(__('messages.t_required'), false); ?></span>
                                                            <?php endif; ?>
                                                        </legend>
                                                        <div class="mt-4 space-y-3">

                                                            
                                                            <?php $__currentLoopData = $req->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="flex items-center">
                                                                    <div class="flex items-center h-5">
                                                                        <input id="requirements-choice-multiple-<?php echo e($key, false); ?>-option-<?php echo e($index, false); ?>" wire:model.defer="requirements.<?php echo e($req->id, false); ?>.value.<?php echo e($index, false); ?>" value="<?php echo e($option->option, false); ?>" type="checkbox" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-500 dark:bg-zinc-600 d rounded-sm border-2">
                                                                    </div>
                                                                    <div class="ltr:ml-3 rtl:mr-3 text-xs">
                                                                        <label for="requirements-choice-multiple-<?php echo e($key, false); ?>-option-<?php echo e($index, false); ?>" class="font-medium text-gray-700 dark:text-gray-100 cursor-pointer"><?php echo e($option->option, false); ?></label>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </div>
                                                    </fieldset>
                                                </div>

                                            <?php else: ?>

                                                
                                                <div class="col-span-12">

                                                    <fieldset>
                                                        <legend class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                            <?php echo e($req->question, false); ?>

                                                            <?php if($req->is_required): ?>
                                                                <span class="ltr:ml-1 rtl:mr-1 text-red-600 font-light text-xs italic lowercase"><?php echo e(__('messages.t_required'), false); ?></span>
                                                            <?php endif; ?>
                                                        </legend>
                                                        <div class="mt-4 space-y-3">

                                                            
                                                            <?php $__currentLoopData = $req->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="flex items-center">
                                                                    <div class="flex items-center h-5">
                                                                        <input id="requirements-choice-not-multiple-<?php echo e($key, false); ?>-option-<?php echo e($index, false); ?>" wire:model.defer="requirements.<?php echo e($req->id, false); ?>.value" value="<?php echo e($option->option, false); ?>" type="radio" name="requirements-choice-not-multiple-<?php echo e($key, false); ?>.options" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-500 dark:bg-zinc-600 d rounded-full border-2">
                                                                    </div>
                                                                    <div class="ltr:ml-3 rtl:mr-3 text-xs">
                                                                        <label for="requirements-choice-not-multiple-<?php echo e($key, false); ?>-option-<?php echo e($index, false); ?>" class="font-medium text-gray-700 dark:text-gray-100 cursor-pointer"><?php echo e($option->option, false); ?></label>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        </div>
                                                    </fieldset>
                                                    
                                                </div>

                                            <?php endif; ?>

                                        <?php endif; ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                                
                                <div class="px-4 py-3 bg-gray-50 dark:bg-zinc-700 ltr:text-right rtl:text-left sm:px-6 rounded-bl-md flex justify-end">
                                    <div :class="isUploading ? 'hidden' : 'block'">
                                        <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'submit','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_submit'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                                    </div>
                                </div>

                            </div>

                            
                            <div class="col-span-12 xl:col-span-5 border-2 border-dashed dark:border-zinc-700 rounded-md <?php echo e($item->is_requirements_sent && $item->requirements()->count() ? 'grid items-end' : '', false); ?>">
                                <div class="grid grid-cols-12 md:gap-x-6 gap-y-6 px-6 py-8">

                                    
                                    <div class="col-span-12 mb-8">
                                        <div class="">
                                            <h3 class="text-base leading-6 font-bold text-gray-900 dark:text-white">
                                                <?php echo e(__('messages.t_submitted_files_preview'), false); ?>

                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                                <?php echo e(__('messages.t_submitted_files_preview_subtitle'), false); ?>

                                            </p>
                                        </div>
                                    </div>

                                    
                                    <div class="col-span-12">

                                        
                                        <?php $__currentLoopData = $item->requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                            <?php if($req->form_type === 'text'): ?>
                                                <div class="w-full mb-8 block">
                                                    <dt class="text-sm font-medium text-gray-500">
                                                        <?php echo e($req->question, false); ?>

                                                    </dt>
                                                    <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                                                        <?php echo e($req->form_value, false); ?>

                                                    </dd>
                                                </div>
                                            <?php endif; ?>

                                            
                                            <?php if($req->form_type === 'choice'): ?>
                                                <div class="w-full mb-8 block">
                                                    <dt class="text-sm font-medium text-gray-500">
                                                        <?php echo e($req->question, false); ?>

                                                    </dt>
                                                    <dd class="mt-2 text-sm text-gray-900 dark:text-gray-100">

                                                        
                                                        <?php if( is_array($req->form_value) && count($req->form_value) ): ?>
                                                        
                                                            
                                                            <?php $__currentLoopData = $req->form_value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="flex items-center mb-3">
                                                                    <div class="flex items-center h-5">
                                                                        <input type="checkbox" checked disabled class="h-4 w-4 text-gray-300 border-gray-300 rounded-sm border-2">
                                                                    </div>
                                                                    <div class="ltr:ml-3 rtl:mr-3 text-xs">
                                                                        <label class="font-medium text-gray-700 dark:text-gray-100"><?php echo e($value, false); ?></label>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <?php else: ?>

                                                            <div class="flex items-center mb-3">
                                                                <div class="flex items-center h-5">
                                                                    <input type="checkbox" checked disabled class="h-4 w-4 text-gray-300 border-gray-300 rounded-full border-2">
                                                                </div>
                                                                <div class="ltr:ml-3 rtl:mr-3 text-xs">
                                                                    <label class="font-medium text-gray-700 dark:text-gray-100"><?php echo e($req->form_value, false); ?></label>
                                                                </div>
                                                            </div>

                                                        <?php endif; ?>
                                                        
                                                    </dd>
                                                </div>
                                            <?php endif; ?>

                                            
                                            <?php if($req->form_type === 'file'): ?>
                                                <div class="w-full mb-8 block">
                                                    <dt class="text-sm font-medium text-gray-500">
                                                        <?php echo e($req->question, false); ?>

                                                    </dt>
                                                    <dd class="mt-2 text-sm text-gray-900 dark:text-gray-100">
                                                        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                                            <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-3 flex items-center justify-between text-sm">
                                                                <div class="w-0 flex-1 flex items-center">
                                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path> </svg>
                                                                    <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate">
                                                                        <?php echo e($req->form_value['id'], false); ?>.<?php echo e($req->form_value['extension'], false); ?>

                                                                    </span>
                                                                </div>
                                                                <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0">
                                                                    <a href="<?php echo e(url('uploads/requirements/' . $order->uid . '/' . $item->uid . '/' . $req->id . '/' . $req->form_value['id']), false); ?>" target="_blank" class="font-medium text-blue-600 hover:text-blue-500">
                                                                        <?php echo e(__('messages.t_download'), false); ?>

                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </div>
                                            <?php endif; ?>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>

                                    
                                    <?php if($item->is_requirements_sent && $item->requirements()->count()): ?>
                                        <div class="col-span-12">
                                            <div class="bg-yellow-50 ltr:border-l-4 rtl:border-r-4 border-yellow-400 p-4">
                                                <div class="flex">
                                                    <div class="flex-shrink-0">
                                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/> </svg>
                                                    </div>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <p class="text-sm text-yellow-700">
                                                            <?php echo e(__('messages.t_remember_resubmit_files_reset_expected_delivery_date'), false); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>

                                
                                <?php if($item->is_requirements_sent && $item->requirements()->count()): ?>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-zinc-700 text-right sm:px-6 rounded-br-md flex justify-end">
                                        <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'resubmit','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_resubmit'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                                    </div>
                                <?php endif; ?>

                            </div>

                        </div>

                    </div>                  

                </div>

            </div>
        </div>
    </div>

    
    <div id="uploading-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full" wire:ignore.self>
        <div class="relative w-full h-full max-w-md p-4 md:h-auto">
            <div class="relative bg-white dark:bg-zinc-700 rounded-lg shadow">
                <div class="p-6 text-center">
                    <h3 class="mb-6 text-base font-bold text-gray-600 dark:text-gray-300">
                        <?php echo e(__('messages.t_pls_wait_until_uploading_finish'), false); ?>

                    </h3>

                    
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-primary-600 dark:text-white"><?php echo e(__('messages.t_uploading'), false); ?></span>
                            <span class="text-sm font-medium text-primary-600 dark:text-white" x-text="uploadText()"></span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-primary-600 h-2.5 rounded-full" :style="{ width: uploadingProgress + '%' }"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</main>

<?php $__env->startPush('scripts'); ?>

    
    <script>
        function aelkGHWmZHjwNJZ() {
            return {

                isUploading      : false,
                uploadingProgress: 0,
                uploadingModal   : null,

                initialize() {

                    // set the modal menu element
                    const targetEl      = document.getElementById('uploading-modal');

                    // options with default values
                    const options       = {
                        placement      : 'center-center',
                        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40 overflow-x-hidden',
                        onHide         : () => {},
                        onShow         : () => {},
                        onToggle       : () => {}
                    };

                    // Generate modal
                    const modal         = new Modal(targetEl, options);

                    // Set modal
                    this.uploadingModal = modal;

                },

                // Upload start
                uploadStart() {
                    this.isUploading = true;
                    this.uploadingModal.show();
                },

                // Upload finish
                uploadFinish() {
                    this.isUploading       = false;
                    this.uploadingProgress = 0;
                    this.uploadingModal.hide();
                },

                // Upload error
                uploadError() {
                    this.isUploading       = false;
                    this.uploadingProgress = 0;
                    this.uploadingModal.hide();
                    window.$wireui.notify({
                        title      : "<?php echo e(__('messages.t_error'), false); ?>",
                        description: "<?php echo e(__('messages.t_error_while_uploading_your_file'), false); ?>",
                        icon       : 'error'
                    });
                },

                // Upload text
                uploadText() {
                    return this.uploadingProgress + " %";
                },

                // Listen when file changed
                fileInputChanged(e, key) {
                    
                    // Get maximum file size
                    const max_size  = Number('<?php echo e(settings("media")->requirements_file_max_size, false); ?>');

                    // Get file name
                    const file_name = e.target.files[0].name;

                    // Get selected file size
                    const file_size = e.target.files[0].size / 1024 / 1024;

                    // Check if extension is valid
                    if (!this.isValidExtension(file_name)) {
                        
                        // Show error
                        window.$wireui.notify({
                            title      : "<?php echo e(__('messages.t_error'), false); ?>",
                            description: "<?php echo e(__('messages.t_selected_file_extension_is_not_allowed'), false); ?>",
                            icon       : 'error'
                        });

                        e.preventDefault();
                        e.stopPropagation();
                        return;

                    }

                    // Validate file size
                    if (file_size > max_size) {
                        
                        // Show error
                        window.$wireui.notify({
                            title      : "<?php echo e(__('messages.t_error'), false); ?>",
                            description: "<?php echo e(__('messages.t_selected_file_size_big'), false); ?>",
                            icon       : 'error'
                        });

                        e.preventDefault();
                        e.stopPropagation();
                        return;

                    }

                    // File is good upload it
                    window.livewire.find('<?php echo e($_instance->id, false); ?>').upload(key, e.target.files[0], (uploadedFilename) => {
                        
                        this.uploadFinish();

                    }, () => {
                        
                        this.uploadError();

                    }, (event) => {
                        this.uploadStart();
                        this.uploadingProgress = event.detail.progress;
                    });

                },

                // Validate extension
                isValidExtension(filename) {

                    // Check file name
                    if (filename.length > 0) {
                        
                        // Get allowed extensions
                        const allowed_extensions = <?php echo \Illuminate\Support\Js::from( explode(',', settings('media')->requirements_file_allowed_extensions) )->toHtml() ?>;

                        // Set is valid variable
                        var is_valid             = false;

                        // Loop through extensions
                        for (let index = 0; index < allowed_extensions.length; index++) {

                            // Get extension
                            const extension = "." + allowed_extensions[index];

                            // Check extension
                            if (filename.substr(filename.length - extension.length, extension.length).toLowerCase() == extension.toLowerCase()) {
                                is_valid = true;
                                break;
                            }
                            
                        }

                        // Return response
                        return is_valid;

                    } else {

                        // Invalid file name
                        return false;

                    }

                }

            }
        }
        window.aelkGHWmZHjwNJZ = aelkGHWmZHjwNJZ();
    </script>

<?php $__env->stopPush(); ?><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/livewire/main/account/orders/options/requirements.blade.php ENDPATH**/ ?>