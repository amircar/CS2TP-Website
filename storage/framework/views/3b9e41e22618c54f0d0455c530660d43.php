<span class="single-product">
    <a href="product/<?php echo e($product->id); ?>">

        <?php echo e($found = false); ?>

        <?php $__currentLoopData = $product->product_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($image->is_primary): ?> 
                <img src="<?php echo e(asset($image->image_url)); ?>" alt="<?php echo e($image->alt_text); ?>">
                <?php
                    $found = true;
                ?>
                <?php break; ?> 
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($found == false): ?>
            <img src="" alt="product-image">
        <?php endif; ?>

        <?php echo e($productSizes = ""); ?>

        <?php $__currentLoopData = $product->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $productSizes .= $size->size . " ";
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <p class="product-title"><?php echo e($product->name); ?></p>
        <p class="product-price">£ <?php echo e($product->price); ?></p>
        <p class="product-size">Sizes: <?php echo e($productSizes); ?></p>
    </a>
</span><?php /**PATH C:\xampp\htdocs\CS2TP-Website\resources\views/single-product.blade.php ENDPATH**/ ?>