<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skkb;

class SkkbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.skkb.index', [
            'skkbs' => Skkb::all()
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
        return view('dashboard.skkb.show', [
            'skkb' => Skkb::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skkb = Skkb::where('id', $id)->first();

        return view('dashboard.skkb.edit', [
            'skkb' => $skkb
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
        ]);

        Skkb::where('id', $id)->update($validatedData);

        return redirect('/dashboard/skkb')->with('success', "Permohonan telah berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $produk = Skkb::where('id', $id)->first();
        // Storage::delete($produk->gambar);
        Skkb::destroy($id);

        return redirect('/dashboard/skkb')->with('success', "Permohonan berhasil dihapus");
    }
}
