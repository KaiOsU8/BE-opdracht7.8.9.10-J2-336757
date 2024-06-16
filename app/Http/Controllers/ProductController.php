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
        $products = Product::with(['magazijn' => function ($query) {
            $query->select('ProductId', 'VerpakkingsEenheid', 'AantalAanwezig');
        }])->get(['id', 'Barcode', 'Naam']);
    
        return view('product.index', ['products' => $products]);
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
    public function show(Product $product)
    {
        $product->load('productPerAllergeen.allergeen');
        return view('product.show', ['product' => $product]);
    }
    
    /**
     * Display the specified resource with another resource.
     */
    public function levering(Product $product)
    {
        $product->load('productPerLeverancier.leverancier');

        return view('product.levering', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }


}
