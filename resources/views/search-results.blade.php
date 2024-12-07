<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
 
    
    <title>Team 47 Homepage</title>
    <!-- title should be category/product name from database on single/products page -->
    <meta name="description" content="">
    <!-- shown under title on search engine, changes based on product (may not always be needed for pages that do not need to be found on search engine (like wishlist)-->
    <!-- description = product desc -->
    <meta name="robots" content="index, follow">
    <!--for crawlers (no index, follow does not show up on search engine)-->
    <!-- OPEN GRAPH (for social media) -->
    <meta property="og:title" content="Team 47 Homepage">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Team 47">
    <meta property="og:image" content="">
    <!--url to image-->
    <meta property="og:image:width" content="1200">
    <!--min 1200 x 630-->
    <meta property="og:image:height" content="630">
</head>
<body>
    @include('header');
    <main id="home-main">
        <!-- TODO image for testing -->
    </main>
    <!-- section for displaying featured products  -->
    <div id="featured-products-list">
        <h2>SEARCHED PRODUCTS</h2>
        <ul class="products-list">
            @foreach ($products as $product)
            @include('single-product' , ['product' => $product])
            @endforeach
        </ul>
    </div>
    <body>
        @include('footer');
    </body>
</html>