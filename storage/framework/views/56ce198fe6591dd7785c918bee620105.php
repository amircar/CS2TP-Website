<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Product Page</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href=<?php echo e(asset('css/Single-Product-Style.css')); ?>>
<script src=<?php echo e(asset('js/Single-Product-Javascript.js')); ?>></script>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<button id="back-to-top" type="button">TOP</button>

<body>
    <section id="singleProduct">
        <div id="preview">
            <div class="thumb">
                <img src="images/black T shirt 2.jpg">
            </div>
            <div class="thumb">
                <img src="images/black T shirt 3.jpg">
            </div>
            <div class="thumb">
                <img src="images/black T shirt 4.jpg">
            </div>
            <div class="thumb">
                <img src="images/black T shirt 5.jpg">
            </div>
        </div>

        <div id="mainView">
            <div class="thumbnail">
                <img src="images/black T shirt.jpg">
            </div>
        </div>

        <div id="productInfo">
            <h1 class=productName>Team 47 T Shirt</h1>
            <h4 class="price">£29.99</h4>
            <h4 class="colourTitle">COLOUR</h4>
            <div class="colours">
                <span class="colour red"></span>
                <span class="colour yellow"></span>
                <span class="colour blue"></span>
                <span class="colour white"></span>
                <span class="colour black"></span>
            </div>
            <h4 class="title">SIZE</h4>
            <div class="sizes">
                <span class="size">XS</span>
                <span class="size">S</span>
                <span class="size">M</span>
                <span class="size">L</span>
                <span class="size">XL</span>
            </div>

            <a href="" class="Btn1">ADD TO BASKET</a>
            <a href="" class="Btn2">ADD TO WISHLIST</a>

            <div id="basketBtn">

            </div>

            <div id="wishlistBtn">

            </div>

        </div>
    </section>

    <!-- Suggested Items /  Item carousel -->
    <section id="suggestedChoices">
        <div style="padding-left: 5%; font-size: 250%;">
            You might also like...
        </div>
        <div style="height: 1px; background-color: black; margin-left: 5%; margin-right: 50%;"></div>
        <div id="carouselContainer" style="max-width: 90%;">
            <button class="carousel-button prev" onclick="moveCarousel(-1)">&#10094;</button>
            <div id="carousel">
                <div class="carousel-item">
                    <img src="images/black T shirt 2.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 3.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 2.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 3.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 2.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 3.jpg" alt="Suggested Product">
                </div>
            </div>
            <button class="carousel-button next" onclick="moveCarousel(1)">&#10095;</button>
        </div>
    </section>


</body>



<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

</html><?php /**PATH C:\xampp\htdocs\CS2TP-Website\resources\views/product.blade.php ENDPATH**/ ?>