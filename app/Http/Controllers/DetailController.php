<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Skkb;
use App\Models\Srkip;
use App\Models\Skaw;

class DetailController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'products' => Product::all()
        ]);
    }


    public function detail($id)
    {
        return view('detail', [
            'product' => Product::where('id', $id)->first()
        ]);
    }
    
    public function status(Request $request)
    {
        // return Skkb::where('noreg', $id)->first();
        $status = "";
        
        if (Skkb::where('noreg', $request->noreg)->first() != null) {
          $status = Skkb::where('noreg', $request->noreg)->first();
        } else if (Srkip::where('noreg', $request->noreg)->first() != null) {
            $status = Srkip::where('noreg', $request->noreg)->first();
        } else if (Skaw::where('noreg', $request->noreg)->first() != null){
            $status = Skaw::where('noreg', $request->noreg)->first();
        }
        
        return view('permohonan.status', [
            'noreg' => $request->noreg,
            'status' => $status
        ]);
    }
}
