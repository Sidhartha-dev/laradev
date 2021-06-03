@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> Brand name</th>
                <th scope="col">Brand Details</th>
                <th scope="col">Brand image</th>
                <th scope="col">Brand link</th>
                <th scope="col"><a href="{{route('brand.create')}}" class="btn btn-success">Add Brand</a></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($brands as $brand)
            <tr>
                <th scope="row">{{$brand->id}}</th>
                <td>{{$brand->brand_name}}</td>
                <td>{{$brand->brand_details}}</td>
                <td><img src="{{ asset('storage/' . $brand->brand_image)}}" class="category-list-img"></td>
                <td>{{$brand->brand_link}}</td>
                <td>
                  <form action="{{route('brand.destroy', $brand->id)}}" method="post">
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
</div>
<div class="row">
  <div class="col-md-12 d-flex justify-content-center pt-4">
    {{$brands->links()}}
  </div>
</div>
@endsection