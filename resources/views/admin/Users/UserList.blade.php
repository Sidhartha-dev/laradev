@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="row">
    <h2 class="py-3">
        Users Lists
    </h2>
    <div class="col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">User Type</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr class="">
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td class="badge badge-success rounded-pill my-1 ml-2">{{$user->user_type}}</td>
            </tr>
            @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection