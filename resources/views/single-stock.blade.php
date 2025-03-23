<li class="product-card">

        @php
            $found = false;
            $product = $stock->product;
        @endphp

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

       
        <p class="product-title">{{$product->name}}</p>
        <p class="product-price">£ {{$product->price}}</p>
        <p class="product-size">Sizes: {{$stock->size->size}}</p>
        <p class="product-quantity">Current Quantity: {{$stock->quantity}}</p>

        <form action="quantity" method="POST">
            @csrf
            <input type="number" name ="quantity" min="0" value="{{ $stock->quantity }}" required>
            <input type="hidden" name="stock_id" value="{{$stock->id}}">
            <button type="submit" class="btn btn-primary">Update Quantity</button>
        </form>
</li>