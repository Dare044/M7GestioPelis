<?php $__env->startSection('content'); ?>
<div>        
        <h2>Llista de directors</h2>
    </div>
    <div>
	<a href="/formnewsuperhero">Nou director</a>
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
			<td>Nom del director</td>
			<td>nacionalitat</td>
			<td>Pelicula</td>
			<td>Operacions</td>
            </tr>
        </thead>

	<?php $__currentLoopData = $superherois; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $superheroi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($superheroi->id); ?></td>
		<td><?php echo e($superheroi->realname); ?></td>
		<td><?php echo e($superheroi->nationality); ?></td>
		<td><?php echo e($superheroi->planet->name); ?></td>
		
		<?php if(Auth::user()->is_admin): ?> 
		<td><a href="/deletesuperhero/<?php echo e($superheroi->id); ?>">Esborrar</a></td>
		<td><a href="/updatesuperhero/<?php echo e($superheroi->id); ?>">Actualitzar</a></td>
		<?php endif; ?>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo e($superherois->links('pagination::bootstrap-4')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectes/Superherois/resources/views/superheroes/index.blade.php ENDPATH**/ ?>