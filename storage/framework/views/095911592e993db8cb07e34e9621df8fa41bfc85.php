<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Peliculas</title>
  <link rel="shortcut icon" href="peli.png">
  <!-- Scripts -->
  <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
  
  <!-- CSS only -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<div style="padding: 10px; background-color: aliceblue;">
<ul class="navbar-nav mr-auto">
 

  <li class="nav-item"> 
    <a class="nav-link" href="<?php echo e(url('/')); ?>">Catalogo de Peliculas</a>
  </li >
 
 

  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/planets')); ?>">Peliculas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/powers')); ?>">Actores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/superheroes')); ?>">Directores</a>
</li>



</ul>      
  </div>

  <div class="container"> 
    <?php echo $__env->yieldContent('content'); ?>
  </div>

</body>
</html>
<?php /**PATH /home/usuari/projectes/Superherois/resources/views/plantilla.blade.php ENDPATH**/ ?>