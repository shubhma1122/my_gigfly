<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24">
    <div class="relative mce-content-body break-words">
        
        
        <div class="mb-8">

            
            <a href="<?php echo e(url('/'), false); ?>" class="text-xs+ uppercase font-semibold tracking-wider mb-2 text-primary-600">
                <?php echo app('translator')->get('messages.t_home'); ?>
            </a>

            
            <h2 class="text-xl md:text-2xl font-extrabold text-gray-700 dark:text-white">
                <?php echo e($page->title, false); ?>

            </h2>

            
            <h3 class="text-xs md:text-sm md:leading-relaxed font-normal text-gray-400 dark:text-zinc-300">
                <?php echo e(__('messages.t_page_last_update_date', ['date' => format_date($page->updated_at)]), false); ?>

            </h3>

        </div>
    
        
        <article class="break-words relative mce-content-body">
            <?php echo htmlspecialchars_decode($page->content); ?>

        </article>
            
    </div>
</div>


<?php $__env->startPush('styles'); ?>

    
    <?php if(current_theme() === 'dark'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('js/plugins/tinymce/skins/content/dark/content.min.css'), false); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('js/plugins/tinymce/skins/content/default/content.min.css'), false); ?>">
    <?php endif; ?>

<?php $__env->stopPush(); ?><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/main/page/page.blade.php ENDPATH**/ ?>