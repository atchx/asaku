@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail Permohonan </span> {{ $srkip->noreg }}</h4>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="/dashboard/product" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" value="{{ $srkip->nama }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select" disabled>
                        <option value="{{ $srkip->kelamin }}">{{ $srkip->kelamin }}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input name="tempat" type="text" class="form-control" value="{{ $srkip->tempat }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input name="tanggal" type="date" class="form-control" value="{{ $srkip->tanggal }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-select" disabled>
                        <option value="{{ $srkip->agama }}">{{ $srkip->agama }}</option>
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
                    <select name="pernikahan" class="form-select" disabled>
                        <option value="{{ $srkip->pernikahan }}">{{ $srkip->pernikahan }}</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KTP/NIK</label>
                    <input name="nomor" type="text" class="form-control" value="{{ $srkip->nomor }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <input name="pekerjaan" type="text" class="form-control" value="{{ $srkip->pekerjaan }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2" required disabled>{{ $srkip->alamat }}</textarea>
                </div>
                <h5>Anak yang memperoleh Kartu Indonesia Pintar (KIP)</h5>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="namaanak" type="text" class="form-control" value="{{ $srkip->namaanak }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KTP/NIK</label>
                    <input name="nomoranak" type="text" class="form-control" value="{{ $srkip->nomoranak }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="kelaminanak" class="form-select" disabled>
                        <option value="{{ $srkip->kelaminanak }}">{{ $srkip->kelaminanak }}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input name="tempatanak" type="text" class="form-control" value="{{ $srkip->tempatanak }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input name="tanggalanak" type="date" class="form-control" value="{{ $srkip->tanggalanak }}" required disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamatanak" class="form-control" rows="2" required disabled>{{ $srkip->alamatanak }}</textarea>
                </div>
                <h5>Berkas Persyaratan</h5>
                <div class="mb-3">
                    <a href="{{ asset('storage/' . $srkip->rt) }}" target="_blank" class="btn btn-primary mb-3">Surat pengantar dari RT setempat</a>
                    <a href="{{ asset('storage/' . $srkip->ktp) }}" target="_blank" class="btn btn-primary mb-3">KTP (yang masih berlaku)</a>
                    <a href="{{ asset('storage/' . $srkip->kk) }}" target="_blank" class="btn btn-primary mb-3">Kartu Keluarga</a>
                    <a href="{{ asset('storage/' . $srkip->sekolah) }}" target="_blank" class="btn btn-primary mb-3">Pengantar dari Sekolah Pemohon</a>
                    <a href="{{ asset('storage/' . $srkip->akte) }}" target="_blank" class="btn btn-primary mb-3">Akte Pemohon</a>
                </div>

                <!-- <button type="submit" class="btn btn-success">Simpan</button> -->
                <a href="/dashboard/srkip/" class="btn btn-danger">Tutup</a>
            </form>
        </div>
    </div>
</div>
@endsection