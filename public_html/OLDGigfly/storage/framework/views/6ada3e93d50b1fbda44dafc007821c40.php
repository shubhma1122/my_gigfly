<?php $__env->startComponent('mail::message'); ?>

<p><?php echo $msg; ?></p>
 
<?php echo app('translator')->get('messages.t_regards'); ?>,<br>
<?php echo e(config('app.name'), false); ?><br>
<?php echo $__env->renderComponent(); ?><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/mail/admin/support/reply.blade.php ENDPATH**/ ?>