
<?php $__env->startSection('judul','Transaksi'); ?>
<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('atribut.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('atribut.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahDataModal">
                    <i class="fas fa-plus-circle"></i> Tambah Data Transaksi
                </a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Jenis Barang</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($t->kode_barang); ?></td>
                                <td><?php echo e($t->nama_barang); ?></td>
                                <td><?php echo e($t->tanggal); ?></td>
                                <td><?php echo e($t->jenis_barang); ?></td>
                                <td><?php echo e($t->jumlah); ?></td>
                                <td><?php echo e($t->status); ?></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editDataModal<?php echo e($t->id); ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?php echo e($t->id); ?>">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Jenis Barang</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

    <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('transaksi.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <select class="form-control" name="kode_barang" required>
                                <?php if($barang->count() > 0): ?>
                                    <option disabled selected>Pilih Kode Barang</option>
                                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($b->kode_barang); ?>"><?php echo e($b->kode_barang); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <option disabled selected>Inputkan Dulu Data Barang</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <select class="form-control" name="nama_barang" required>
                                <?php if($barang->count() > 0): ?>
                                    <option disabled selected>Pilih Nama Barang</option>
                                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($b->nama_barang); ?>"><?php echo e($b->nama_barang); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <option disabled selected>Inputkan Dulu Data Barang</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <select class="form-control" name="jenis_barang" required>
                                <option disabled selected>Pilih Jenis Barang</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Pakaian">Pakaian</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Buku">Buku</option>
                                <option value="Alat Tulis">Alat Tulis</option>
                                <option value="Olahraga">Olahraga</option>
                                <option value="Perhiasan">Perhiasan</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Kesehatan">Kesehatan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option disabled selected>Pilih Jenis Status</option>
                                <option value="masuk">Masuk</option>
                                <option value="keluar">Keluar</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="editDataModal<?php echo e($t->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('transaksi.update', $t->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" value="<?php echo e($t->kode_barang); ?>" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="<?php echo e($t->nama_barang); ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?php echo e($t->tanggal); ?>" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <select class="form-control" name="jenis_barang" required>
                                <option disabled selected>Pilih Jenis Barang</option>
                                <option value="Elektronik" <?php echo e($t->jenis_barang == 'Elektronik' ? 'selected' : ''); ?>>Elektronik</option>
                                <option value="Pakaian" <?php echo e($t->jenis_barang == 'Pakaian' ? 'selected' : ''); ?>>Pakaian</option>
                                <option value="Makanan" <?php echo e($t->jenis_barang == 'Makanan' ? 'selected' : ''); ?>>Makanan</option>
                                <option value="Minuman" <?php echo e($t->jenis_barang == 'Minuman' ? 'selected' : ''); ?>>Minuman</option>
                                <option value="Buku" <?php echo e($t->jenis_barang == 'Buku' ? 'selected' : ''); ?>>Buku</option>
                                <option value="Alat Tulis" <?php echo e($t->jenis_barang == 'Alat Tulis' ? 'selected' : ''); ?>>Alat Tulis</option>
                                <option value="Olahraga" <?php echo e($t->jenis_barang == 'Olahraga' ? 'selected' : ''); ?>>Olahraga</option>
                                <option value="Perhiasan" <?php echo e($t->jenis_barang == 'Perhiasan' ? 'selected' : ''); ?>>Perhiasan</option>
                                <option value="Furniture" <?php echo e($t->jenis_barang == 'Furniture' ? 'selected' : ''); ?>>Furniture</option>
                                <option value="Kesehatan" <?php echo e($t->jenis_barang == 'Kesehatan' ? 'selected' : ''); ?>>Kesehatan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="<?php echo e($t->jumlah); ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select disabled selected class="form-control" name="status" required >
                                <option disabled selected>Pilih Jenis Status</option>
                                <option value="masuk" <?php echo e($t->status == 'masuk' ? 'selected' : ''); ?>>Masuk</option>
                                <option value="keluar" <?php echo e($t->status == 'keluar' ? 'selected' : ''); ?>>Keluar</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="deleteModal<?php echo e($t->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo e($t->id); ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel<?php echo e($t->id); ?>">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus transaksi ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form action="<?php echo e(route('transaksi.destroy', $t->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    <?php echo $__env->make('atribut.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\Codingan\Task 6\gudanggg\resources\views/transaksi/index.blade.php ENDPATH**/ ?>