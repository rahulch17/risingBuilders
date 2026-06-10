<?php $__env->startSection('title', 'Portfolio – Rising Builders'); ?>
<?php $__env->startSection('meta_description', 'Explore Rising Builders\' landmark portfolio of commercial, residential and civil infrastructure projects.'); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="<?php echo e(asset('images/portfolio-hero.png')); ?>" alt="Our Portfolio" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">MILESTONES</p>
            <h1 class="page-hero-title">LANDMARK PORTFOLIO</h1>
            <p class="page-hero-sub">Over 450 projects completed across commercial, residential and civil infrastructure.</p>
        </div>
    </section>

    
    <section class="portfolio portfolio-page">
        <div class="portfolio-inner">

            <div class="portfolio-filters reveal">
                <button class="filter-btn active" data-filter="all">ALL</button>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button class="filter-btn" data-filter="<?php echo e(Str::slug($category)); ?>">
                        <?php echo e($category); ?>

                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="portfolio-grid portfolio-grid--all" id="portfolio-grid">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="portfolio-card reveal <?php echo e($index > 0 ? 'reveal-delay-'.($index % 3) : ''); ?>"
                         data-category="<?php echo e(Str::slug($project['category'])); ?>">
                        <img src="<?php echo e(asset('images/portfolio/'.$project['image'])); ?>"
                             alt="<?php echo e($project['title']); ?>" loading="lazy"/>
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag"><?php echo e($project['category']); ?></span>
                            <h3><?php echo e($project['title']); ?></h3>
                            <a href="<?php echo e(route('portfolio.show', $project['slug'])); ?>" class="portfolio-view-btn">
                                VIEW PROJECT →
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="portfolio-pagination">
                <?php echo e($projects->links()); ?>

            </div>
        </div>
    </section>

    
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">YOUR PROJECT</span>
                <span class="cta-extraordinary">STARTS HERE</span>
            </h2>
            <p class="cta-sub">Let's discuss your vision and build something extraordinary together.</p>
            <div class="cta-btns">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="<?php echo e(route('services.index')); ?>" class="btn-outline-white">OUR SERVICES</a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // Client-side filter
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.dataset.filter;
            document.querySelectorAll('.portfolio-card').forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/pages/portfolio/index.blade.php ENDPATH**/ ?>