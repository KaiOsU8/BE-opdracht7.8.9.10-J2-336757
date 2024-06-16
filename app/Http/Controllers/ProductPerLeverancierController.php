<?php

namespace App\Http\Controllers;

use App\Models\ProductPerLeverancier;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Leverancier;

class ProductPerLeverancierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $productId, $leverancierId)
    {
        $product = Product::find($productId);
        $leverancier = Product::find($leverancierId);
    
        return view('leverancier.create', ['product' => $product, 'leverancier' => $leverancier, 'id' => $request->all()['id']]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId, $leverancierId)
    {
        $ProductPerLeverancierId = $request->all()['id'];

        $requestValidation = $request->validate([
            'Aantal' => 'required|integer',
            'DatumEerstVolgendeLevering' => 'required|date'
        ]);
    
        $product = \App\Models\Product::find($productId);
        $productPerLeverancier = \App\Models\ProductPerLeverancier::find($ProductPerLeverancierId);

        

         //dd($product->productPerLeverancier()->get(['DatumLevering']));
        
    
        if ($product === null) {
            return redirect()->back()->withErrors('Product not found');
        }

        $productPerLeverancier->update([
            'Aantal' => $requestValidation['Aantal'],
            'DatumEerstVolgendeLevering' => $requestValidation['DatumEerstVolgendeLevering']
        ]);
    
        return redirect()->route('leverancier.show', $leverancierId);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductPerLeverancier $productPerLeverancier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductPerLeverancier $productPerLeverancier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductPerLeverancier $productPerLeverancier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductPerLeverancier $productPerLeverancier)
    {
        //
    }
}
