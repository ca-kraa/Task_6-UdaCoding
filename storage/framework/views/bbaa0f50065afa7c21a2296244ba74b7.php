
<?php $__env->startSection('judul','Arsip'); ?>
<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('atribut.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
    <?php echo $__env->make('atribut.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Arsip</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Arsip</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-6">
                    <div class="card bg-info text-center p-5">
                        <div class="card-header">
                            <h3 class="card-title">Arsip Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="<?php echo e(route('barang.archive')); ?>" class="text-white">
                                <i class="fas fa-box fa-5x"></i>
                            </a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="col-6">
                    <div class="card bg-warning text-center p-5">
                        <div class="card-header">
                            <h3 class="card-title">Arsip Transaksi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="<?php echo e(route('transaksi.archive')); ?>" class="text-white">
                                <i class="fas fa-exchange-alt fa-5x"></i>
                            </a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php echo $__env->make('atribut.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\Codingan\Task 6\gudanggg\resources\views/arsip.blade.php ENDPATH**/ ?>