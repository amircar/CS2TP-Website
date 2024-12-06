<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- FIXME laravel cannot find js (live server) -->
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>

        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Team 47 Homepage</title>
    </head>

    <body>
        @include('header')
        
        <main id="home-main">
            <!-- TODO image source -->
            <!-- TODO href (can link to category page) -->
            <a href="">
                <img src="images/home/largeImage.png" alt="main-image">
                <button id="home-main-button">FIND OUT MORE</button>
            </a>
        </main>

        <div id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
                @foreach ($products as $product)
                    @include('single-product' , ['product' => $product])
                @endforeach
            </ul>
        </div>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <!-- TODO href links for category pages -->
        <section id="home-categories">
            <div id="home-category1">

                <a href="{{route('mens')}}">
                    <img src="images/home/mens.png" alt="men-category-image">
                    <button class="home-category-button">MEN</button>
                </a>
            </div>
            <div id="home-category2">

                <a href="{{route('women')}}">
                    <button class="home-category-button">WOMEN</button>
                    <img src="images/home/womens.png" alt="women-category-image">
                </a>
            </div>
            <div id="home-category3">
                <a href="{{route('accessories')}}">
                    <img src="images/home/accessories.png" alt="accessories-category-image">
                    <button class="home-category-button">ACCESSORIES</button>
                </a>
            </div>
        </section>

        @include('footer')
    </body>
</html>