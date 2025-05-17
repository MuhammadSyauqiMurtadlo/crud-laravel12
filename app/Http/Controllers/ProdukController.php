<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all products from the database
        $produks = \App\Models\Produk::all();

        // Return the view with the products
        return view('produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new product
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Produk::create([
            'nama_produk' => $request->input('nama_produk'),
            'stok' => $request->input('stok'),
            'harga' => $request->input('harga'),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('produks.index')->with('success', 'Product created successfully.');
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
    public function edit($id)
    {
        // Find the product by ID
        $produk = Produk::findOrFail($id);

        // Return the view for editing the product
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        // Find the product by ID and update it
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_produk' => $request->input('nama_produk'),
            'stok' => $request->input('stok'),
            'harga' => $request->input('harga'),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('produks.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the product by ID and delete it
        $produk = Produk::findOrFail($id);
        $produk->delete();

        // Redirect to the index page with a success message
        return redirect()->route('produks.index')->with('success', 'Product deleted successfully.');
    }
}
