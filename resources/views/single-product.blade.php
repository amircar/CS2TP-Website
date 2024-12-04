<!-- FIXME make whole span clickable -->
<span class="single-product">
    <!-- TODO image source -->
    @foreach($product->product_images as $image)
        @if($image->is_primary) 
            <img src="{{asset($image->image_url)}}" alt="{{ $image->alt_text }}">
        @endif
     @endforeach 
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

<!-- Name: Team 47 T Shirt
Price: £29.99
Sizes avalible: XS, S, M, L, XL

Product 2: Team 47 Joggers
Price: £44.99
Sizes Avalible: XS, S, M, L, XL

Product 3: Team 47 Sweatpants:
Price: £47.99
Sizes avalible: 6, 8, 10, 12. 14

Product 4: Team 47 Graphic Zip Up Hoodie
Price: £59.99
Sizes avalible: XS, S, M, L, XL -->