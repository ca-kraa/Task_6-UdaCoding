@extends('atribut.header')
@section('judul','Arsip Transaksi')
@include('atribut.header')

@include('atribut.navbar')

<div class="wrapper">
    @include('atribut.sidebar')

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
                            @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->kode_barang }}</td>
                                    <td>{{ $transaksi->nama_barang }}</td>
                                    <td>{{ $transaksi->tanggal }}</td>
                                    <td>{{ $transaksi->jenis_barang }}</td>
                                    <td>{{ $transaksi->jumlah }}</td>
                                    <td>{{ $transaksi->status }}</td>
                                    <td>{{ $transaksi->deleted_at }}</td>
                                    <td>
                                        <a href="{{ route('transaksi.restore', $transaksi->id) }}" class="btn btn-success">
                                            <i class="fas fa-undo"></i>
                                        </a>
                                        <form action="{{ route('transaksi.forceDelete', $transaksi->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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

@include('atribut.footer')
