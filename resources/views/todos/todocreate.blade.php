@extends('layouts.app')

@section('content')
<div class="row">
  <h1 class="text-primary py-5">Category Create</h1>
  <div class="col-md-12">
      <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
          @include('todos.form')
          <button class="btn btn-primary" type="submit">Add category</button>
      </form>
  </div>
</div>
@endsection