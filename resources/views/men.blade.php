<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Shop for Men's Clothing | Team 47</title>
    </head>

    <body>
        @include('header')

        <!-- TODO men's paragraph -->
        <main id="men-main">
            <h2>MEN'S FASHION</h2>
            <p>introductory paragraph on mens fashion</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="featured-products-list">
            <h2>FEATURED IN MEN'S</h2>
            <ul class="products-list">
                @foreach ($products4 as $product)
                    @include('single-product' , ['product' => $product])
                @endforeach
            </ul>
        </section>

        @include('footer')
    </body>
</html>