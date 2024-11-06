
<?php $__env->startSection('title', 'Egresados'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('diseño/diseniol.css')); ?>>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
    <h3>¡Egresados!</h3>
    <h4>Registren su recorrido y compartan su legado.</h4>
    <div class="caja">
        <h1>Bienvenidos! </h1>
        <h2>Ingresa tus datos</h2>

        <form action="<?php echo e(url('/segundaPagina')); ?>" method="GET">
            <input type="text" placeholder="Matricula">
            <br>
            <br>
            <input type="password" placeholder="Contraseña">
            <br>
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
    <img src= <?php echo e(asset('imagenes/mesa.jpg')); ?> alt="mesa">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Egresados\resources\views/login/index.blade.php ENDPATH**/ ?>