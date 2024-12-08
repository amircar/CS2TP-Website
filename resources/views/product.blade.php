<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <!-- TODO move singleproduct js and css to main -->
    <link rel="stylesheet" href={{ asset('css/Single-Product-Style.css') }}>
    <script defer src={{ asset('js/Single-Product-Javascript.js') }}></script>

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>{{$product->name . " | Team 47"}}</title>
</head>

<body>
    @include('header')

    <!-- TODO ?clicking on a product adds it to mainview? -->

    <!-- FIXME id="product-main" -->
    <main id="singleProduct">

        <!-- FIXME can be a list instead of div -->
        <div id="preview">
            @foreach($product->product_images as $image)
            <div class="thumb">
                <img src="{{ asset($image->image_url) }}" alt="{{ $image->alt_text }}">
            </div>
            @endforeach
        </div>

        <div id="mainView">
            <div class="thumbnail">
                @foreach($product->product_images as $image)
                    @if($image->is_primary)
                        <img src="{{asset($image->image_url)}}" alt="{{ $image->alt_text }}">
                        @php
                            $found = true;
                        @endphp
                        @break
                    @endif
                @endforeach
            </div>
        </div>


        <!-- TODO should be a form submitted to basket -->

        <div id="productInfo">
            <h2 class=productName>{{$product->name}}</h1>
            <h4 class="price">£{{$product->price}}</h4>
            <h4 class="colourTitle">COLOUR</h4>
            <div class="colours">
                <span class="colour red" title="Red"></span>
                <span class="colour yellow" title="Yellow"></span>
                <span class="colour blue" title="Blue"></span>
                <span class="colour white" title="White"></span>
                <span class="colour black" title="Black"></span>
            </div>
            <h4 class="title">SIZE</h4>
            <div class="sizes">
                @foreach($product->sizes as $size)
                <span class="size">{{$size->size}}</span>
                @endforeach
            </div>


            @auth
                <a href="" class="Btn1">ADD TO BASKET</a>
                <a href="" class="Btn2">ADD TO WISHLIST</a>
            @else
                <a href="{{route('login')}}" class="Btn1">ADD TO BASKET</a>
                <a href="{{route('login')}}" class="Btn2">ADD TO WISHLIST</a>
            @endauth

    </main>

    <!-- Suggested Items / Item carousel -->
    <section id="suggestedChoices">
        <!-- FIXME move to css -->
        <div style="padding-left: 5%; font-size: 250%;">
            You might also like...
        </div>

        <!-- FIXME move to css -->
        <div style="height: 1px; background-color: black; margin-left: 5%; margin-right: 50%;"></div>
        <div id="carouselContainer" style="max-width: 90%;">
            <!-- FIXME move to js -->
            <button class="carousel-button prev" onclick="moveCarousel(-1)">&#10094;</button>
            <div id="carousel">
                @foreach ($products as $product)
                @foreach ($product->product_images as $image)
                <div class="carousel-item">
                    @if ($image->is_primary)
                    <img src={{asset($image->image_url)}} alt="suggested-product">
                    @endif
                </div>
                @endforeach
                @endforeach
            </div>
            <!-- FIXME move to js -->
            <button class="carousel-button next" onclick="moveCarousel(1)">&#10095;</button>
        </div>
    </section>

    @include('footer')
</body>

</html>