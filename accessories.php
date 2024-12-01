<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
        <title>Shop for Accessories | Team 47</title>
    </head>

    <body>
        <?php require_once('header.php');?>

        <!-- TODO accessories paragraph -->
        <main id="accessories-main">
            <h2>OUR ACCESSORIES</h2>
            <p>introductory paragraph on accessories</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="featured-products-list">
            <h2>FEATURED IN ACCESSORIES</h2>
            <ul class="products-list">
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
                <?php include('single-product.php');?>
            </ul>
        </section>

        <?php require_once('footer.php');?>
    </body>
</html>
        