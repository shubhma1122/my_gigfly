<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'model', 'accept' => 'image/jpg,image/jpeg,image/png']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'model', 'accept' => 'image/jpg,image/jpeg,image/png']); ?>
<?php foreach (array_filter((['label', 'model', 'accept' => 'image/jpg,image/jpeg,image/png']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>

    
    <label for="text-input-component-id-<?php echo e($model, false); ?>" class="mb-2 text-[0.8125rem] font-semibold tracking-wide flex items-center <?php echo e($errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-700 dark:text-white', false); ?>">
        <span class="ltr:mr-2 rtl:ml-2"><?php echo e(htmlspecialchars_decode($label), false); ?></span>

        
        <div role="status" wire:loading wire:target="<?php echo e($model, false); ?>"> <svg class="inline mr-2 w-4 h-4 text-gray-200 animate-spin fill-primary-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/> </svg> <span class="sr-only">Loading...</span></div>

    </label>
    
    
    <div class="relative">
        <input class="block w-full text-[13px] text-gray-900 bg-transparent border dark:text-gray-300 rounded-md cursor-pointer focus:outline-none dark:dark:border-zinc-500 border-gray-300 file:!bg-slate-100 file:!text-slate-500 file:hover:!bg-slate-200 dark:border-zinc-600 dark:bg-transparent dark:file:!bg-zinc-700 dark:file:!text-zinc-200" id="file_input" type="file" wire:model="<?php echo e($model, false); ?>" accept="<?php echo e($accept, false); ?>">
    </div>

    
    <?php $__errorArgs = [$model];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first($model), false); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/components/forms/file-input.blade.php ENDPATH**/ ?>