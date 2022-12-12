<?php $__env->startSection('content'); ?>

	<div>        
        <h2>Llista d'actors</h2>
    </div>
    <div>
	<a href="/formnew">Nou actor</a>
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
			<td>Nom del actor</td>
			<td>Operacions</td>
            </tr>
        </thead>


	<?php $__currentLoopData = $poders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($poder->id); ?></td>
		<td><?php echo e($poder->name); ?></td>
		<td><a href="/delete/<?php echo e($poder->id); ?>">Esborrar</a></td>
		<td><a href="/update/<?php echo e($poder->id); ?>">Actualitzar</a></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo e($poders->links('pagination::bootstrap-4')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectes/Superherois/resources/views/superpowers/index.blade.php ENDPATH**/ ?>