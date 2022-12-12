<?php $__env->startSection('content'); ?>

Actualitzar Director
<br><br>
<form method="POST" action="/updatesuperhero/<?php echo e($superheroi->id); ?>">
	
	<?php echo csrf_field(); ?>
	Nom del Director <input type="text" name="realname" value="<?php echo e(old('realname',$superheroi->realname)); ?>"><br><br>
	Nacionalitat <select name="gender" id="gender">
		<option value="male" <?php if( old('gender') == "male"): ?> selected <?php endif; ?> >Male</option>
		<option value="female" <?php if( old('gender') == "female"): ?> selected <?php endif; ?> >Female</option>
	</select><br><br>

	
		
		<?php echo e(old('planet_id')); ?>

  	


	Pelicula <select name="planet_id" id="planet_id">
  		<?php $__currentLoopData = $planetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planeta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<option value="<?php echo e($planeta->id); ?>" <?php if(old('planet_id') == $planeta->id): ?> selected <?php endif; ?> ><?php echo e($planeta->name); ?></option>
  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select><br><br>	
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
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectes/Superherois/resources/views/superheroes/update.blade.php ENDPATH**/ ?>