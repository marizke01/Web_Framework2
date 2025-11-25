<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
   
    // Fungsi untuk menampilkan daftar semua produk (Katalog)
    public function index()
    {
        // 1. Menggunakan Eloquent ORM: Mengambil semua data dari tabel 'products'
        //    (kecuali yang sudah di-soft delete)
        $products = Product::all(); 

        // 2. Mengirim data ($products) ke View 'program'
        //    'compact('products')' sama dengan ['products' => $products]
        return view('program', compact('products'));
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
