<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Srkip;

class SrkipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.srkip.index', [
            'srkips' => Srkip::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.srkip.show', [
            'srkip' => Srkip::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $srkip = Srkip::where('id', $id)->first();

        return view('dashboard.srkip.edit', [
            'srkip' => $srkip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
        ]);

        Srkip::where('id', $id)->update($validatedData);

        return redirect('/dashboard/srkip')->with('success', "Permohonan telah berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Srkip::destroy($id);

        return redirect('/dashboard/srkip')->with('success', "Permohonan berhasil dihapus");
    }
}
