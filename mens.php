<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
    </head>

    <body>
        <?php require_once('header.php');?>

        <main id="mens-main">
            <h2>MEN'S FASHION</h2>
            <p>introductory paragraph on mens fashion</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <!-- TODO slideshow of products -->
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

        <div id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
            </ul>
        </div>

        <?php require_once('footer.php');?>
    </body>
</html>
        