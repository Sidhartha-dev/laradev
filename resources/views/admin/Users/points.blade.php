@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="container">
<div class="row">
    <h2 class="py-3">
        Points Lists
    </h2>
    <div class="col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Point</th>
                <th scope="col">Point holder</th>
                <th scope="col">Point Holder Email</th>
                <th scope="col">Point Activation</th>
                <th scope="col">
                  <a href="{{route("point.add")}}" class="btn btn-primary">
                  Point Add
                  </a>
                </th>
              </tr>
            </thead>
            <tbody>
            @if (count($points)>0)
            @foreach ($points as $point)
            <tr class="">
                <th scope="row">{{$point->id}}</th>
                <td>{{$point->points}} pts</td>
                <td>{{$point->user->name}}</td>
                <td>{{$point->user->email}}</td>
                <td>{{$point->point_status ? 'yes' : 'no'}}</td>
                <td>
                  <form action="{{route('point.destroy', $point->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                  {{-- <a href="{{route('product.destroy', ['product'=>$product])}}" class="btn btn-danger">Delete</a> --}}
                </td>
            </tr>
            @endforeach
                
            @else
                <strong>No Racs card available</strong>
            @endif   
            </tbody>
          </table>
    </div>
</div>
<div class="row">
  <div class="col-md-12 d-flex justify-content-center pt-4">
    {{$points->links()}}
  </div>
</div>
</div>
@endsection