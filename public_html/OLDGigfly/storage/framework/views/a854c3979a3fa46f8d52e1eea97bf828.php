<div class="<?php if($disabled): ?> opacity-60 <?php endif; ?>">
    <?php if($label): ?>
        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('label')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-1','label' => $label,'has-error' => $errors->has($name),'for' => $id]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
    <?php endif; ?>

    <select <?php echo e($attributes->class([
        $defaultClasses(),
        $errorClasses() =>  $errors->has($name),
        $colorClasses() => !$errors->has($name),
    ]), false); ?>>
        <?php if($options->isNotEmpty()): ?>
            <?php if($placeholder): ?>
                <option value=""><?php echo e($placeholder, false); ?></option>
            <?php endif; ?>

            <?php $__empty_1 = true; $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($getOptionValue($key, $option), false); ?>"
                    <?php if(data_get($option, 'disabled', false)): ?> disabled <?php endif; ?>>
                    <?php echo e($getOptionLabel($option), false); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php if (! ($hideEmptyMessage)): ?>
                    <option disabled>
                        <?php echo e($emptyMessage ?? __('wireui::messages.empty_options'), false); ?>

                    </option>
                <?php endif; ?>
            <?php endif; ?>
        <?php else: ?> <?php echo e($slot, false); ?> <?php endif; ?>
    </select>

    <?php if($hint): ?>
        <label <?php if($id): ?> for="<?php echo e($id, false); ?>" <?php endif; ?> class="mt-2 text-sm text-secondary-500 dark:text-secondary-400">
            <?php echo e($hint, false); ?>

        </label>
    <?php endif; ?>

    <?php if($name): ?>
        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('error')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => $name]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/wireui/wireui/resources/views/components/native-select.blade.php ENDPATH**/ ?>