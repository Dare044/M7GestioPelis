<?php $__env->startSection('content'); ?>

<?php
    if (isset($_REQUEST['gender'])) {
        $selected_choice = $_REQUEST['gender'];
    }
    else {
        $selected_choice = "none";
    }
?>

Nou Director
<br><br>
<form method="POST" action="/savesuperhero">
	
	<?php echo csrf_field(); ?>
	Nom del Director<input type="text" name="realname" value="<?php echo e(old('realname')); ?>"><br><br>
	Nacionalitat <select name="gender" id="gender">
		<option value="netherlands" <?php if( old('gender') == "netherlands"): ?> selected <?php endif; ?> >netherlands</option>
		<option value="USA" <?php if( old('gender') == "USA"): ?> selected <?php endif; ?> >USA</option>
		<option value="Espanya" <?php if( old('gender') == "Espanya"): ?> selected <?php endif; ?> >Espanya</option>
		<option value="Francia" <?php if( old('gender') == "Francia"): ?> selected <?php endif; ?> >Francia</option>
	</select><br><br>
	Pelicules <select name="planet_id" id="planet_id">
  		<?php $__currentLoopData = $planetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planeta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e($planeta->id); ?>" ><?php echo e($planeta->name); ?></option>
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
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectes/Superherois/resources/views/superheroes/new.blade.php ENDPATH**/ ?>