@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h3 class="text-warning text-center my-5">Edit Product details</h3>
      <form action="{{ route('myproduct.update', ['product'=>$product]) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @include('todos.productform')
          <button class="btn btn-primary" type="submit">Update Product</button>
      </form>
  </div>
</div>
@endsection