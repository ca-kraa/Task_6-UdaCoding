<?php $__env->startSection('judul','Dasboard'); ?>
<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('atribut.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
    <?php echo $__env->make('atribut.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo e($totalBarang); ?></h3>
                            <p>Total Barang</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo e($transaksiKeluar); ?></h3>
                            <p>Transaksi Keluar</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo e($transaksiMasuk); ?></h3>
                            <p>Transaksi Masuk</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sign-in-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php echo $__env->make('atribut.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('atribut.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\Codingan\Task 6\gudanggg\resources\views/Dashboard.blade.php ENDPATH**/ ?>