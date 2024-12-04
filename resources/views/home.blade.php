<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        <!-- FIXME laravel not finding javascript -->
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        
        <title>Team 47 Homepage</title>
    </head>

    <body>
        @include('header')
        
        <main id="home-main">
            <!-- TODO route (can link to category page) -->
            <a href="">
                <!-- TODO image source -->
                <img src="images\image1.png" alt="main-image">
                <button id="home-main-button">FIND OUT MORE</button>
            </a>
        </main>

        <section id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
                @foreach ($products as $product)
                    @include('single-product' , ['product' => $product])
                @endforeach
            </ul>
        </section>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <!-- TODO href links -->
        <section id="home-categories">
            <div id="home-category1">
                <a href="men.php">
                    <img src="images\image1.png" alt="men-category-image">
                    <button class="home-category-button">MEN</button>
                </a>
            </div>
            <div id="home-category2">
                <a href="women.php">
                    <button class="home-category-button">WOMEN</button>
                    <img src="images\image.png" alt="women-category-image">
                </a>
            </div>
            <div id="home-category3">
                <a href="accessories.php">
                    <img src="images\image1.png" alt="accessories-category-image">
                    <button class="home-category-button">ACCESSORIES</button>
                </a>
            </div>
        </section>

        @include('footer')
    </body>
</html>