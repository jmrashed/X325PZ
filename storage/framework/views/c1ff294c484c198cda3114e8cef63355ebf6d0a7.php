<?php $readmore_bn=" বিস্তারিত "; ?>
<?php echo $__env->make('user/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if( isset($data)): ?>
 <?php echo $__env->make('user/bannercontainer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('user/featured', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php endif; ?>

<div class="container">
            <?php echo $__env->yieldContent('content'); ?>
</div>

<?php echo $__env->make('user/section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
<?php echo $__env->make('user/events', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   


<?php echo $__env->make('user.donation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('user.gallery', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('user.clients', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


 
<?php echo $__env->make('user/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

