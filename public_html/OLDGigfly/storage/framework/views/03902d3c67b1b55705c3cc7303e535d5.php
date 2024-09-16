<div x-data="wireui_inputs_currency({
    isLazy: <?= json_encode(filter_var($attributes->wire('model')->hasModifier('lazy'), FILTER_VALIDATE_BOOLEAN)); ?>,
    model:  <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id, false); ?>').entangle('<?php echo e($attributes->wire('model')->value(), false); ?>')<?php echo e($attributes->wire('model')->hasModifier('defer') ? '.defer' : '', false); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id, false); ?>').entangle('<?php echo e($attributes->wire('model'), false); ?>')<?php endif; ?>,
    emitFormatted: <?= json_encode(filter_var($emitFormatted, FILTER_VALIDATE_BOOLEAN)); ?>,
    thousands: '<?php echo e($thousands, false); ?>',
    decimal:   '<?php echo e($decimal, false); ?>',
    precision:  <?php echo e($precision, false); ?>,
})" <?php echo e($attributes->only('wire:key'), false); ?>>
    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('input')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => $attributes->whereDoesntStartWith(['wire:model', 'wire:key'])->except('type'),'borderless' => $borderless,'shadowless' => $shadowless,'label' => $label,'hint' => $hint,'corner-hint' => $cornerHint,'icon' => $icon,'right-icon' => $rightIcon,'prefix' => $prefix,'suffix' => $suffix,'prepend' => $prepend,'append' => $append,'x-model' => 'input','x-on:input' => 'mask($event.target.value)','x-on:blur' => 'emitInput($event.target.value)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/wireui/wireui/resources/views/components/inputs/currency.blade.php ENDPATH**/ ?>