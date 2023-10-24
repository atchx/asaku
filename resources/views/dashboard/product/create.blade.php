@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah </span> Produk UMKM</h4>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="/dashboard/product" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input name="namaproduk" type="text" class="form-control" placeholder="Masukan nama produk" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga Produk</label>
                    <input name="harga" type="text" class="form-control" placeholder="Masukan harga produk" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-select">
                        <option value="filter-kuliner">Kuliner</option>
                        <option value="filter-busana">Busana</option>
                        <option value="filter-kerajinan">Kerajinan Tangan</option>
                        <option value="filter-lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Produk</label>
                    <textarea name="deskripsi" class="form-control" rows="2" placeholder="Masukan deskripsi produk" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama UMKM</label>
                    <input name="namaumkm" type="text" class="form-control" placeholder="Masukan nama UMKM" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat UMKM</label>
                    <input name="alamat" type="text" class="form-control" placeholder="Masukan alamat UMKM" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor HP UMKM</label>
                    <input name="nohp" type="text" class="form-control" placeholder="Masukan Nomor HP UMKM" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input name="gambar" class="form-control" type="file" required />
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/dashboard/product/" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection