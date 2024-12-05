<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <title>Shop for Women's Clothing | Team 47</title>
    </head>

    <body>
        @include('header')

        <!-- TODO women's paragraph -->
        <main id="women-main">
            <h2>WOMEN'S FASHION</h2>
            <p>introductory paragraph on womens fashion</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="featured-products-list">
            <h2>FEATURED IN WOMEN'S</h2>
            <ul class="products-list">
                @foreach ($products4 as $product)
                    @include('single-product' , ['product' => $product])
                @endforeach
            </ul>
        </section>

        @include('footer')
    </body>
</html>