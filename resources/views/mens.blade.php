<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }}">
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
    </head>

    <body>
    @include('header');

        <main id="mens-main">
            <h2>MEN'S FASHION</h2>
            <p>introductory paragraph on mens fashion</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <!-- TODO slideshow of products -->
        <div id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
                @include('test');
                @foreach ($products3 as $product)
                    @include('single-product' , ['product' => $product])
                @endforeach
            </ul>
        </div>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <div id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
            @foreach ($products4 as $product)
                    @include('single-product' , ['product' => $product])
                @endforeach
            </ul>
        </div>

        @include('footer');
    </body>
</html>
        