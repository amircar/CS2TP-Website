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
                <!-- FIXME does not need div for each image -->
                <div class="thumb">
                    <img src="images/black T shirt 2.jpg">
                </div>
                <div class="thumb">
                    <img src="images/black T shirt 3.jpg">
                </div>
                <div class="thumb">
                    <img src="images/black T shirt 4.jpg">
                </div>
                <div class="thumb">
                    <img src="images/black T shirt 5.jpg">
                </div>
            </div>


            <!-- FIXME change id/classes to remove camelCase -->
            <div id="mainView">
                <!-- FIXME does not need div for each image -->
                <div class="thumbnail">
                    <img src="images/black T shirt.jpg">
                </div>

            @auth
                <a href="" class="Btn1">ADD TO BASKET</a>
                <a href="" class="Btn2">ADD TO WISHLIST</a>
            @else
                <a href="{{route('login')}}" class="Btn1">ADD TO BASKET</a>
                <a href="{{route('login')}}" class="Btn2">ADD TO WISHLIST</a>
            @endauth

            <div id="basketBtn">


            </div>


            <!-- TODO should be a form submitted to basket -->

            <div id="productInfo">
                <h1 class=productName>{{$product->name}}</h1>
                <h4 class="price">£{{$product->price}}</h4>
                <h4 class="colourTitle">COLOUR</h4>
                <div class="colours">
                    <span class="colour red"></span>
                    <span class="colour yellow"></span>
                    <span class="colour blue"></span>
                    <span class="colour white"></span>
                    <span class="colour black"></span>
                </div>
                <h4 class="title">SIZE</h4>
                <div class="sizes">
                    @foreach($product->sizes as $size)
                        <span class="size">{{$size->size}}</span>
                    @endforeach
                </div>


                <!-- FIXME ?move a inside div? -->
                <a href="" class="Btn1">ADD TO BASKET</a>
                <a href="" class="Btn2">ADD TO WISHLIST</a>

                <div id="basketBtn">

                </div>

                <div id="wishlistBtn">

                </div>

            </div>
        </main>

        <!-- Suggested Items / Item carousel -->
        <section id="suggestedChoices">
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