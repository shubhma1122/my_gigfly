<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['model', 'id']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['model', 'id']); ?>
<?php foreach (array_filter((['model', 'id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>

    
    <div wire:ignore>
        <textarea
            class="min-h-fit h-48"
            id="tinymce-element-<?php echo e($id, false); ?>">
		
			
			<?php if($value ?? null): ?>
				<?php echo $value; ?>

			<?php endif; ?>

		</textarea>
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

</div>


<?php if (! $__env->hasRenderedOnce('928f8d9f-c0e0-44b4-bc3f-1141dca26f73')): $__env->markAsRenderedOnce('928f8d9f-c0e0-44b4-bc3f-1141dca26f73');
$__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/plugins/tinymce/tinymce.min.js'), false); ?>"></script>
<?php $__env->stopPush(); endif; ?>


<?php $__env->startPush('scripts'); ?>
    <script>

        // Initialize TinyMCE
        tinymce.init({

            // Element
            selector: '#tinymce-element-<?php echo e($id, false); ?>',

            // Language
            language: '<?php echo e(app()->getLocale(), false); ?>',

			// Plugins
            plugins: [
    			'accordion', 'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak', 'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media','table', 'emoticons', 'help'
			],

			// Toolbar
  			toolbar: 'accordion | undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +  'bullist numlist outdent indent | link image | print preview media fullscreen | ' + 'forecolor backcolor emoticons | help',

			// Menu
			menu: {
				favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
			},

			// Link outside
			link_default_target: '_blank',

			// Emojis
			emoticons_database  : 'emojiimages',
			emoticons_images_url: '<?php echo e(url("public/js/plugins/twemoji/assets/72x72"), false); ?>/',
			relative_urls       : false,

			// Files
			image_title         : true,
			automatic_uploads   : true,
			file_picker_types   : 'image',
			file_picker_callback: (cb, value, meta) => {
				const input = document.createElement('input');
				input.setAttribute('type', 'file');
				input.setAttribute('accept', 'image/*');

				input.addEventListener('change', (e) => {
				const file = e.target.files[0];

				const reader = new FileReader();
				reader.addEventListener('load', () => {
					/*
					Note: Now we need to register the blob in TinyMCEs image blob
					registry. In the next release this part hopefully won't be
					necessary, as we are looking to handle it internally.
					*/
					const id = 'blobid' + (new Date()).getTime();
					const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
					const base64 = reader.result.split(',')[1];
					const blobInfo = blobCache.create(id, file, base64);
					blobCache.add(blobInfo);

					/* call the callback and populate the Title field with the file name */
					cb(blobInfo.blobUri(), { title: file.name });
				});
				reader.readAsDataURL(file);
				});

				input.click();
			},

    		// Toolbar
			menubar     : 'edit view insert format tools table',
			toolbar_mode: 'sliding',

			// Theme
			skin         : '<?php echo e(current_theme() === "dark" ? "oxide-dark" : "oxide", false); ?>',
			content_css  : '<?php echo e(current_theme() === "dark" ? "dark" : "default", false); ?>',
			content_style: "body { font-family:  <?php echo settings('appearance')->font_family ?>, sans-serif !important; font-size: 14px }",

			// Setup
			setup: function (editor) {
				editor.on('init change', function () {
					editor.save();
				});
				editor.on('submit', function (e) {
					window.Livewire.find('<?php echo e($_instance->getId(), false); ?>').set('<?php echo e($model, false); ?>', editor.getContent());
				});
			}

        });

    </script>
<?php $__env->stopPush(); ?><?php /**PATH /home/u304230485/domains/gigfly.in/public_html/resources/views/components/forms/tinymce.blade.php ENDPATH**/ ?>