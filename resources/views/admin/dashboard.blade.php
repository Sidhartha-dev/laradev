@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <h3 class="text-center">{{ __('Admin-Dashboard') }}</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
        </div>
        <div class="col-md-4">
            <div class="dash-card">
                <i class="pt-3 fa fa-users" aria-hidden="true"></i>
                <h3 class="py-2 px-3 text-white"><b><a href="{{route('users.name')}}" class="product-page">Users Management</a></b></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dash-card">
                <i class="pt-3 fa fa-shopping-bag" aria-hidden="true"></i>
                <h3 class="py-2 px-3 text-white "></b><a href="{{route('product.list')}}" class="product-page">Products Management</a></b></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dash-card">
                <i class="pt-3 fa fa-tachometer" aria-hidden="true"></i>
                <h3 class="py-2 px-3 text-white"></b><a href="{{route('category.index')}}" class="product-page">Category Management</a></b></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dash-card">
                <i class="pt-3 fa fa-id-card" aria-hidden="true"></i>
                <h3 class="py-2 px-3 text-white"></b><a href="{{route('point.index')}}" class="product-page">Points Management</a></b></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dash-card">
                <i class="pt-3 fa fa-life-ring" aria-hidden="true"></i>
                <h3 class="py-2 px-3 text-white"></b><a href="{{route('brand.index')}}" class="product-page">Brand Management</a></b></h3>
            </div>
        </div>
        
    </div>
</div>
@endsection