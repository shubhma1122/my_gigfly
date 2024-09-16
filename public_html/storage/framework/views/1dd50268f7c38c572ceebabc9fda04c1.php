<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['class','variant','mini']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['class','variant','mini']); ?>
<?php foreach (array_filter((['class','variant','mini']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal2d43a58e7f2ae2c08a25c125a04893b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d43a58e7f2ae2c08a25c125a04893b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'wireui::components.icons.outline.plus','data' => ['class' => $class,'variant' => $variant,'mini' => $mini]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('wireui::icons.outline.plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class),'variant' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($variant),'mini' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mini)]); ?>

<?php echo e($slot ?? "", false); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d43a58e7f2ae2c08a25c125a04893b6)): ?>
<?php $attributes = $__attributesOriginal2d43a58e7f2ae2c08a25c125a04893b6; ?>
<?php unset($__attributesOriginal2d43a58e7f2ae2c08a25c125a04893b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d43a58e7f2ae2c08a25c125a04893b6)): ?>
<?php $component = $__componentOriginal2d43a58e7f2ae2c08a25c125a04893b6; ?>
<?php unset($__componentOriginal2d43a58e7f2ae2c08a25c125a04893b6); ?>
<?php endif; ?><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/storage/framework/views/c2e826c687627624c3cb85e726048da9.blade.php ENDPATH**/ ?>