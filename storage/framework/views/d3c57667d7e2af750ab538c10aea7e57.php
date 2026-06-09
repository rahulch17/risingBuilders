<?php $__env->startSection('title', $service['name'].' – Rising Builders'); ?>
<?php $__env->startSection('meta_description', $service['short_description']); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="<?php echo e(asset('images/services/'.$service['hero_image'])); ?>" alt="<?php echo e($service['name']); ?>" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light"><?php echo e($service['category_label']); ?></p>
            <h1 class="page-hero-title"><?php echo e(strtoupper($service['name'])); ?></h1>
            <p class="page-hero-sub"><?php echo e($service['short_description']); ?></p>
        </div>
    </section>

    
    <section class="about">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">OVERVIEW</p>
                <h2 class="about-title"><?php echo e(strtoupper($service['name'])); ?></h2>
                <p class="about-desc"><?php echo e($service['full_description']); ?></p>
                <ul class="service-detail-list">
                    <?php $__currentLoopData = $service['highlights']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $highlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($highlight); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid mt-8 inline-block">
                    REQUEST A CONSULTATION
                </a>
            </div>
            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="<?php echo e(asset('images/services/'.$service['detail_image'])); ?>"
                     alt="<?php echo e($service['name']); ?>" class="about-img" loading="lazy"/>
            </div>
        </div>
    </section>

    
    <?php if($relatedProjects->isNotEmpty()): ?>
        <section class="portfolio">
            <div class="portfolio-inner">
                <p class="section-label">RELATED WORK</p>
                <h2 class="portfolio-title">Projects in <?php echo e($service['name']); ?></h2>
                <div class="portfolio-grid">
                    <?php $__currentLoopData = $relatedProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="portfolio-card reveal <?php echo e($index > 0 ? 'reveal-delay-'.$index : ''); ?>">
                            <img src="<?php echo e(asset('images/portfolio/'.$project['image'])); ?>"
                                 alt="<?php echo e($project['title']); ?>" loading="lazy"/>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag"><?php echo e($project['category']); ?></span>
                                <h3><?php echo e($project['title']); ?></h3>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">INTERESTED IN</span>
                <span class="cta-extraordinary"><?php echo e(strtoupper($service['name'])); ?>?</span>
            </h2>
            <p class="cta-sub">Talk to one of our specialists and get a tailored quote for your project.</p>
            <div class="cta-btns">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid-gold">GET A QUOTE</a>
                <a href="<?php echo e(route('services.index')); ?>" class="btn-outline-white">ALL SERVICES</a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/pages/services/show.blade.php ENDPATH**/ ?>