@extends('atribut.header')
@section('judul','Data Barang')
@include('atribut.header')

@include('atribut.navbar')

<div class="wrapper">
    @include('atribut.sidebar')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Barang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Barang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Barang</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahDataModal">
                        <i class="fas fa-plus-circle"></i> Tambah Data Barang
                    </a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $b)
                                <tr>
                                    <td>{{ $b->kode_barang }}</td>
                                    <td>{{ $b->nama_barang }}</td>
                                    <td>{{ $b->jenis_barang }}</td>
                                    <td>{{ $b->stok }}</td>
                                    <td>{{ $b->harga }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editDataModal{{ $b->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $b->id }}">
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
                                <th>Jenis Barang</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
</div>

<!-- Tambah Data Modal -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <select name="jenis_barang" class="form-control" required>
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
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach ($barang as $b)
    <div class="modal fade" id="editDataModal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel{{ $b->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataModalLabel{{ $b->id }}">Edit Data Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('barang.update', ['barang' => $b->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" name="kode_barang" class="form-control" value="{{ $b->kode_barang }}" required disabled >
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" value="{{ $b->nama_barang }}" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_barang">Jenis Barang</label>
                            <select name="jenis_barang" class="form-control" required>
                                <option disabled>Pilih Jenis Barang</option>
                                <option value="Elektronik" {{ $b->jenis_barang == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                                <option value="Pakaian" {{ $b->jenis_barang == 'Pakaian' ? 'selected' : '' }}>Pakaian</option>
                                <option value="Makanan" {{ $b->jenis_barang == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                                <option value="Minuman" {{ $b->jenis_barang == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                                <option value="Buku" {{ $b->jenis_barang == 'Buku' ? 'selected' : '' }}>Buku</option>
                                <option value="Alat Tulis" {{ $b->jenis_barang == 'Alat Tulis' ? 'selected' : '' }}>Alat Tulis</option>
                                <option value="Olahraga" {{ $b->jenis_barang == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                                <option value="Perhiasan" {{ $b->jenis_barang == 'Perhiasan' ? 'selected' : '' }}>Perhiasan</option>
                                <option value="Furniture" {{ $b->jenis_barang == 'Furniture' ? 'selected' : '' }}>Furniture</option>
                                <option value="Kesehatan" {{ $b->jenis_barang == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" class="form-control" value="{{ $b->stok }}" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" value="{{ $b->harga }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($barang as $b)

<div class="modal fade" id="deleteModal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $b->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $b->id }}">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus barang ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form action="{{ route('barang.destroy', $b->id) }}" method="POST">
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
