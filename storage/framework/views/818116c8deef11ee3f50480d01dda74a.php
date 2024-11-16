
<?php $__env->startSection('content'); ?>
<div class="container"></div>
    <div class="card"></div>
    <div class="cord-body"></div>
    <h1>Heloo, Selamat datang <?php echo e(Auth::user()->nama); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pratikumweb2\resources\views/admin/index.blade.php ENDPATH**/ ?>