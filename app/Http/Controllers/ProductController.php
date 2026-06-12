<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan table product beserta tabel tambah
        $products = \App\Models\product::all();
        return view('products.index', compact('products'));
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
    public function store(Request $request){
        $request->validate(
            [
                'nama_produk' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'deskripsi' => 'required'
            ]
        );
        \App\Models\Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'menu baru berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $request->validate(
            [
                'nama_produk' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'deskripsi' => 'required'
            ]
        );
        //Mencari produk berdasarkan id
        $product = \App\Models\Product::findOrFail($id);

        //Mengeksekusi update
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //Mengeksekusi delete berdasarkan id yang dieksekusi
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'produk berhasil dihapus');
    }
}
