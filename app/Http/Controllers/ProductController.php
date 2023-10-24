<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'namaproduk' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'namaumkm' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'gambar' => 'image|file|max:2048'
        ]);
        $validatedData['gambar'] = $request->file('gambar')->store('product-images');

        Product::create($validatedData);
        return redirect('/dashboard/product')->with('success', "Produk UMKM '$request->namaproduk' telah berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Product::where('id', $id)->first();

        return view('dashboard.product.edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Product::where('id', $id)->first();

        $validatedData = $request->validate([
            'namaproduk' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'namaumkm' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'gambar' => 'image|file|max:1024'
        ]);

        if ($request->image === null) {
            $validatedData['gambar'] = $produk->gambar;
        } else {
            $validatedData['gambar'] = $request->file('gambar')->store('product-images');
        }

        Product::where('id', $id)->update($validatedData);
        return redirect('/dashboard/product')->with('success', "Produk UMKM '$request->namaproduk' telah berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Product::where('id', $id)->first();
        Storage::delete($produk->gambar);
        Product::destroy($id);

        return redirect('/dashboard/product')->with('success', "Produk UMKM '$produk->namaproduk' berhasil dihapus");
    }
}
