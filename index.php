<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>

        <!----------------------------
            SEO (optional)
        ----------------------------->
        <title>Team 47 Homepage</title>
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
            <!-- TODO image for testing -->
           
        </main>

        <div id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
            </ul>
        </div>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <div>
            <!-- FIXME categories section -->
        <div id="section">
            <div class="trapezoid1"></div>
            <div class="trapezoid1-rectangle">
                <button class="trapezoid-button" style="text-align: center; clip-path: polygon(0% 0%, 100% 0%, 95% 100%, 0% 100%);">MEN</button>
            </div>
            
            <div class="trapezoid2"></div>
            <div class="trapezoid2-rectangle">
                <button class="trapezoid-button" style="text-align: center; width: 315px;">WOMEN</button>
            </div>

            <div class="trapezoid3"></div>
            <div class="trapezoid3-rectangle">
            <button class="trapezoid-button" style="text-align: center; clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 5% 100%)">KIDS</button>
            </div>
            </div>
        </div>

        <?php require_once('footer.php');?>
    </body>
</html>