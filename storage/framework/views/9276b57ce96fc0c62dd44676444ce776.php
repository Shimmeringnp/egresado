
<?php $__env->startSection('title', 'Trayectoria profesional'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('diseño/trayectoria.css')); ?>>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
<div class="burbuja">
    <h1>Trayectoria profesional </h1>
    <form action="<?php echo e(url('/terceraPagina')); ?>" method="GET">
        <input type="text" placeholder="Puesto o cargo actual">
        <br>
        <input type="text" placeholder="Empresa actual">
        <br>
        <input type="text" placeholder="Fecha de inicio de trabajo">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= <?php echo e(asset('imagenes/t.png')); ?> alt="t">
</div>    
<?php $__env->stopSection(); ?>





<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Egresados\resources\views/login/trayectoria.blade.php ENDPATH**/ ?>