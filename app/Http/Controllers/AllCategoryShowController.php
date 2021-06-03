<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AllCategoryShowController extends Controller
{
    public function allCategory()
    {
        $all_categories = Category::paginate(10);
        return view('categories', compact('all_categories'));
    }

    public function categoryProduct($name)
    {
        $category = Category::where([
            'name'=> $name,
            ])->firstOrFail();
        $prod_cat = Product::where('category_id', $category->id)->get();
        // dd($prod_cat);
        return view('category_product', compact('category', 'prod_cat'));
    }

}
