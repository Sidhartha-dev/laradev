<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{   
    public function brandlist()
    {
        $pagination = 5;
        $brands = Brand::paginate($pagination);
        return view('brands.brandlist', compact('brands'));
    }

    public function brandcreate()
    {
        $brands = Brand::all();
        return view('brands.brandcreate', compact('brands'));
    }

    public function brandstore()
    {
        $brand = Brand::create($this->validateRequest());
        $this->storeImage($brand);
        return redirect('brands');
    }

    public function destroy($id)
    {
       $brand = Brand::findOrFail($id);
       $brand->delete();
       return redirect('brands');
    }

    private function validateRequest()  
    {
        return request()->validate([
            'brand_name' =>'required',
            'brand_details' =>'required',
            'brand_link' =>'required',
            'brand_image' =>'sometimes|file|image|max:5000',
        ]); 
    }

    private function storeImage($brand)  
    {
        if (request()->has('brand_image')) {
            $brand->update([
                'brand_image'=>request()->brand_image->store('uploads/brand_image/', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $brand->brand_image))->fit(400, 400, null, 'top-left');
            $image->save();
        }
    }


}
