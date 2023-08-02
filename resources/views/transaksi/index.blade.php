@extends('atribut.header')
@section('judul','Transaksi')
@include('atribut.header')
@include('atribut.navbar')
@include('atribut.sidebar')

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
                        @foreach ($transaksi as $t)
                            <tr>
                                <td>{{ $t->kode_barang }}</td>
                                <td>{{ $t->nama_barang }}</td>
                                <td>{{ $t->tanggal }}</td>
                                <td>{{ $t->jenis_barang }}</td>
                                <td>{{ $t->jumlah }}</td>
                                <td>{{ $t->status }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editDataModal{{ $t->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $t->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
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
                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <select class="form-control" name="kode_barang" required>
                                @if($barang->count() > 0)
                                    <option disabled selected>Pilih Kode Barang</option>
                                    @foreach($barang as $b)
                                        <option value="{{ $b->kode_barang }}">{{ $b->kode_barang }}</option>
                                    @endforeach
                                @else
                                    <option disabled selected>Inputkan Dulu Data Barang</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <select class="form-control" name="nama_barang" required>
                                @if($barang->count() > 0)
                                    <option disabled selected>Pilih Nama Barang</option>
                                    @foreach($barang as $b)
                                        <option value="{{ $b->nama_barang }}">{{ $b->nama_barang }}</option>
                                    @endforeach
                                @else
                                    <option disabled selected>Inputkan Dulu Data Barang</option>
                                @endif
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



    @foreach ($transaksi as $t)
    <div class="modal fade" id="editDataModal{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('transaksi.update', $t->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" value="{{ $t->kode_barang }}" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $t->nama_barang }}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{ $t->tanggal }}" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <select class="form-control" name="jenis_barang" required>
                                <option disabled selected>Pilih Jenis Barang</option>
                                <option value="Elektronik" {{ $t->jenis_barang == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                                <option value="Pakaian" {{ $t->jenis_barang == 'Pakaian' ? 'selected' : '' }}>Pakaian</option>
                                <option value="Makanan" {{ $t->jenis_barang == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                                <option value="Minuman" {{ $t->jenis_barang == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                                <option value="Buku" {{ $t->jenis_barang == 'Buku' ? 'selected' : '' }}>Buku</option>
                                <option value="Alat Tulis" {{ $t->jenis_barang == 'Alat Tulis' ? 'selected' : '' }}>Alat Tulis</option>
                                <option value="Olahraga" {{ $t->jenis_barang == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                                <option value="Perhiasan" {{ $t->jenis_barang == 'Perhiasan' ? 'selected' : '' }}>Perhiasan</option>
                                <option value="Furniture" {{ $t->jenis_barang == 'Furniture' ? 'selected' : '' }}>Furniture</option>
                                <option value="Kesehatan" {{ $t->jenis_barang == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{ $t->jumlah }}" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select disabled selected class="form-control" name="status" required >
                                <option disabled selected>Pilih Jenis Status</option>
                                <option value="masuk" {{ $t->status == 'masuk' ? 'selected' : '' }}>Masuk</option>
                                <option value="keluar" {{ $t->status == 'keluar' ? 'selected' : '' }}>Keluar</option>
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
    @endforeach

    @foreach ($transaksi as $t)
<div class="modal fade" id="deleteModal{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $t->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $t->id }}">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus transaksi ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form action="{{ route('transaksi.destroy', $t->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach



    @include('atribut.footer')
