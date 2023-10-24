<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skkb;
use App\Models\Srkip;
use App\Models\Skaw;

class HasilController extends Controller
{
    public function uploadSkkb($id)
    {
        return view('dashboard.skkb.upload', [
            'skkb' => Skkb::where('id', $id)->first()
        ]);
    }

    public function hasilSkkb(Request $request)
    {
        $request->file('hasil')->store('berkas-persyaratan');
        Skkb::where('id', $request->id)->update(array('hasil' => $request->file('hasil')->store('berkas-persyaratan'), 'status' => "Selesai"));

        return redirect('/dashboard/skkb')->with('success', "Permohonan telah berhasil diperbaharui");
    }

    public function uploadSrkip($id)
    {
        return view('dashboard.srkip.upload', [
            'srkip' => Srkip::where('id', $id)->first()
        ]);
    }

    public function hasilSrkip(Request $request)
    {
        $request->file('hasil')->store('berkas-persyaratan');
        Srkip::where('id', $request->id)->update(array('hasil' => $request->file('hasil')->store('berkas-persyaratan'), 'status' => "Selesai"));

        return redirect('/dashboard/srkip')->with('success', "Permohonan telah berhasil diperbaharui");
    }
    
    public function uploadSkaw($id)
    {
        return view('dashboard.skaw.upload', [
            'skaw' => Skaw::where('id', $id)->first()
        ]);
    }

    public function hasilSkaw(Request $request)
    {
        $request->file('hasil')->store('berkas-persyaratan');
        Skaw::where('id', $request->id)->update(array('hasil' => $request->file('hasil')->store('berkas-persyaratan'), 'status' => "Selesai"));

        return redirect('/dashboard/skaw')->with('success', "Permohonan telah berhasil diperbaharui");
    }
}
