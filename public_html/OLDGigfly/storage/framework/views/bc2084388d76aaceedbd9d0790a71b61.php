<div class="favorite-list-item">
    <?php if($user): ?>
        <div data-id="<?php echo e($user->id, false); ?>" data-action="0" class="avatar av-m"
            style="background-image: url('<?php echo e(Chatify::getUserWithAvatar($user)->avatar, false); ?>');">
        </div>
        <p><?php echo e(strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name, false); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/munafio/chatify/src/views/layouts/favorite.blade.php ENDPATH**/ ?>