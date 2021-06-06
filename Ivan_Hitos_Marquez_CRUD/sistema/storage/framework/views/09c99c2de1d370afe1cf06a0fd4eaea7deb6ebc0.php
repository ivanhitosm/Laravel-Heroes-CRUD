
<?php $__env->startSection('content'); ?>
<div class="container">

    <?php if(Session::has('mensaje')): ?>
    <div class="alert alert-success alert-dismisible" role="alert">
        <?php echo e(Session::get('mensaje')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
    </div>
    <?php endif; ?>


    <a href="<?php echo e(url('heroes/create')); ?>" class="btn btn-success">Registrar nuevo Heroe</a>
    <br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>AreaDeEffecto</th>
                <th>Consecuencias</th>
                <th>Alineacion</th>
                <th>Medio</th>
                <th>NumeroDeMuertesAccidentales</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $Heroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Heroe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($Heroe->id); ?></td>
                <td>
                    <img class="img-thumbnail img-fluid" style="width: 200px;" src="<?php echo e(asset('storage').'/'.$Heroe->Foto); ?>" alt="">

                </td>


                <td><?php echo e($Heroe->Nombre); ?></td>
                <td><?php echo e($Heroe->AreaDeEffecto); ?></td>
                <td><?php echo e($Heroe->Consecuencias); ?></td>
                <td><?php echo e($Heroe->Alineacion); ?></td>
                <td><?php echo e($Heroe->Medio); ?></td>
                <td><?php echo e($Heroe->NumeroDeMuertesAccidentales); ?></td>
               
                <td>
                    <a href="<?php echo e(url('heroes/'.$Heroe->id.'/edit')); ?>" class="btn btn-warning btn-lg btn-block">
                        Editar
                    </a>
                    <br>
                    <a href="<?php echo e($url = route('super_poderes',$Heroe->id)); ?>" class="btn btn-success btn-lg btn-block">
                        Superpoderes
                    </a>
                    <br>

                    <form action="<?php echo e(url('heroes/'.$Heroe->id)); ?>" class="d-inline" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <input class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm('¿Queres borrar?')" value="Borrar">
                    </form>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/heroes/index.blade.php ENDPATH**/ ?>