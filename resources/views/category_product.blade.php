@extends('layouts.app')
@section('content')
@include('layouts.navigation')
<div class="container">
<div class="Ctpg mt-3">
<h2 class="text-warning cat-name"><U>{{$category->name}}</U></h2>
<a href="{{ route('allcategory.index')}}" class="btn btn-primary float-right">Back</a>
</div>
<div>
   @if (count($prod_cat)>0)
   <div class="row mt-5">
      @foreach ($prod_cat as $prod)
      <div class="col-md-6 mb-4 pro-flex">
       <div class="ap text-center py-2 px-1">
           <img src="{{ asset('storage/' . $prod->amazon_image) }}" alt="" class="product-size">
           <h3>{{$prod->amazon_product_name}}</h3>
           {{ Str::limit($prod->amazon_details, 60, '....') }}
           <h5 class="text-primary">Price: {{$prod->amazon_prize}} INR</h5>
           <div class="action-btn">
           <a href="{{$prod->amazon_link}}" target="blank" class="btn btn-primary">Purchase</a>
           <a href="{{ route('product.show', $prod->slug) }}" class="btn btn-success">Compare</a>
          </div>
          </div>
       <div class="fp text-center py-2 px-1">
         <img src="{{ asset('storage/' . $prod->flipkart_image) }}" alt="" class="product-size">
         <h3>{{$prod->flipk_product_name}}</h3>
         {{ Str::limit($prod->flipkart_details, 60, '....') }}
         <h5 class="text-primary">Price: {{$prod->flipkart_prize}} INR</h5>
         <div class="action-btn">
         <a href="{{$prod->flipkart_link}}" target="blank" class="btn btn-primary">Purchase</a>
         <a href="{{ route('product.show', $prod->slug) }}" class="btn btn-success">Compare</a>
        </div>
       </div>
    </div>
      @endforeach
     </div>
    @else
       <p>This Category has No product available</p>
    @endif
</div>
</div>
@endsection
