<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
        <title>Team 47 Homepage</title>
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
        
        <?php require_once 'footer.php' ?>
    </body>
</html>