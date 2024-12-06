<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <script defer type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
        <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <title>Shop for Men's Clothing | Team 47</title>
    </head>

    <body>
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- TODO men's paragraph -->
        <main id="men-main">
            <h2>MEN'S FASHION</h2>
            <p>introductory paragraph on mens fashion</p>
        </main>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <section id="featured-products-list">
            <h2>FEATURED IN MEN'S</h2>
            <ul class="products-list">
                <?php $__currentLoopData = $products4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('single-product' , ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </section>

        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\CS2TP-Website\resources\views/mens.blade.php ENDPATH**/ ?>