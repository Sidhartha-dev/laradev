<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AllCategoryShowController extends Controller
{
    public function allCategory()
    {
        $all_categories = Category::paginate(10);
        return view('categories', compact('all_categories'));
    }
}
