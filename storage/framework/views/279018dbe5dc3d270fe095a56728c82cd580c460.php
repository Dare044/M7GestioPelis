<?php $__env->startSection('content'); ?>

Afegir nova pelicula
<br><br>
<form method="POST" action="/saveplanet">
	
	<?php echo csrf_field(); ?>
	Nom <input type="text" name="name" value="<?php echo e(old('name')); ?>"> <br><br>
	Productora <input type="text" name="productora" value="<?php echo e(old('productora ')); ?>"><br><br>
	Genere<input type="text" name="genere" value="<?php echo e(old('genre ')); ?>"><br><br>
	<input type="submit" name="Desar">

</form>

<?php if($errors->any()): ?>
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectes/Superherois/resources/views/planets/new.blade.php ENDPATH**/ ?>