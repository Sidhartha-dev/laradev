@extends('layouts.app')
@section('content')
@include('layouts.navigation')
<div class="container">
    <div class="popular-brands">
    <h3>Popular Brands</h3>
    @include('brands')
    </div>
    <div class="cate-pro">
        <h3>Popular Categories</h3>
        @include('categoryanimation')
        <div class="cat-more-btn">
           <a href="{{ route('allcategory.index') }}">See More >>></a>
        </div>
    </div>
    
    <!--category section-->
    {{-- <div class="category-section pt-5">
        <h3 class="text-primary py-3">Popular Category</h1>
        <div class="cate-cou">
            @foreach ($categories as $category)
            <div class="category-list">
                <img src="{{ asset('storage/' . $category->category_img)}}" alt="" class="cate-img">
                <h6 class="text-success text-center pt-3">{{$category->name}}</h6>
                <a href="" class="btn btn-light text-center">Explore Now</a>
            </div>
            @endforeach
        </div>
        <div class="py-5">
            <a href="{{ route('allcategory.index') }}" class="btn btn-dark">See all Categories</a>
        </div>
    </div> --}}

    <!--products trandinging-->
    <div class="tranding-products my-5">
        <H3 class="text-warning bgp">Tranding products</H3>
       <div class="row mt-5">
           @foreach ($products as $product)
           <div class="col-md-6 mb-4 pro-flex">
            <div class="ap text-center py-3 px-2">
                <img src="{{ asset('storage/' . $product->amazon_image)}}" alt="" class="product-size">
                <h3>{{$product->amazon_product_name}}</h3>
                <p>{{ Str::limit($product->amazon_details, 60, '....') }}</p>
                <h5 class="text-primary">Price: {{$product->amazon_prize}} INR</h5>
                <a href="{{$product->amazon_link}}" target="blank" class="btn btn-primary">Buy Now</a>
                <a href="{{ route('product.show', $product->slug)}}" class="btn btn-success">Compare Product</a>
            </div>
            <div class="fp text-center py-3 px-2">
              <img src="{{ asset('storage/' . $product->flipkart_image)}}" alt="" class="product-size">
              <h3>{{$product->flipk_product_name}}</h3>
              <p>{{ Str::limit($product->flipkart_details, 60, '....') }}</p>
              <h5 class="text-primary">Price: {{$product->flipkart_prize}} INR</h5>
              <a href="{{$product->flipkart_link}}" class="btn btn-primary">Buy Now</a>
              <a href="{{route('product.show', $product->slug)}}" class="btn btn-success">Compare Product</a>
            </div>
         </div>
           @endforeach
       </div>
    </div>
</div>
@endsection
