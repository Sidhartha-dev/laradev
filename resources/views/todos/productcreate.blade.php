@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h3 class="text-warning text-center my-5">Producty details</h3>
      <form action="{{ route('myproduct.store')}}" method="post" enctype="multipart/form-data">
          @include('todos.productform')
          <button class="btn btn-primary" type="submit">Add Product</button>
      </form>
  </div>
</div>
@endsection