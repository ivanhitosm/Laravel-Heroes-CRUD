
<?php $__env->startSection('content'); ?>
<div class="container">
<br>
<form action="<?php echo e(url ('/heroe')); ?>" method="post" enctype="multipart/form-data" >
<?php echo csrf_field(); ?>
<?php echo $__env->make('heroe.form',['modo'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/heroe/create.blade.php ENDPATH**/ ?>