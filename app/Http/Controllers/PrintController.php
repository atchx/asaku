<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skkb;
use App\Models\Srkip;
use App\Models\Skaw;

class PrintController extends Controller
{
    public function printSkkb($id)
    {
        return view('dashboard.skkb.print', [
            'skkb' => Skkb::where('id', $id)->first()
        ]);
    }

    public function printSrkip($id)
    {
        return view('dashboard.srkip.print', [
            'srkip' => Srkip::where('id', $id)->first()
        ]);
    }
    
    public function printSkaw($id)
    {
        return view('dashboard.skaw.print', [
            'skaw' => Skaw::where('id', $id)->first()
        ]);
    }
}
