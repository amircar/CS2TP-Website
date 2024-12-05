<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <title>Shop for Accessories | Team 47</title>
    </head>

    <body>
        @include('header')

        <!-- TODO accessories paragraph -->
        <main id="accessories-main">
            <h2>OUR ACCESSORIES</h2>
            <p>introductory paragraph on accessories</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="featured-products-list">
            <h2>FEATURED IN ACCESSORIES</h2>
            <ul class="products-list">
                <!-- TODO product list -->
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
            </ul>
        </section>

        @include('footer')
    </body>
</html>