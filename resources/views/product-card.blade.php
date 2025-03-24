<li class="product-card">
    <a href="product/{{$product->id}}">

        {{$found = false}}
        @foreach($product->product_images as $image)
            @if($image->is_primary)
                <img src="{{asset($image->image_url)}}" alt="{{ $image->alt_text }}">
                @php
                    $found = true;
                @endphp
                @break <!-- ends loop early to reduce time complexity -->
            @endif
        @endforeach

        <!-- if primary image is not found, add empty image to reserve space -->
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
        <div class="card-rating">
            <p class="product-rating">Average Rating:</p>
            @for($i = 1; $i <= 5; $i++)
                @if($i <= round($product->average_rating))
                    <span class="star filled">&#9733;</span>
                @else
                    <span class="star">&#9733;</span>
                @endif
            @endfor
        </div>
    </a>
</li>