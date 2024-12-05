<!-- FIXME make whole span clickable -->
<span class="single-product">
    {{$found = false}}
    @foreach($product->product_images as $image)
        @if($image->is_primary) 
            <img src="{{asset($image->image_url)}}" alt="{{ $image->alt_text }}">
            @php
                $found = true;
            @endphp
            @break
        @endif
    @endforeach

    {{-- if not primary image is found, add empty image to reserve space --}}
    @if($found == false)
        <img src="" alt="product-image">
    @endif

    {{$productSizes = ""}}
    @foreach($product->sizes as $size)
        @php
            $productSizes .= $size->size . " ";
        @endphp
    @endforeach 
    <p class="product-title">{{$product->name}}</p>
    <p class="product-price">£ {{$product->price}}</p>
    <p class="product-size">Sizes: {{$productSizes}}</p>
</span>