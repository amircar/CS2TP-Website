<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Stock | Team 47</title>
    </head>

    <body>
        @include('header')

        <section id="featured-products-list">
            <h2>Stock</h2>
            <ul class="stock-list">
                @foreach ($stocks as $stock)
                    
                        @include('single-stock' , ['stock' => $stock])
                    
                @endforeach
            </ul>
        </section>

        @include('footer')
    </body>
</html>