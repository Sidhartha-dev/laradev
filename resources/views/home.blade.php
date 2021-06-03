@extends('admin.homesetup')
@section('homepager')
<div class="back-body">
    <div class="cards">
         <h2>GIFT Cards</h2>
         <div class="each-cards" style="text-align: center">
            @if (count($pointusers)>0)
             @foreach ($pointusers as $point)
             <div class="each-card">
                <a href="{{route('point.show', $point->id)}}" class="point-id">
                    <div class="reward-card" data-id="{{$point->id}}" data-status="{{$point->point_status}}">
                        <h3 class="text-card">{{$point->points}} RACS</h3>
                    </div>
                </a>
            </div>
             @endforeach
             @else
                <strong>No Racs card available</strong>
             @endif
         </div>
    </div>
 </div>

@endsection
    