<div class="pt-2"> 
    @foreach ($categoryProducts as $item)
    <div class="category-product my-3">
        <div class="category-search">
            <img src="{{ asset('storage/' . $item->category_img) }}" alt="" style="height: 50px; width:50px">
            <h2 class="py-3">{{$item->name}}</h2>
        </div>
        <div class="prods">
         @if (count($item->products)>0)
            @foreach ($item->products as $ptm)
                <div class="cont-product">
                    <a href="{{route('product.show', $ptm->slug)}}">
                    <img src="{{ asset('storage/' . $ptm->flipkart_image)}}" alt="" class="adjustimg">
                </a>
                </div>
            @endforeach
        @else
        <p>No products avail able</p>
        @endif
    </div>
    </div>
    @endforeach
</div>
