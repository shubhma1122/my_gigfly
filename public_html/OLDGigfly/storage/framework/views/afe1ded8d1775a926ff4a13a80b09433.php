<label <?php echo e($attributes->class([
        'block text-sm font-medium',
        'text-negative-600'  => $hasError,
        'opacity-60'         => $attributes->get('disabled'),
        'text-gray-700 dark:text-gray-400' => !$hasError,
    ]), false); ?>>
    <?php echo e($label ?? $slot, false); ?>

</label>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/wireui/wireui/resources/views/components/label.blade.php ENDPATH**/ ?>