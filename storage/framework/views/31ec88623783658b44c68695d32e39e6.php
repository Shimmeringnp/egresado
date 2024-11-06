
<?php $__env->startSection('title', 'Información academica'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('diseño/academica.css')); ?>>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
<div class="burbuja">
    <h1>Información academica </h1>
    <form action="<?php echo e(url('/terceraPagina')); ?>" method="GET">
        <input type="text" placeholder="Intituto/Escuela">
        <br>
        <input type="text" placeholder="Año de graduación">
        <br>
        <input type="text" placeholder="Carrera o Especialidad">
        <br>
        <input type="text" placeholder="Promedio final">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= <?php echo e(asset('imagenes/a.png')); ?> alt="a">
</div>    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Egresados\resources\views/login/academica.blade.php ENDPATH**/ ?>