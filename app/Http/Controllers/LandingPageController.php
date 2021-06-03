<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        // $categories = Category::take(5)->get();
        $categoryProducts = Category::with(['products'=>function($query){
            $query->take(4);
        }])->take(3)->get();
        // dd($categoryProducts);
        $products = Product::where('top_two_featured', true)->get();
        return view('welcome', compact('products', 'brands', 'categoryProducts'));
    }

}