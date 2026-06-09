<?php $__env->startSection('title', $project['title'].' – Rising Builders Portfolio'); ?>
<?php $__env->startSection('meta_description', $project['description']); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="<?php echo e(asset('images/portfolio/'.$project['image'])); ?>"
                 alt="<?php echo e($project['title']); ?>" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light"><?php echo e($project['category']); ?></p>
            <h1 class="page-hero-title"><?php echo e(strtoupper($project['title'])); ?></h1>
            <p class="page-hero-sub"><?php echo e($project['location']); ?> · <?php echo e($project['year']); ?></p>
        </div>
    </section>

    
    <section class="about">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">PROJECT OVERVIEW</p>
                <h2 class="about-title"><?php echo e(strtoupper($project['title'])); ?></h2>
                <p class="about-desc"><?php echo e($project['description']); ?></p>
                <div class="stats-grid" style="margin-top: 2rem;">
                    <div class="stat">
                        <span class="stat-num"><?php echo e($project['year']); ?></span>
                        <span class="stat-label">YEAR COMPLETED</span>
                    </div>
                    <div class="stat">
                        <span class="stat-num"><?php echo e($project['location']); ?></span>
                        <span class="stat-label">LOCATION</span>
                    </div>
                </div>
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid-gold" style="margin-top: 2rem; display: inline-block;">
                    DISCUSS A SIMILAR PROJECT
                </a>
            </div>
            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="<?php echo e(asset('images/portfolio/'.$project['image'])); ?>"
                     alt="<?php echo e($project['title']); ?>" class="about-img" loading="lazy"/>
            </div>
        </div>
    </section>

    
    <?php if($relatedProjects->isNotEmpty()): ?>
        <section class="portfolio">
            <div class="portfolio-inner">
                <p class="section-label">MORE PROJECTS</p>
                <h2 class="portfolio-title">Related Work</h2>
                <div class="portfolio-grid">
                    <?php $__currentLoopData = $relatedProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="portfolio-card reveal <?php echo e($index > 0 ? 'reveal-delay-'.$index : ''); ?>">
                            <img src="<?php echo e(asset('images/portfolio/'.$related['image'])); ?>"
                                 alt="<?php echo e($related['title']); ?>" loading="lazy"/>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag"><?php echo e($related['category']); ?></span>
                                <h3><?php echo e($related['title']); ?></h3>
                                <a href="<?php echo e(route('portfolio.show', $related['slug'])); ?>" class="portfolio-view-btn">
                                    VIEW PROJECT →
                                </a>
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
                <span class="cta-engineer">ENGINEER THE</span>
                <span class="cta-extraordinary">EXTRAORDINARY</span>
            </h2>
            <p class="cta-sub">Inspired by what we've built? Let's talk about your next landmark project.</p>
            <div class="cta-btns">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="<?php echo e(route('portfolio.index')); ?>" class="btn-outline-white">VIEW ALL PROJECTS</a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/pages/portfolio/show.blade.php ENDPATH**/ ?>