@extends('dashboard.layouts.main')

@section('container')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Permohonan </span> {{ $skaw->noreg }}</h4>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="/dashboard/skaw/{{ $skaw->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <h5>Pewaris</h5>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" value="{{ $skaw->nama }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KTP/NIK</label>
                    <input name="nomor" type="text" class="form-control" value="{{ $skaw->nomor }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input name="tempat" type="text" class="form-control" value="{{ $skaw->tempat }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input name="tanggal" type="date" class="form-control" value="{{ $skaw->tanggal }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select"  >
                        <option value="{{ $skaw->kelamin }}">{{ $skaw->kelamin }}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kewarganegaraan</label>
                    <input name="kewarganegaraan" type="text" class="form-control" value="{{ $skaw->kewarganegaraan }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-select"  >
                        <option value="{{ $skaw->agama }}">{{ $skaw->agama }}</option>
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
                    <select name="pernikahan" class="form-select"  >
                        <option value="{{ $skaw->pernikahan }}">{{ $skaw->pernikahan }}</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2" required  >{{ $skaw->alamat }}</textarea>
                </div>
                <h5>Ahli Waris</h5>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="namaaw" type="text" class="form-control" value="{{ $skaw->namaaw }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KTP/NIK</label>
                    <input name="nomoraw" type="text" class="form-control" value="{{ $skaw->nomoraw }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input name="tempataw" type="text" class="form-control" value="{{ $skaw->tempataw }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input name="tanggalaw" type="date" class="form-control" value="{{ $skaw->tanggalaw }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="kelaminaw" class="form-select"  >
                        <option value="{{ $skaw->kelaminaw }}">{{ $skaw->kelaminaw }}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kewarganegaraan</label>
                    <input name="kewarganegaraanaw" type="text" class="form-control" value="{{ $skaw->kewarganegaraanaw }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agamaaw" class="form-select"  >
                        <option value="{{ $skaw->agamaaw }}">{{ $skaw->agamaaw }}</option>
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
                    <select name="pernikahanaw" class="form-select"  >
                        <option value="{{ $skaw->pernikahanaw }}">{{ $skaw->pernikahanaw }}</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamataw" class="form-control" rows="2" required  >{{ $skaw->alamataw }}</textarea>
                </div>

                <h5>Surat Keterangan Meninggal Dunia</h5>
                <div class="mb-3">
                    <label class="form-label">Nomor Surat Keterangan Meninggal Dunia</label>
                    <input name="nomorsurat" type="text" class="form-control" value="{{ $skaw->nomorsurat }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Surat</label>
                    <input name="tanggalsurat" type="date" class="form-control" value="{{ $skaw->tanggalsurat }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pukul</label>
                    <input name="pukul" type="text" class="form-control" value="{{ $skaw->pukul }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Meninggal</label>
                    <input name="tempatmeninggal" type="text" class="form-control" value="{{ $skaw->tempatmeninggal }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Meninggal</label>
                    <input name="tanggalmeninggal" type="date" class="form-control" value="{{ $skaw->tanggalmeninggal }}" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Dikebumikan di</label>
                    <input name="kebumikan" type="text" class="form-control" value="{{ $skaw->kebumikan }}" required/>
                </div>

                <h5>Berkas Persyaratan</h5>
                <div class="mb-3">
                    <a href="{{ asset('storage/' . $skaw->rt) }}" target="_blank" class="btn btn-primary mb-3">Surat Pengantar dari RT/RW</a>
                    <a href="{{ asset('storage/' . $skaw->pernyataan) }}" target="_blank" class="btn btn-primary mb-3">Surat Pernyataan Ahli Waris</a>
                    <a href="{{ asset('storage/' . $skaw->ktp) }}" target="_blank" class="btn btn-primary mb-3">KTP (yang masih berlaku) Pewaris</a>
                    <a href="{{ asset('storage/' . $skaw->kk) }}" target="_blank" class="btn btn-primary mb-3">Kartu Keluarga Pewaris</a>
                    <a href="{{ asset('storage/' . $skaw->ktpaw) }}" target="_blank" class="btn btn-primary mb-3">KTP / Akte Kelahiran Ahli Waris</a>
                    <a href="{{ asset('storage/' . $skaw->kematian) }}" target="_blank" class="btn btn-primary mb-3">Surat Kematian dari Rumah Sakit/Klinik</a>
                    <a href="{{ asset('storage/' . $skaw->saksi) }}" target="_blank" class="btn btn-primary mb-3">KTP saksi 2 Orang</a>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/dashboard/skaw/" class="btn btn-danger">Tutup</a>
            </form>
        </div>
    </div>
</div>
@endsection