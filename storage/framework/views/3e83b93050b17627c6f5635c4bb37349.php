
<?php $__env->startSection('title', 'Datos personales'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('diseño/personales.css')); ?>>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
<div class="burbuja">
    <h1>Datos personales </h1>
    <form action="<?php echo e(url('/terceraPagina')); ?>" method="GET">
        <input type="text" placeholder="Nombre completo">
        <br>
        <input type="text" placeholder="Genero">
        <br>
        <input type="text" placeholder="Año de graduación">
        <br>
        <input type="text" placeholder="Ciudad">
        <br>
        <input type="text" placeholder="Correo electronico">
        <br>
        <input type="text" placeholder="Número de telefono">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= <?php echo e(asset('imagenes/P.png')); ?> alt="P">
</div>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Egresados\resources\views/login/personales.blade.php ENDPATH**/ ?>