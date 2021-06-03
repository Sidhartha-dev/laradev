@extends('admin.homesetup')
@section('homepager')
<div class="model">
    <div class="model-body">
        <div class="model-card">
            <div class="sket-card">
                <h1 class="skatchitm">{{$point->points}} RACS</h1>
            </div>
            <p class="instructor">To get reward click the card</p>
            <form action="{{ route('point.update', $point->id) }}" method="POST">
                @method('PUT')
                <input type="hidden" name="points" value="{{$point->points}}">
                <input type="hidden" name="point_status" value="1" >
                <input type="hidden" name="recieving_email" value="{{auth()->user()->email}}" >
                 @csrf
                <button class="money-info" type="submit">Collect Point</button>
            </form>
        </div>
    </div>
</div>
@endsection