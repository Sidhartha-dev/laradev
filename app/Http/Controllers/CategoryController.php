<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(3);
        return view('todos.categorylist', compact('categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('todos.todocreate', compact('categories'));
    }

    public function store()
    {
        $category = Category::create($this->validateRequest());
        $this->storeImage($category);
        return redirect('categories');
    }
    public function destroy($id)
    {
       $product = Category::findOrFail($id);
       $product->delete();
       return redirect('categories');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' =>'required',
            'category_img' =>'sometimes|file|image|max:5000',
        ]); 
    }

    

    private function storeImage($category)  
    {
        if (request()->has('category_img')) {
            $category->update([
                'category_img'=>request()->category_img->store('uploads/category_img/', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $category->category_img))->fit(400, 400, null, 'top-left');
            $image->save();
        }
    }
}
