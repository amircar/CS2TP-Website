<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Team 47 | Shop for Clothing & Accessories </title>
    </head>

    <body data-text-size="normal">
        @include('header')
        
        <main id="home-main">
            <a href="{{ route('men') }}">
                <img src="images/home/largeImage.png" alt="main-image">
                <button id="home-main-button">FIND OUT MORE</button>
            </a>
        </main>

        <section id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>

            <ul class="products-list">
                @foreach ($products as $product)
                    @include('product-card' , ['product' => $product])
                @endforeach
            </ul>
        </section>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="home-categories">
            <div id="home-category1">
                <a href="{{ route('men') }}">
                    <img src="images/home/mens.png" alt="men-category-image">
                    <button class="home-category-button">MEN</button>
                </a>
            </div>
            <div id="home-category2">
                <a href="{{ route('women') }}">
                    <button class="home-category-button">WOMEN</button>
                    <img src="images/home/womens.png" alt="women-category-image">
                </a>
            </div>
            <div id="home-category3">
                <a href="{{ route('accessories') }}">
                    <img src="images/home/accessories.png" alt="accessories-category-image">
                    <button class="home-category-button">ACCESSORIES</button>
                </a>
            </div>
        </section>

        @include('footer')
    </body>

    @if(session('message'))
        <div class="alert alert-danger">
            <script>
                window.onload = function () {
                alert('{{ session('message') }}')
                    
                }
            </script>
        </div>
    @endif
</html>