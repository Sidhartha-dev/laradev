@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> Amazon Product name</th>
                <th scope="col">Amazon Product Price</th>
                <th scope="col">Flipkart Product  Name</th>
                <th scope="col">Flipkart Product Price</th>
                <th scope="col"><a href="{{route('myproduct.create')}}" class="btn btn-success">Add Product</a></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->amazon_product_name}}</td>
                <td>{{$product->amazon_prize}} INR</td>
                <td>{{$product->flipk_product_name}}</td>
                <td>{{$product->flipkart_prize}} INR</td>
                <td><a href="{{route('product.edit', ['product'=>$product])}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{route('myproduct.show', $product->id)}}" class="btn btn-primary">Details</a></td>
                <td>
                  <form action="{{route('product.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                  {{-- <a href="{{route('product.destroy', ['product'=>$product])}}" class="btn btn-danger">Delete</a> --}}
                </td>
            </tr>
            @endforeach
              
            </tbody>
          </table>
    </div>
</div>
<div class="row">
  <div class="col-md-12 d-flex justify-content-center pt-4">
    {{$products->links()}}
  </div>
</div>
@endsection