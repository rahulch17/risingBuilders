<?php $__env->startSection('title', 'Our Services – Rising Builders'); ?>
<?php $__env->startSection('meta_description', 'Explore Rising Builders\' core infrastructure expertise: Commercial, Residential, and Civil Engineering services.'); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="<?php echo e(asset('images/services-hero.png')); ?>" alt="Services" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">TECHNICAL DOMAINS</p>
            <h1 class="page-hero-title">CORE INFRASTRUCTURE<br>EXPERTISE</h1>
            <p class="page-hero-sub">Advanced computational design and sustainable materials to create high-performance structural systems.</p>
        </div>
    </section>

    
    <section class="services services-page">
        <div class="services-inner">
            <div class="services-grid services-grid--full">
                <?php $__empty_1 = true; $__currentLoopData = ($services ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="service-card <?php echo e($service['featured'] ? 'active' : ''); ?> reveal <?php echo e($index > 0 ? 'reveal-delay-'.($index % 3) : ''); ?>">
                        <div class="service-icon"><?php echo $service['icon_svg']; ?></div>
                        <h3><?php echo e($service['name']); ?></h3>
                        <p><?php echo e($service['short_description']); ?></p>
                        <ul>
                            <?php $__currentLoopData = $service['highlights']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $highlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($highlight); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <a href="<?php echo e(route('services.show', $service['slug'])); ?>" class="service-link">
                            DETAILS →
                        </a>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No services found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    
    <section class="about-stats-section" style="background:#f5f3ef; padding: 72px 48px;">
        <div class="services-inner">
            <div class="services-header reveal">
                <div>
                    <p class="section-label">HOW WE WORK</p>
                    <h2 class="services-title" style="color:#0a1628;">OUR PROCESS</h2>
                </div>
            </div>
            <div class="process-grid">
                <?php $__currentLoopData = $process; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="process-step reveal <?php echo e($index > 0 ? 'reveal-delay-'.$index : ''); ?>" style="background:#ffffff; padding:32px 24px; border:1px solid rgba(10,22,40,0.08);">
                <span class="process-number" style="color:rgba(10,22,40,0.07);"><?php echo e(str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)); ?></span>
                <h3 style="color:#0a1628;"><?php echo e($step['title']); ?></h3>
                <p style="color:#4a5568;"><?php echo e($step['description']); ?></p>
            </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">ENGINEER THE</span>
                <span class="cta-extraordinary">EXTRAORDINARY</span>
            </h2>
            <p class="cta-sub">Ready to start your next project? Our team is here to help.</p>
            <div class="cta-btns">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="<?php echo e(route('portfolio.index')); ?>" class="btn-outline-white">VIEW PROJECTS</a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/pages/services/index.blade.php ENDPATH**/ ?>