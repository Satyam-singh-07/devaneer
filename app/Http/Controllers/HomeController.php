<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('primaryImage')
            ->where('is_active', true)
            ->latest()
            ->get();

        return view('website.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with(['images', 'primaryImage'])->findOrFail($id);
        
        // Fetch related products (excluding current one)
        $relatedProducts = Product::with('primaryImage')
            ->where('is_active', true)
            ->where('id', '!=', $id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('website.product-details', compact('product', 'relatedProducts'));
    }
}
