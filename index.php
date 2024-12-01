<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
        <title>Team 47 Homepage</title>
        <!----------------------------
            TODO SEO (optional) NOT MVP
        ----------------------------->
        <!-- title should be category/product name from database on single/products page -->
        <meta name="description" content=""> <!-- shown under title on search engine, changes based on product (may not always be needed for pages that do not need to be found on search engine (like wishlist)-->
        <!-- description = product desc -->
        <meta name="robots" content="index, follow"> <!--for crawlers (no index, follow does not show up on search engine)-->
        <!-- OPEN GRAPH (for social media) -->
        <meta property="og:title" content="Team 47 Homepage">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:locale" content="en_GB">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Team 47">
        <meta property="og:image" content=""> <!--url to image-->
        <meta property="og:image:width" content="1200"> <!--min 1200 x 630-->
        <meta property="og:image:height" content="630">
    </head>

    <body>
        <?php require_once('header.php');?>
        
        <main id="home-main">
            <!-- TODO image source -->
            <a href="men.php">
                <img src="" alt="main-image">
                <button id="home-main-button">FIND OUT MORE</button>
            </a>
        </main>

        <section id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
            </ul>
        </section>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="home-categories">
            <div id="home-category1">
                <a href="men.php">
                    <img src="" alt="men-category-image">
                    <button class="home-category-button">MEN</button>
                </a>
            </div>
            <div id="home-category2">
                <a href="women.php">
                    <button class="home-category-button">WOMEN</button>
                    <img src="" alt="women-category-image">
                </a>
            </div>
            <div id="home-category3">
                <a href="accessories.php">
                    <img src="" alt="accessories-category-image">
                    <button class="home-category-button">ACCESSORIES</button>
                </a>
            </div>
        </section>

        <?php require_once('footer.php');?>
    </body>
</html>