@extends('layouts.app')
@include('layouts.nav')
@section('content')
<h1 class="py-4 text-center">category</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category name</th>
                <th scope="col">Category Image</th>
                <th scope="col">
                    <a href="{{ route('category.create')}}" class="btn btn-success">Add Category</a>
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td><img src="{{ asset('storage/' . $category->category_img)}}" alt="" class="category-list-img"></td>
                <td>
                    <form action="{{route('category.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          
    </div>
</div>
<div class="row">
    <div class="col-md-12 d-flex justify-content-center pt-4">
      {{$categories->links()}}
    </div>
  </div>
@endsection