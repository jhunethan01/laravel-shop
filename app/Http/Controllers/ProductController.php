<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json($products);
    }

    public function render()
    {
        $products = Products::all();
        $comparisonKeyList = array_keys((array) $products);
        return view('livewire.products-list', ['products' => $products, 'comparisonKeyList' => $comparisonKeyList]);
    }

    public function getProductBySku(string $sku)
    {
        try {
            $product = Products::where('sku', $sku)->firstOrFail();
            return response()->json($product);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
