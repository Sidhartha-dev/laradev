<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function productAll()
    {
        $pagination = 5;
        $products = Product::paginate($pagination);
        return view('todos.productList', compact('products'));
    }

    public function createProduct()
    {
        $categories = Category::all();
        $product = new Product();
        return view('todos.productcreate', compact('categories', 'product'));
    }
    public function productStore()
    {
        $product = Product::create($this->validateRequest());
        $this->storeFlipkartImage($product);
        $this->storeAmazonImage($product);
        return redirect('/my-products');
    }

    public function editProduct(Product $product)
    {
        $categories = Category::all();
        return view('todos.productEdit', compact('product', 'categories'));
    }

    public function productUpdate(Product $product)
    {
        $product->update($this->validateRequest());
        $this->storeFlipkartImage($product);
        $this->storeAmazonImage($product);
        return redirect('my-products/' . $product->id);
    }

    public function productAdminShow(Product $product)
    {
        return view('todos.productShoe', compact('product'));
    }

    public function destroyProduct($id)
    {
       $product = Product::findOrFail($id);
       $product->delete();
       return redirect('my-products');
    }


    private function validateRequest()
    {
        return request()->validate([
            'amazon_product_name' =>'required',
            'flipk_product_name' =>'required',
            'flipkart_prize' =>'required',
            'amazon_prize' =>'required',
            'amazon_details' =>'required|min:32',
            'flipkart_details' =>'required|min:32',
            'amazon_description' =>'required|min:50',
            'flipkart_description' =>'required|min:50',
            'category_id' =>'required',
            'slug'=>'required',
            'amazon_link'=>'required',
            'flipkart_link'=>'required',
            'featured'=>'sometimes',
            'top_two_featured'=>'sometimes',
            'amazon_verify'=>'sometimes',
            'flipkart_assured'=>'sometimes',
            'flipkart_ratings'=>'sometimes',
            'amazon_ratings'=>'sometimes',
            'flipkart_image'=>'sometimes|file|image|max:5000',
            'amazon_image'=>'sometimes|file|image|max:5000',
        ]);

    }

    private function storeFlipkartImage($product)  
    {
        if (request()->has('flipkart_image')) {
            $product->update([
                'flipkart_image'=>request()->flipkart_image->store('uploads/flipkart_img/', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $product->flipkart_image))->fit(400, 400, null, 'top-left');
            $image->save();
        }
    }

    private function storeAmazonImage($product)
    {
        if (request()->has('amazon_image')) {
            $product->update([
                'amazon_image'=>request()->amazon_image->store('uploads/amazon_image/', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $product->amazon_image))->fit(400, 400, null, 'top-left');
            $image->save();
        }
    }

}
