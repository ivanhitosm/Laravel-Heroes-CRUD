
<?php $__env->startSection('content'); ?>
<div class="container">

    <?php if(Session::has('mensaje')): ?>
    <div class="alert alert-success alert-dismisible" role="alert">
        <?php echo e(Session::get('mensaje')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
    </div>
    <?php endif; ?>


    <a href="<?php echo e(url('empleado/create')); ?>" class="btn btn-success">Registrar nuevo empleado</a>
    <br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>1ºApellido</th>
                <th>2ºApellido</th>
                <th>correo</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($empleado->id); ?></td>
                <td>
                    <img class="img-thumbnail img-fluid" style="width: 200px;" src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" alt="">

                </td>


                <td><?php echo e($empleado->Nombre); ?></td>
                <td><?php echo e($empleado->Apellido1); ?></td>
                <td><?php echo e($empleado->Apellido2); ?></td>
                <td><?php echo e($empleado->Correo); ?></td>
                <td>
                    <a href="<?php echo e(url('/empleado/'.$empleado->id.'/edit')); ?>" class="btn btn-warning btn-lg btn-block">
                        Editar
                    </a>


                    <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" class="d-inline" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <input class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm('¿Queres borrarr?')" value="Borrar">
                    </form>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $empleados->links(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/empleado/index.blade.php ENDPATH**/ ?>