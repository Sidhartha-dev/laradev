@extends('admin.homesetup')
@section('homepager')
<div class="back-body">
    <div class="cards">
         <h2>Completed RACS Cards</h2>
         <div class="each-cards" style="text-align: center">
            @if (count($pointComplete)>0)
             @foreach ($pointComplete as $point)
             <div class="each-card">
                <div class="reward-card" data-id="{{$point->id}}" data-status="{{$point->point_status}}">
                    <h3 class="text-pointss">{{$point->points}} RACS</h3>
                </div>
            </div>
             @endforeach
             @else
                <strong>No Racs card available</strong>
             @endif
         </div>
    </div>
 </div>

@endsection