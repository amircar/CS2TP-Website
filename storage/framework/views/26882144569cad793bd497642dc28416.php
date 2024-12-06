<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

        <!-- FIXME laravel cannot find js (live server) -->
        <script defer type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>

        <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <title>Team 47 Homepage</title>
    </head>

    <body>
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <main id="home-main">
            <!-- TODO image source -->
            <!-- TODO href (can link to category page) -->
            <a href="">
                <img src="images/wanwan.jpg" alt="main-image">
                <button id="home-main-button">FIND OUT MORE</button>
            </a>
        </main>

        <div id="featured-products-list">
            <h2>FEATURED PRODUCTS</h2>
            <ul class="products-list">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('single-product' , ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <!-- TODO href links for category pages -->
        <section id="home-categories">
            <div id="home-category1">

                <a href="<?php echo e(route('mens')); ?>">
                    <img src="" alt="men-category-image">
                    <button class="home-category-button">MEN</button>
                </a>
            </div>
            <div id="home-category2">

                <a href="<?php echo e(route('women')); ?>">
                    <button class="home-category-button">WOMEN</button>
                    <img src="images/wanwan.jpg" alt="women-category-image">
                </a>
            </div>
            <div id="home-category3">
                <a href="<?php echo e(route('accessories')); ?>">
                    <img src="" alt="accessories-category-image">
                    <button class="home-category-button">ACCESSORIES</button>
                </a>
            </div>
        </section>

        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\CS2TP-Website\resources\views/home.blade.php ENDPATH**/ ?>