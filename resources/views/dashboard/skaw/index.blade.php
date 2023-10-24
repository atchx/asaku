@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar </span> Surat Keterangan Ahli Waris</h4>
<div class="card">
    <!-- <div class="card-body">
        <a href="/dashboard/product/create" type="button" class="btn btn-primary">
            <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Produk
        </a>
    </div> -->
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
                    <th>Nomor Registrasi</th>
                    <th>Nama</th>
                    <th>Detail Permohonan</th>
                    <th>Catatan</th>
                    <th>Status</th>
                    <th>Hasil</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($skaws as $skaw)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $skaw->noreg }}</strong></td>
                    <td><strong>{{ $skaw->nama }}</strong></td>
                    <td><a href="/dashboard/skaw/{{ $skaw->id }}" class="btn btn-sm btn-primary"><span class="tf-icons bx bx-detail"></span>&nbsp; Lihat</a></td>
                    <td>{{ $skaw->catatan }}</td>
                    <td>{{ $skaw->status }}</td>
                    <td>
                        @if ($skaw->status === "Menunggu")
                            <a href="/dashboard/skaw/hasil/{{ $skaw->id }}" class="btn btn-sm btn-primary"><span class="tf-icons bx bx-upload"></span>&nbsp; Upload</a></td>
                        @else
                        <a href="{{ asset('storage/' . $skaw->hasil) }}" target="_blank" class="btn btn-sm btn-primary">Lihat Berkas</a>
                        @endif
                        
                    <td>
                        <a href="/dashboard/skaw/print/{{ $skaw->id }}" class="btn btn-sm btn-success"><span class="tf-icons bx bx-printer"></span>&nbsp; Cetak</a>
                        <a href="/dashboard/skaw/{{ $skaw->id }}/edit" class="btn btn-sm btn-warning"><span class="tf-icons bx bx-edit"></span>&nbsp; Edit</a>
                        <form action="/dashboard/skaw/{{ $skaw->id }}" method="POST" class="d-inline">
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