<header>
    <div id="header-wrapper">

        <a id="main-logo" href="<?php echo e(route('home')); ?>" title="Home"><img src=<?php echo e(asset("images/logo.png")); ?> alt="Logo"></a>

        <ul id="header-items">
            <?php if(auth()->guard()->check()): ?>
                <a class="header-item">
                    <li><form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger">Logout</button>
                    </form></li>
                </a>
                <a class="header-item" href="">
                    <li><img src="" alt="profile" title="Profile"></li>
                </a>
                <a class="header-item" href="<?php echo e(route('basket')); ?>">
                    <li><img src="" alt="basket" title="Basket"></li>
                </a>
            <?php else: ?>
                <a class="header-item" href="<?php echo e(route('register')); ?>">
                    <li><p>Sign Up</p></li>
                </a>
                <a class="header-item" href="<?php echo e(route('login')); ?>">
                    <li><p>Log In</p></li>
                </a>
            <?php endif; ?>
        </ul>
    </div>

    <nav>
        <ul id="nav-items">

            <a class="nav-item" href="<?php echo e(route('mens')); ?>">
                <li>MEN</li>
            </a>
            <a class="nav-item" href="<?php echo e(route('women')); ?>">
                <li>WOMEN</li>
            </a>
            <a class="nav-item" href="<?php echo e(route('kids')); ?>">
                <li>KIDS</li>
            </a>
            <a class="nav-item" href="<?php echo e(route('accessories')); ?>">
                <li>ACCESSORIES</li>
            </a>
            <a class="nav-item" href="<?php echo e(route('about-us')); ?>">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>

<button id="back-to-top" type="button">TOP</button><?php /**PATH C:\xampp\htdocs\CS2TP-Website\resources\views/header.blade.php ENDPATH**/ ?>