<?php $__env->startSection('content'); ?>

Fitxa de la pelicula
<br><br>
<b>Name:</b> <?php echo e($planeta->name); ?></b><br><br>
<b>Repart:</b><br>

<?php $__currentLoopData = $planeta->superheroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $super): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($super->realname); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectes/Superherois/resources/views/planets/show.blade.php ENDPATH**/ ?>