@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h3 class="text-warning text-center my-5">Point details</h3>
      <form action="{{ route('points.store')}}" method="post" enctype="multipart/form-data">
          @include('admin.Users.pointform')
          <button class="btn btn-primary" type="submit">Add Point</button>
      </form>
  </div>
</div>
</div>
@endsection