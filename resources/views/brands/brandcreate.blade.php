@extends('layouts.app')

@section('content')
<div class="row">
  <div class="container">
    <h3 class="text-warning text-center my-5">Brand Creation</h3>
      <form action="{{ route('brand.store')}}" method="post" enctype="multipart/form-data">
          @include('brands.form')
          <button class="btn btn-primary" type="submit">Add Brand</button>
      </form>
  </div>
</div>
@endsection