<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_type' => 'required|alpha_num',
            'product_code' => 'required|alpha_num|unique:products',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
        ]);

        Product::create($validatedData);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'product_type' => 'required|alpha_num',
            'product_code' => 'required|alpha_num|unique:products,product_code,' . $product->id,
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
        ]);

        $product->update($validatedData);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
