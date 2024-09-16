<?php if(session()->has('livewire-alert')): ?>
    <script>
        flashAlert(<?php echo json_encode(session('livewire-alert'), 15, 512) ?>)
    </script>
<?php endif; ?><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/vendor/jantinnerezo/livewire-alert/src/../resources/views/components/flash.blade.php ENDPATH**/ ?>