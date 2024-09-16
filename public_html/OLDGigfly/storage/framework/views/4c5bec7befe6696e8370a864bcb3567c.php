<div class="relative inline-block text-left"
    x-data="wireui_dropdown"
    x-on:click.outside="close"
    x-on:keydown.escape.window="close"
    <?php echo e($attributes->only('wire:key'), false); ?>>
    <div class="cursor-pointer focus:outline-none" x-on:click="toggle">
        <?php if(isset($trigger)): ?>
            <?php echo e($trigger, false); ?>

        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('icon')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-secondary-500 hover:text-secondary-700
                     dark:hover:text-secondary-600 transition duration-150 ease-in-out','name' => 'dots-vertical']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>

    <div x-show="status"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        <?php echo e($attributes->except('wire:key')->class([
            $getAlign(),
            $width,
            'z-30 absolute mt-2 whitespace-nowrap'
        ]), false); ?>

        style="display: none;"
        <?php if (! ($persistent)): ?> x-on:click="close" <?php endif; ?>>
        <div class="relative <?php echo e($height, false); ?> soft-scrollbar overflow-auto border border-secondary-200
                    rounded-lg shadow-lg p-1 bg-white dark:bg-secondary-800 dark:border-secondary-600">
            <?php echo e($slot, false); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/wireui/wireui/resources/views/components/dropdown.blade.php ENDPATH**/ ?>