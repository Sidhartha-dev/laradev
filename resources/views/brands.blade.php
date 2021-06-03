<div class="brand-component">
    @foreach ($brands as $brand)
    <div class="brand">
        <div class="imgbox">
            <img src="{{ asset('storage/' . $brand->brand_image)}}" alt="" class="brand-img">
        </div>
        <div class="content">
            <div>
                <h1>{{$brand->brand_details}}</h1>
                <p><a href="" class="go-affilate" target="blank">EXPLORE NOW -></a></p>
            </div>
        </div>
    </div>
    @endforeach
 </div>