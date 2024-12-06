<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
        <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
    </head>

    <body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        
        <main id="about-us-main">
            <div id="section" style="height:400px; background-color:white;"></div> <!--add image -->
            <div class="aboutus-box">
                    <h3>About Us</h3>
            </div>
            <div id="section" style="height:300px;">
                <span>
                    <h2>text</h2>
                    <p>text</p>
                    <p>text</p>
                    <p>text</p>
                    <p>text</p>
                </span>
            </div>

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <div class="about-us-2">
                <!-- add 3 rollover images so when user hovers the mouse, 
                text will appear and image will lose opacity a bit but still be visible. -->
                <span>
                    <h2>TITLE</h2>
                    <p>TEXT</p>
                </span>
                <img src="" alt="about-us-image">
            </div>

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <div class="about-us-1">
                <img src="" alt="about-us-image">
                <span>
                    <h2>TITLE</h2>
                    <p>TEXT</p>
                </span>
            </div>
        </main>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </body>
</html><?php /**PATH C:\xampp\htdocs\CS2TP-Website\resources\views/about-us.blade.php ENDPATH**/ ?>