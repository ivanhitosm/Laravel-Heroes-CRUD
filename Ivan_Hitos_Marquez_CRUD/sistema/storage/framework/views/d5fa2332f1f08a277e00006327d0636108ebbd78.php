<h1><?php echo e($modo); ?> Empleados</h1>
<?php if(count($errors)>0): ?>

    <div class="alert alert-danger" role="alert">
     <ul>
         <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li><?php echo e($error); ?></li> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
    </div>

    
<?php endif; ?>


<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset( $empleado->Nombre) ?$empleado->Nombre:old('Nombre')); ?>" id="Nombre">
<label for="1ºApellido">Apellido1</label>
<input type="text" class="form-control" name="Apellido1" value="<?php echo e(isset( $empleado->Apellido1) ?$empleado->Apellido1:old('Apellido1')); ?>" id="Apellido1">
<label for="2ºApellido">Apellido2</label>
<input type="text" class="form-control" name="Apellido2" value="<?php echo e(isset( $empleado->Apellido2) ?$empleado->Apellido2:old('Apellido2')); ?>" id="Apellido2">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" value="<?php echo e(isset( $empleado->Correo)?$empleado->Correo:old('Correo')); ?>" id="Correo">
<label for="Foto">Foto</label>
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<?php if(isset($empleado->Foto)): ?>
<img class="img-thumbnail img-fluid" style="width: 500px;" src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" att="">
<?php endif; ?>
<br>
<input class="btn btn-success" type="submit" class="form-control" value="<?php echo e($modo); ?> datos">
<a class="btn btn-primary" href="<?php echo e(url('empleado/')); ?>">Regresar</a>

</div><?php /**PATH /var/www/resources/views/empleado/form.blade.php ENDPATH**/ ?>