<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Search results | Team 47</title>
    </head>

    <body>
        @include('header')

        <main id="home-main">
        </main>

        <section id="featured-products-list">
            <h2>SEARCHED PRODUCTS</h2>
            <ul class="products-list">
                @foreach ($products as $product)
                    @include('single-product' , ['product' => $product])
                @endforeach
            </ul>
        </section>

        @include('footer')
    </body>
</html>