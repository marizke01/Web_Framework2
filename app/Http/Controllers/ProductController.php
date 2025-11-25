<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // LIST SEMUA PRODUK
    public function index()
    {
        $products = Product::all();

        // Jika route yang dipanggil adalah route admin
        if (request()->routeIs('products.index')) {
            return view('products.index', compact('products'));
        }

        // Jika route yang dipanggil adalah route program (publik)
        return view('program', compact('products'));
    }


    // FORM TAMBAH PRODUK
    public function create()
    {
        return view('products.create');
    }

    // SIMPAN PRODUK
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'nullable|max:500'
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // DETAIL PRODUK
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // FORM EDIT PRODUK
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // UPDATE PRODUK
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'nullable|max:500'
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // HAPUS PRODUK
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}