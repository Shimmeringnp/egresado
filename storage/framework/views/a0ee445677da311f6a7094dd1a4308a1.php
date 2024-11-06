
<?php $__env->startSection('title', 'Educacion adicional'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('diseño/adicional.css')); ?>>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
<div class="burbuja">
    <h1>Educación adicional</h1>
    <form action="<?php echo e(url('/terceraPagina')); ?>" method="GET">
        <input type="text" placeholder="Estudios o posgrados">
        <br>
        <input type="text" placeholder="Cursos o certificaciones">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= <?php echo e(asset('imagenes/e.png')); ?> alt="e">
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Egresados\resources\views/login/adicional.blade.php ENDPATH**/ ?>