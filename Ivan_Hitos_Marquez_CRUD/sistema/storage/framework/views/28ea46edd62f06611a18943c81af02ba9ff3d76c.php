<h1><?php echo e($modo); ?> heroes</h1>
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
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset( $trabajador->Nombre) ?$trabajador->Nombre:old('Nombre')); ?>" id="Nombre">

<label for="IdentidadSecreta">Identidad Secreta</label>
<input type="text" class="form-control" name="IdentidadSecreta" value="<?php echo e(isset( $trabajador->IdentidadSecreta) ?$trabajador->IdentidadSecreta:old('IdentidadSecreta')); ?>" id="IdentidadSecreta">

<label for="Hobby">Hobby</label>
<input type="text" class="form-control" name="Hobby" value="<?php echo e(isset( $trabajador->Hobby) ?$trabajador->Hobby:old('Hobby')); ?>" id="Hobby">

<label for="Alineacion">Alineacion</label>
<input type="text" class="form-control" name="Alineacion" value="<?php echo e(isset( $trabajador->Alineacion)?$trabajador->Alineacion:old('Alineacion')); ?>" id="Alineacion">

<label for="Medio">Medio</label>
<input type="text" class="form-control" name="Medio" value="<?php echo e(isset( $trabajador->Medio)?$trabajador->Medio:old('Medio')); ?>" id="Medio">

<label for="NumeroDeMuertesAccidentales">Numero De Muertes Accidentales</label>
<input type="number" class="form-control" name="NumeroDeMuertesAccidentales" value="<?php echo e(isset( $trabajador->NumeroDeMuertesAccidentales)?$trabajador->NumeroDeMuertesAccidentales:old('NumeroDeMuertesAccidentales')); ?>" id="NumeroDeMuertesAccidentales">

<label for="Foto">Foto</label>
<input type="file" class="form-control" name="Foto" value="" id="Foto">

<?php if(isset($trabajador->Foto)): ?>
<img class="img-thumbnail img-fluid" style="width: 500px;" src="<?php echo e(asset('storage').'/'.$trabajador->Foto); ?>" att="">
<?php endif; ?>
<br>
<input class="btn btn-success" type="submit" class="form-control" value="<?php echo e($modo); ?> datos">
<a class="btn btn-primary" href="<?php echo e(url('trabajador/')); ?>">Regresar</a>

</div><?php /**PATH /var/www/resources/views/heroe/form.blade.php ENDPATH**/ ?>