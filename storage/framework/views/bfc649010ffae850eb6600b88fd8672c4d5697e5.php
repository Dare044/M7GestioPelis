<?php $__env->startSection('content'); ?>

<div>        
        <h2>Llistat de pelicules</h2>
    </div>
    <div>
	<a href="/formnewplanet">Afegir Pelicula</a>
    </div>

	<?php if(session('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

	<?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

	<table class="table">
        <thead>
            <tr>
			<td>ID</td>
		<td>Name</td>
		<td>Afegida</td>
		<td>Productora</td>
		<td>Genere</td>
		<td>Operacions</td>
            </tr>
        </thead>

	<?php $__currentLoopData = $planetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planeta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($planeta->id); ?></td>
		<td><?php echo e($planeta->name); ?></td>
		<td><?php echo e($planeta->created_at); ?></td>
		<td><?php echo e($planeta->productora); ?></td>
		<td><?php echo e($planeta->genre); ?></td>
		<td><a href="/deleteplanet/<?php echo e($planeta->id); ?>">Esborrar</a></td>
		<td><a href="/updateplanet/<?php echo e($planeta->id); ?>">Actualitzar</a></td>
		<td><a href="/showplanet/<?php echo e($planeta->id); ?>">Mostrar</a></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo e($planetes->links('pagination::bootstrap-4')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectes/Superherois/resources/views/planets/index.blade.php ENDPATH**/ ?>