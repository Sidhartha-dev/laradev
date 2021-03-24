<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // $pagination = 6;
        $products = Product::where('featured', true)->paginate(4);
        return view('products', compact('products'));
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product', compact('product'));
    }
}
