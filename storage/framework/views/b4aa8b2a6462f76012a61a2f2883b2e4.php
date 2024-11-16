

<?php $__env->startSection('content'); ?>
    <div class="containter p-4">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <p>Edit Mahasiswa</p>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('mahasiswa.update',$mahasiswa->id)); ?>" enctype="multipart/form-data" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field( 'put'); ?>
                            <div class="form-group mt-3">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control">
                                    <option value="">- pilih -</option>
                                    <option value="TI" <?php echo e($mahasiswa->jurusan == 'TI' ? 'selected' : ''); ?>>TI</option>
                                    <option value="SI" <?php echo e($mahasiswa->jurusan == 'SI' ? 'selected' : ''); ?>>SI</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">NPM</label>
                                <input type="text" name="npm" class="form-control" value="<?php echo e($mahasiswa->npm); ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo e($mahasiswa->nama); ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo e($mahasiswa->tanggal_lahir); ?>">
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <div class="text-center">
                                        <label for="">Gambar sebelumnya</label>
                                        <img src="<?php echo e(asset('storage/mahasiswa/'.$mahasiswa->foto)); ?>" alt="" width="80%">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group mt-3">
                                        <label for="">foto</label>
                                        <input type="file" name="foto" class="form-control">
                                        <small class="text-danger">isi juka ingin merubah foto</small>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="float-end mt-3">
                                <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pratikumweb2\resources\views/admin/mahasiswa/edit.blade.php ENDPATH**/ ?>