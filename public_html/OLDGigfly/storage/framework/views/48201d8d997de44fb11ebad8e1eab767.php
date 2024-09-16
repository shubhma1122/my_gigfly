<sitemap>
    <?php if(! empty($tag->url)): ?>
    <loc><?php echo e(url($tag->url), false); ?></loc>
    <?php endif; ?>
    <?php if(! empty($tag->lastModificationDate)): ?>
    <lastmod><?php echo e($tag->lastModificationDate->format(DateTime::ATOM), false); ?></lastmod>
    <?php endif; ?>
</sitemap>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/spatie/laravel-sitemap/resources/views/sitemapIndex/sitemap.blade.php ENDPATH**/ ?>