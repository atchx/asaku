@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar </span> Produk UMKM</h4>
<div class="card">
    <div class="card-body">
        <a href="/dashboard/product/create" type="button" class="btn btn-primary">
            <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Produk
        </a>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive text-nowrap">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi Produk</th>
                    <th>Nama UMKM</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $product->namaproduk }}</strong></td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td><strong>{{ $product->namaumkm }}</strong></td>
                    <td>{{ $product->alamat }}</td>
                    <td>{{ $product->nohp }}</td>
                    <td>
                        <!-- <button type="button" class="btn btn-sm btn-primary"><span class="tf-icons bx bx-detail"></span>&nbsp; Detail</button> -->
                        <a href="/product/{{ $product->id }}" class="btn btn-sm btn-primary"><span class="tf-icons bx bx-detail"></span>&nbsp; Detail</a>
                        <a href="/dashboard/product/{{ $product->id }}/edit" class="btn btn-sm btn-warning"><span class="tf-icons bx bx-edit"></span>&nbsp; Edit</a>
                        <form action="/dashboard/product/{{ $product->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Hapus data?')" class="btn btn-sm btn-danger">
                                <span class="tf-icons bx bx-trash"></span>&nbsp; Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection