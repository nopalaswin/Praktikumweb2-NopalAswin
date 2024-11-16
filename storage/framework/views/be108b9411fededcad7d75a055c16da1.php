<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body onload="window.print()">
    <h2>Data Mahasiswa</h2>
    <br>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Jurusan</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->jurusan); ?></td>
            <td><?php echo e($data->npm); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e(Carbon\carbon::parse($data->tanggal_lahir)->format('d-m-Y')); ?></td>
            <td>
                <img src="<?php echo e(asset('storage/mahasiswa/'.$data->foto)); ?>" alt="" width="60">
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\laragon\www\pratikumweb2\resources\views/admin/mahasiswa/print.blade.php ENDPATH**/ ?>