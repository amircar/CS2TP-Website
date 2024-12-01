<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
        <title>Shop for Kid's Clothing | Team 47</title>
    </head>

    <body>
        <?php require_once('header.php');?>

        <!-- TODO kid's paragraph -->
        <main id="kids-main">
            <h2>KID'S FASHION</h2>
            <p>introductory paragraph on kids fashion</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="featured-products-list">
            <h2>FEATURED IN KID'S</h2>
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
        