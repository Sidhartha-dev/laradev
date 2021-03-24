<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $categories = Category::take(5)->get();
        $products = Product::where('top_two_featured', true)->get();
        return view('welcome', compact('categories', 'products'));
    }

    public function categoryProduct($name)
    {
        $category = Category::where('name', $name)->firstOrFail();
        return view('category_product')->with('category', $category);
    }

}