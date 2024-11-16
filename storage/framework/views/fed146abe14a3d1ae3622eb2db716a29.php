

<?php $__env->startSection('content'); ?>
    <div class="containter p-4">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <p>Tambah Mahasiswa</p>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('mahasiswa.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mt-3">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control">
                                    <option value="">- pilih -</option>
                                    <option value="TI">TI</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">NPM</label>
                                <input type="text" name="npm" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Foto</label>
                                <input type="file" name="foto" class="form-control">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pratikumweb2\resources\views/admin/mahasiswa/create.blade.php ENDPATH**/ ?>