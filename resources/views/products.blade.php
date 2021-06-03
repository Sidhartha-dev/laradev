@extends('layouts.app')
@section('content')
@include('layouts.navigation')
<div class="container">
<div class="tranding-products my-5">
    <H3 class="text-warning">Featured products</H3>
   <div class="row mt-5">
    @foreach ($products as $product)
    <div class="col-md-6 mb-4 pro-flex">
     <div class="ap text-center py-2 px-1">
         <img src="{{ asset('storage/' . $product->amazon_image) }}" alt="" class="product-size">
         <h3>{{$product->amazon_product_name}}</h3>
         {{ Str::limit($product->amazon_details, 60, '....') }}
         <h5 class="text-primary">Price: {{$product->amazon_prize}} INR</h5>
         <div class="action-btn">
         <a href="{{$product->amazon_link}}" target="blank" class="btn btn-primary">Purchase</a>
         <a href="{{ route('product.show', $product->slug) }}" class="btn btn-success">Compare</a>
        </div>
        </div>
     <div class="fp text-center py-2 px-1">
       <img src="{{ asset('storage/' . $product->flipkart_image) }}" alt="" class="product-size">
       <h3>{{$product->flipk_product_name}}</h3>
       {{ Str::limit($product->flipkart_details, 60, '....') }}
       <h5 class="text-primary">Price: {{$product->flipkart_prize}} INR</h5>
       <div class="action-btn">
       <a href="{{$product->flipkart_link}}" target="blank" class="btn btn-primary">Purchase</a>
       <a href="{{ route('product.show', $product->slug) }}" class="btn btn-success">Compare</a>
      </div>
     </div>
  </div>
    @endforeach
   </div>

   <div class="row">
     <div class="col-md-12 d-flex justify-content-center pt-4">
       {{$products->links()}}
     </div>
   </div>
</div>
</div>
@endsection