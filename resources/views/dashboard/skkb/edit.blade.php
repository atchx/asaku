@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Permohonan </span> {{ $skkb->noreg }}</h4>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="/dashboard/skkb/{{ $skkb->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" value="{{ $skkb->nama }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select">
                        <option value="{{ $skkb->kelamin }}">{{ $skkb->kelamin }}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input name="tempat" type="text" class="form-control" value="{{ $skkb->tempat }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input name="tanggal" type="date" class="form-control" value="{{ $skkb->tanggal }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-select">
                        <option value="{{ $skkb->agama }}">{{ $skkb->agama }}</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Pernikahan</label>
                    <select name="pernikahan" class="form-select">
                        <option value="{{ $skkb->pernikahan }}">{{ $skkb->pernikahan }}</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KTP/NIK</label>
                    <input name="nomor" type="text" class="form-control" value="{{ $skkb->nomor }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <input name="pekerjaan" type="text" class="form-control" value="{{ $skkb->pekerjaan }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2" required>{{ $skkb->alamat }}</textarea>
                </div>
                <h5>Berkas Persyaratan</h5>
                <div class="mb-3">
                    <a href="{{ asset('storage/' . $skkb->rt) }}" target="_blank" class="btn btn-primary mb-3">Surat pengantar dari RT setempat</a>
                    <a href="{{ asset('storage/' . $skkb->ktp) }}" target="_blank" class="btn btn-primary mb-3">KTP (yang masih berlaku)</a>
                    <a href="{{ asset('storage/' . $skkb->kk) }}" target="_blank" class="btn btn-primary mb-3">Kartu Keluarga</a>
                    <a href="{{ asset('storage/' . $skkb->foto) }}" target="_blank" class="btn btn-primary mb-3">Pas photo berwarna uk.4x6</a>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/dashboard/skkb/" class="btn btn-danger">Tutup</a>
            </form>
        </div>
    </div>
</div>
@endsection