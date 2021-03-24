@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="category-section pt-2">
    <h3 class="text-primary py-3">Popular Category</h1>
    <div class="cate-cou">
        @foreach ($all_categories as $category)
        <div class="category-list">
            <img src="{{ asset('storage/' . $category->category_img)}}" alt="" class="cate-img">
            <h6 class="text-success text-center pt-3">{{$category->name}}</h6>
            <a href="" class="btn btn-light text-center">Explore Now</a>
        </div>
        @endforeach
    </div>
</div>
@endsection