<?php $__env->startSection('title', '404 – Page Not Found – Rising Builders'); ?>

<?php $__env->startSection('content'); ?>
    <section class="page-hero page-hero--short">
        <div class="page-hero-bg">
            <img src="<?php echo e(asset('images/hero-skyscraper.png')); ?>" alt="404" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content" style="text-align: center;">
            <p class="hero-since">— ERROR 404</p>
            <h1 class="page-hero-title">PAGE NOT<br>FOUND</h1>
            <p class="page-hero-sub">The page you're looking for doesn't exist or has been moved.</p>
            <div class="hero-btns" style="justify-content: center; margin-top: 2rem;">
                <a href="<?php echo e(route('home')); ?>" class="btn-solid">GO HOME</a>
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-outline">CONTACT US</a>
            </div>
        </div>
        <?php echo $__env->make('components.wave-divider', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/errors/404.blade.php ENDPATH**/ ?>