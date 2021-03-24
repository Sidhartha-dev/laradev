@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="Ctpg">
<h2 class="text-warning cat-name"><U>{{$category->name}}</U></h2>
<a href="" class="btn btn-primary float-right">Back</a>
</div>
<div>
    {{-- @foreach ($category->products as $product)
        <h3>{{$product->amazon_product_name}}</h3>
    @endforeach --}}
</div>
@endsection