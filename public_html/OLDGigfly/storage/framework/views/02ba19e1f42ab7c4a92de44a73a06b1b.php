<script type="text/javascript">

    var cloudName = <?php echo json_encode(Str::after(config('cloudinary.cloud_url'), '@'), 512) ?>;
    var uploadPreset = <?php echo json_encode(config('cloudinary.upload_preset'), 15, 512) ?>;

    function openWidget() {
        window.cloudinary.openUploadWidget(
            { cloud_name: cloudName,
              upload_preset: uploadPreset
            },
            (error, result) => {
              if (!error && result && result.event === "success") {
                console.log('Done uploading..');
                localStorage.setItem("cloud_image_url", result.info.url);
              }
        }).open();
    }
</script>

<button type="button" onclick="openWidget()" <?php echo e($attributes, false); ?>>
  <?php echo e($slot, false); ?>

</button>

<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/cloudinary-labs/cloudinary-laravel/resources/views/components/button.blade.php ENDPATH**/ ?>