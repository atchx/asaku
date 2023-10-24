<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skkb;
use App\Models\Srkip;
use App\Models\Skaw;
use App\Models\Coba;

class PermohonanController extends Controller
{
    // public function indexCoba()
    // {
    //     return view('permohonan.coba');
    // }
    // public function storeCoba(Request $request)
    // {
    //     // return $request;
    //     $validatedData = $request->validate([
    //         'nama' => 'required',
    //         'agama' => 'required',
    //         'pekerjaan' => 'required',

    //         'gambar' => 'image|file|max:2048'
    //         // 'gambar2' => 'image|file|max:2048'
    //     ]);
    //     $validatedData['gambar'] = $request->file('gambar')->store('berkas-persyaratan');

    //     Coba::create($validatedData);
    //     return redirect('/permohonan-selesai')->with('success', "selesai");
    // }
    
    public function indexSkkb()
    {
        return view('permohonan.skkb');
    }

    public function storeSkkb(Request $request)
    {
        $noreg = "REGSKKB" . date('Ymd') . Skkb::count() + 1;
        $validatedData = $request->validate([
            'nama' => 'required',
            'kelamin' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'agama' => 'required',
            'pernikahan' => 'required',
            'nomor' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',

            'rt' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'ktp' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'kk' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'foto' => 'mimes:pdf,jpg,jpeg,png|file|max:5120'
        ]);
        $validatedData['rt'] = $request->file('rt')->store('berkas-persyaratan');
        $validatedData['ktp'] = $request->file('ktp')->store('berkas-persyaratan');
        $validatedData['kk'] = $request->file('kk')->store('berkas-persyaratan');
        $validatedData['foto'] = $request->file('foto')->store('berkas-persyaratan');
        $validatedData['catatan'] = $request->catatan;
        $validatedData['noreg'] = $noreg;
        $validatedData['status'] = "Menunggu";
        $validatedData['hasil'] = "";

        Skkb::create($validatedData);
        return redirect('/permohonan-selesai')->with('success', $noreg);
    }

    public function indexSrkip()
    {
        return view('permohonan.srkip');
    }

    public function storeSrkip(Request $request)
    {
        $noreg = "REGSRKIP" . date('Ymd') . Srkip::count() + 1;
        $validatedData = $request->validate([
            'nama' => 'required',
            'kelamin' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'agama' => 'required',
            'pernikahan' => 'required',
            'nomor' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',

            'namaanak' => 'required',
            'nomoranak' => 'required',
            'kelaminanak' => 'required',
            'tempatanak' => 'required',
            'tanggalanak' => 'required',
            'alamatanak' => 'required',

            'rt' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'ktp' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'kk' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'sekolah' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'akte' => 'mimes:pdf,jpg,jpeg,png|file|max:5120'
        ]);
        $validatedData['rt'] = $request->file('rt')->store('berkas-persyaratan');
        $validatedData['ktp'] = $request->file('ktp')->store('berkas-persyaratan');
        $validatedData['kk'] = $request->file('kk')->store('berkas-persyaratan');
        $validatedData['sekolah'] = $request->file('sekolah')->store('berkas-persyaratan');
        $validatedData['akte'] = $request->file('akte')->store('berkas-persyaratan');

        $validatedData['catatan'] = $request->catatan;
        $validatedData['noreg'] = $noreg;
        $validatedData['status'] = "Menunggu";
        $validatedData['hasil'] = "";

        Srkip::create($validatedData);
        return redirect('/permohonan-selesai')->with('success', $noreg);
    }

    public function indexSkaw()
    {
        return view('permohonan.skaw');
    }

    public function storeSkaw(Request $request)
    {
        $noreg = "REGSKAW" . date('Ymd') . Skaw::count() + 1;
        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'kelamin' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'pernikahan' => 'required',
            'alamat' => 'required',

            'namaaw' => 'required',
            'nomoraw' => 'required',
            'tempataw' => 'required',
            'tanggalaw' => 'required',
            'kelaminaw' => 'required',
            'kewarganegaraanaw' => 'required',
            'agamaaw' => 'required',
            'pernikahanaw' => 'required',
            'alamataw' => 'required',

            'nomorsurat' => 'required',
            'tanggalsurat' => 'required',
            'pukul' => 'required',
            'tempatmeninggal' => 'required',
            'tanggalmeninggal' => 'required',
            'kebumikan' => 'required',

            'rt' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'pernyataan' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'ktp' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'kk' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'ktpaw' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'kematian' => 'mimes:pdf,jpg,jpeg,png|file|max:5120',
            'saksi' => 'mimes:pdf,jpg,jpeg,png|file|max:5120'
        ]);
        $validatedData['rt'] = $request->file('rt')->store('berkas-persyaratan');
        $validatedData['pernyataan'] = $request->file('pernyataan')->store('berkas-persyaratan');
        $validatedData['ktp'] = $request->file('ktp')->store('berkas-persyaratan');
        $validatedData['kk'] = $request->file('kk')->store('berkas-persyaratan');
        $validatedData['ktpaw'] = $request->file('ktpaw')->store('berkas-persyaratan');
        $validatedData['kematian'] = $request->file('kematian')->store('berkas-persyaratan');
        $validatedData['saksi'] = $request->file('saksi')->store('berkas-persyaratan');

        $validatedData['catatan'] = $request->catatan;
        $validatedData['noreg'] = $noreg;
        $validatedData['status'] = "Menunggu";
        $validatedData['hasil'] = "";

        Skaw::create($validatedData);
        return redirect('/permohonan-selesai')->with('success', $noreg);
    }
}
