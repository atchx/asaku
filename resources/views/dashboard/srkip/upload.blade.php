@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hasil Permohonan </span> {{ $srkip->noreg }}</h4>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="/dashboard/srkip/hasil" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input name="id" type="text" class="form-control" value="{{ $srkip->id }}" required hidden />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Dokumen Hasil Permohonan</label>
                    <input class="form-control" type="file" id="formFile" name="hasil"/>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/dashboard/srkip/" class="btn btn-danger">Tutup</a>
            </form>
        </div>
    </div>
</div>
@endsection