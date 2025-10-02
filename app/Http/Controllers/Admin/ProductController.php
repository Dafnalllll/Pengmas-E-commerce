<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('pages.admin.productadmin', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.add.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:15360', // max 15MB
            // 'description' => 'nullable|string',
        ]);

        // $imagePath = $request->file('image')->store('products', 'public');

        $imagePath = null; // Inisialisasi dengan NULL

        // 1. Cek apakah ada file yang di-upload dengan nama 'image'
        if ($request->hasFile('image')) {
            // 2. Hanya jika file ada, baru panggil store()
            $imagePath = $request->file('image')->store('products', 'public');
        }
        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'link' => $request->link,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.products')->with('success', 'Produk berhasil ditambahkan');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
