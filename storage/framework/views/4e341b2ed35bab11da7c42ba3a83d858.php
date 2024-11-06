
<?php $__env->startSection('title', 'Registro de egresados'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('diseño/inicio.css')); ?>>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
    <h1>¡Hola! Egresado</h1>
    <h2>Gracias por haber sido parte de nuestra casa de estudios</h2>
    <div class='caja1'>
        <form action="<?php echo e(url('/terceraPagina')); ?>" method="GET">
            <button type="submit" class="btn1">Datos personales</button>
        </form>
        <img src= <?php echo e(asset('imagenes/personal.png')); ?> alt="personal" class="img1">
    </div>
    <div class="caja2">    
        <form action="<?php echo e(url('/cuartaPagina')); ?>" method="GET">
            <button type="submit" class="btn2">Información academica</button>
        </form>
        <img src= <?php echo e(asset('imagenes/academico.png')); ?> alt="academico" class="img2">
    </div>
    <div class="caja3">
        <form action="<?php echo e(url('/quintaPagina')); ?>" method="GET">
            <button type="submit" class="btn3">Trayectoria profesional</button>
        </form>
        <img src= <?php echo e(asset('imagenes/avion.png')); ?> alt="avion" class="img3">
    </div>
    <div class="caja4">
        <form action="<?php echo e(url('/sextaPagina')); ?>" method="GET">
            <button type="submit" class="btn4">Educacion adicional (Opcional) </button>
        </form>
        <img src= <?php echo e(asset('imagenes/sombrero.png')); ?> alt="sombrero" class="img4">
    </div>
    <div class="caja5">
        <form action="<?php echo e(url('/septimaPagina')); ?>" method="GET">
            <button type="submit" class="btn5">Diplomado</button>
        </form>
        <img src= <?php echo e(asset('imagenes/documento.png')); ?> alt="documento" class="img5">
    </div>
    <div class="caja6">
        <form action="<?php echo e(url('/octavaPagina')); ?>" method="GET">
            <button type="submit" class="btn6">Comentarios (Opcional) </button>
        </form>
        <img src= <?php echo e(asset('imagenes/idea.png')); ?> alt="idea" class="img6">
    </div>
    <form action="<?php echo e(url('/novenaPagina')); ?>" method="GET">
        <button type="submit" class="btn8">Salir</button>
    </form>
    <div>
        <form>

        </form>    
    
    </div>    
    <img src= <?php echo e(asset('imagenes/lobo.png')); ?> alt="lobo" class="img7">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Egresados\resources\views/login/inicio.blade.php ENDPATH**/ ?>