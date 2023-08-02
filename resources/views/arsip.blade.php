@extends('atribut.header')
@section('judul','Arsip')
@include('atribut.header')

@include('atribut.navbar')

<div class="wrapper">
    @include('atribut.sidebar')

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
                            <a href="{{ route('barang.archive') }}" class="text-white">
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
                            <a href="{{ route('transaksi.archive') }}" class="text-white">
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

@include('atribut.footer')
