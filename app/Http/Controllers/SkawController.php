<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skaw;

class SkawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.skaw.index', [
            'skaws' => Skaw::all()
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
        return view('dashboard.skaw.show', [
            'skaw' => Skaw::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skaw = Skaw::where('id', $id)->first();

        return view('dashboard.skaw.edit', [
            'skaw' => $skaw
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
        ]);

        Skaw::where('id', $id)->update($validatedData);

        return redirect('/dashboard/skaw')->with('success', "Permohonan telah berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skaw::destroy($id);

        return redirect('/dashboard/skaw')->with('success', "Permohonan berhasil dihapus");
    }
}
