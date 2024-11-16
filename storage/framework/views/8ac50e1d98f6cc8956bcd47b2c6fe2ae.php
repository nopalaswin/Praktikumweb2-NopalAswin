
<?php $__env->startSection('content'); ?>
<div class="container p-4">
    <div class="card">
        <div class="card-header">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md">
                <form action="<?php echo e(route('mahasiswa.index')); ?>">
                <input type="text" name="keyword" class="form-control"
                placeholder="Cari Berdasarkan nama dan jurusan....." value="<?php echo e(old('keyword')); ?>" />
               
                    </form>
                </div>
            <div class="col-mid">
                <div class=fload-mid>
                    <a href="<?php echo e(route('mahasiswa.print')); ?>" class="btn btn-success" target="__blank">Cetak data</a>
                    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">Tambah data</a>
                </div>
            </div>
                </div>
            </div>
            
                            
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Jurusan</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
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
            <td>
                <form action="<?php echo e(route('mahasiswa.delete',$data->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                <a href="<?php echo e(route('mahasiswa.edit',$data->id)); ?>" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div>
    </div>
</div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pratikumweb2\resources\views/admin/mahasiswa/index.blade.php ENDPATH**/ ?>