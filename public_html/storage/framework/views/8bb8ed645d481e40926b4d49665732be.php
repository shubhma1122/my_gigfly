<div class="w-full">

    
    <?php if (isset($component)) { $__componentOriginala21f49a74cfebdbb98a47509c8a19010 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala21f49a74cfebdbb98a47509c8a19010 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $attributes = $__attributesOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $component = $__componentOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__componentOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>

    
    <div class="lg:flex lg:items-center lg:justify-between mb-14">
    
        <div class="min-w-0 flex-1">

            
            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                <?php echo app('translator')->get('messages.t_categories'); ?>
            </h2>

            
            <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                    
                    <li>
                        <div class="flex items-center">
                            <a href="<?php echo e(url('/'), false); ?>" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                <?php echo app('translator')->get('messages.t_home'); ?>
                            </a>
                        </div>
                    </li>
    
                    
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="<?php echo e(admin_url('/'), false); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                <?php echo app('translator')->get('messages.t_dashboard'); ?>
                            </a>
                        </div>
                    </li>
    
                    
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                <?php echo app('translator')->get('messages.t_categories'); ?>
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

        
        <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4 justify-between">

            
            <a href="<?php echo e(admin_url('categories/create'), false); ?>" class="btn p-2.5 hover:shadow-none ring-slate-300 dark:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-slate-300 dark:focus:ring-offset-zinc-600 space-x-2 rtl:space-x-reverse border">
                <?php if (isset($component)) { $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $attributes; } ?>
<?php $component = WireUi\View\Components\Icon::resolve(['name' => 'plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400 dark:text-zinc-300','variant' => 'solid','mini' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $attributes = $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $component = $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
            </a>

        </div>

    </div>

    
    <?php if(session()->has('success')): ?>
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3">
                    <p class="text-sm font-medium text-green-800"><?php echo e(session()->get('success'), false); ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>

                        <th><?php echo app('translator')->get('messages.t_category'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_gigs'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_projects'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('messages.t_options'); ?></th>

                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr wire:key="categories-<?php echo e($category->uid, false); ?>">

                            
                            <td>
                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <div class="h-10 w-10 inline-flex flex-shrink-0 relative">
                                        <?php if($category->icon): ?>
                                            <img class="mask is-squircle object-cover w-full h-full block" src="<?php echo e(src($category->icon), false); ?>" alt="<?php echo e($category->name, false); ?>">
                                        <?php else: ?>
                                            <?php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            ?>
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba(<?php echo e($color, false); ?>, .1);color: rgb(<?php echo e($color, false); ?>)">
                                                <?php echo e(Str::substr($category->name, 0, 2), false); ?>

                                            </div>   
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <a href="<?php echo e(url('categories', $category->slug), false); ?>" target="_blank" class="text-sm font-semibold whitespace-nowrap dark:text-zinc-100">
                                            <?php echo e($category->name, false); ?>

                                        </a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-px dark:text-zinc-300">
                                            <?php echo e($category->slug, false); ?>

                                        </div>
                                    </div>
                                </div>
                            </td>

                            
                            <td class="text-center">
                                <span class="text-sm font-semibold text-gray-500 dark:text-zinc-300"><?php echo e($category->gigs_count, false); ?></span>
                            </td>

                            
                            <td class="text-center">
                                <span class="text-sm font-semibold text-gray-500 dark:text-zinc-300"><?php echo e($category->projects_count, false); ?></span>
                            </td>
                            
                            
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'pencil','title' => __('messages.t_edit'),'href' => ''.e(admin_url('categories/edit/' . $category->uid), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_edit')),'href' => ''.e(admin_url('categories/edit/' . $category->uid), false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>

                                    
                                    <?php if (isset($component)) { $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action-button','data' => ['icon' => 'trash','iconColor' => 'text-red-600','title' => __('messages.t_delete'),'href' => ''.e(admin_url('categories/delete/' . $category->uid), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'trash','icon-color' => 'text-red-600','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_delete')),'href' => ''.e(admin_url('categories/delete/' . $category->uid), false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $attributes = $__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__attributesOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4)): ?>
<?php $component = $__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4; ?>
<?php unset($__componentOriginal25db5b2b4ed745b6b0fe0dc3034b2fb4); ?>
<?php endif; ?>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>

    
    <?php if($categories->hasPages()): ?>
        <div class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
            <?php echo $categories->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>

</div><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/admin/categories/categories.blade.php ENDPATH**/ ?>