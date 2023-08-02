
<?php $__env->startSection('judul','Arsip Transaksi'); ?>
<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('atribut.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
    <?php echo $__env->make('atribut.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Arsip Transaksi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="/transaksi">Transaksi</a></li>
                            <li class="breadcrumb-item active">Arsip Transaksi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Arsip Transaksi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Tanggal</th>
                                <th>Jenis Barang</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Deleted At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($transaksi->kode_barang); ?></td>
                                    <td><?php echo e($transaksi->nama_barang); ?></td>
                                    <td><?php echo e($transaksi->tanggal); ?></td>
                                    <td><?php echo e($transaksi->jenis_barang); ?></td>
                                    <td><?php echo e($transaksi->jumlah); ?></td>
                                    <td><?php echo e($transaksi->status); ?></td>
                                    <td><?php echo e($transaksi->deleted_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('transaksi.restore', $transaksi->id)); ?>" class="btn btn-success">
                                            <i class="fas fa-undo"></i>
                                        </a>
                                        <form action="<?php echo e(route('transaksi.forceDelete', $transaksi->id)); ?>" method="POST" style="display: inline-block;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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
                                <th>Deleted At</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
</div>

<?php echo $__env->make('atribut.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\Codingan\Task 6\gudanggg\resources\views/transaksi/archive.blade.php ENDPATH**/ ?>