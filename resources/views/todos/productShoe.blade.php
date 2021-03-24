@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="row">
    <div class="col-md-6 pl-4">
        <img src="{{asset('storage/' . $product->amazon_image)}}" alt="" class="product-img">
        <h5>Amazon Image</h5>
    </div>
    <div class="col-md-6 pl-4">
        <img src="{{asset('storage/' . $product->flipkart_image)}}" alt="" class="product-img">
        <h5>Flipkart Image</h5>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12 maxcard">
        <div class="amazon-com card">
            <h2 class="text-success px-2 py-3 text-center">Amazon Product Name</h2>
            <h4 class="text-success px-2 text-center">{{$product->amazon_product_name}}</h4>
            <hr>
            <h2 class="text-success px-2 py-3 text-center">Amazon Details</h2>
            <p class="text-success px-2">{{$product->amazon_details}}</p>
            <hr>
            <h2 class="text-success px-2 py-3 text-center">Amazon Description</h2>
            <p class="text-success px-2">{{$product->amazon_description}}</p>
            <hr>
            <h2 class="text-success px-2 text-center py-3">Amazon prize</h2>
            <h4 class="text-success px-2 text-center">{{$product->amazon_prize}} INR</h4>
            <hr>
            <h2 class="text-success px-2 text-center py-3">Amazon ratings</h2>
            <h4 class="text-success px-2 text-center">{{$product->amazon_ratings}} <span>&#x2B50;</span></h4>
            <hr>
            <h2 class="text-success px-2 text-center py-3">Amazon assured</h2>
            <h4 class="text-success px-2 text-center">{{$product->amazon_verified ? 'yes' : 'no'}}</h4>
            <hr>
            <a href="{{ $product->amazon_link }}" target="blank" class="btn btn-warning">Checkout Now</a>
        </div>
        <div class="flipkart-comp card">
            <h2 class="text-primary px-2 py-3 text-center">Flipkart Product Name</h2>
            <h4 class="text-success px-2 text-center">{{$product->flipk_product_name}}</h4>
            <hr>
            <h2 class="text-primary px-2 py-3 text-center">Flipkart Details</h2>
            <p class="texr-primary px-2 ">{{$product->flipkart_details}}</p>
            <hr>
            <h2 class="text-primary px-2 py-3 text-center">Flipkart Description</h2>
            <p class="texr-primary px-2 ">{{$product->flipkart_description}}</p>
            <hr>
            <h2 class="text-primary px-2 py-3 text-center">Flipkart prize</h2>
            <h4 class="text-primary px-2 text-center">{{$product->flipkart_prize}} INR</h4>
            <hr>
            <h2 class="text-primary px-2 py-3 text-center">Flipkart ratings</h2>
            <h4 class="text-primary px-2 text-center">{{$product->flipkart_ratings}} <span>&#x2B50;</span></h4>
            <hr>
            <h2 class="text-primary px-2 py-3 text-center">Flipkart assured</h2>
            <h4 class="text-primary px-2 text-center">{{$product->flipkart_assured ? 'yes' : 'no'}}</h4>
            <hr>
            <a href="{{ $product->amazon_link }}" target="blank" class="btn btn-warning">Checkout Now</a>
        </div>
    </div>
@endsection