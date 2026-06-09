<?php $__env->startSection('title', 'Rising Builders – Structural Mastery'); ?>
<?php $__env->startSection('meta_description', 'Engineering environments where progress lives. Rising Builders has been at the forefront of structural engineering for over 34 years.'); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="hero" id="home">
        <div class="hero-bg">
            <img src="<?php echo e(asset('images/hero-skyscraper.png')); ?>"
                 alt="Skyscraper under construction"
                 class="hero-img" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>

        <div class="hero-content">
            <p class="hero-since">— SINCE <?php echo e($company['founded']); ?></p>
        <h1 class="hero-title">
        STRUCTURAL <span class="mastery">MASTERY</span><br>
        ARCHITECTURAL LEGACY.
        </h1>
            <p class="hero-sub">
                Redefining the skylines of tomorrow through unparalleled precision<br>
                engineering and a relentless commitment to structural permanence.
            </p>
            <div class="hero-btns">
                <a href="<?php echo e(route('about')); ?>" class="btn-solid">EXPLORE OUR LEGACY</a>
                <a href="<?php echo e(route('portfolio.index')); ?>" class="btn-outline">VIEW PROJECTS</a>
            </div>
        </div>

    </section>

    
    <section class="about" id="about">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">PRECISION ENGINEERING</p>
                <h2 class="about-title">A DECADES-LONG LEGACY</h2>
                <p class="about-desc"><?php echo e($company['description']); ?></p>

                <div class="stats-grid">
                    <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="stat">
                            <span class="stat-num"><?php echo e($stat['value']); ?></span>
                            <span class="stat-label"><?php echo e($stat['label']); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="<?php echo e(asset('images/architectural-model.png')); ?>"
                     alt="Architectural Model"
                     class="about-img" loading="lazy"/>
                <div class="about-quote-box">
                    <p class="about-quote">"<?php echo e($company['quote']); ?>"</p>
                    <span class="about-quote-attr">— <?php echo e($company['quote_author']); ?></span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="services" id="services">
        <div class="services-inner">
            <div class="services-header reveal">
                <div>
                    <p class="section-label light">TECHNICAL DOMAINS</p>
                    <h2 class="services-title">CORE INFRASTRUCTURE<br>EXPERTISE</h2>
                </div>
                <p class="services-sub">
                    Applying advanced computational design and sustainable materials
                    to create high-performance structural systems.
                </p>
            </div>

            <div class="services-grid">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service-card <?php echo e($service['featured'] ? 'active' : ''); ?> reveal <?php echo e($index > 0 ? 'reveal-delay-'.$index : ''); ?>">
                        <div class="service-icon">
                            <?php echo $service['icon_svg']; ?>

                        </div>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="portfolio" id="portfolio">
        <div class="portfolio-inner">
            <p class="section-label">MILESTONES</p>
            <h2 class="portfolio-title">Landmark Portfolio</h2>

            <div class="portfolio-grid">

                
                <?php if($featuredProject = $projects->firstWhere('featured', true)): ?>
                    <div class="portfolio-card-apex reveal">
                        <img src="<?php echo e(asset('images/portfolio/'.$featuredProject['image'])); ?>"
                             alt="<?php echo e($featuredProject['title']); ?>" loading="lazy"/>
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag"><?php echo e($featuredProject['category']); ?></span>
                            <h3><?php echo e($featuredProject['title']); ?></h3>
                        </div>
                    </div>
                <?php endif; ?>

                
                <?php if($secondProject = $projects->skip(1)->first()): ?>
                    <div class="portfolio-card-emerald reveal reveal-delay-1">
                        <img src="<?php echo e(asset('images/portfolio/'.$secondProject['image'])); ?>"
                             alt="<?php echo e($secondProject['title']); ?>" loading="lazy"/>
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag"><?php echo e($secondProject['category']); ?></span>
                            <h3><?php echo e($secondProject['title']); ?></h3>
                        </div>
                    </div>
                <?php endif; ?>

                
                <div class="portfolio-bottom-row reveal reveal-delay-2">
                    <?php $__currentLoopData = $projects->skip(2)->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="portfolio-card-harbor">
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

            <div class="portfolio-cta">
                <a href="<?php echo e(route('portfolio.index')); ?>" class="btn-solid">VIEW ALL PROJECTS</a>
            </div>
        </div>
    </section>

    
    <section class="awards">
        <div class="awards-inner">
            <p class="section-label">GLOBAL RECOGNITION</p>
            <h2 class="awards-title">Honored by the Industry's Leading<br>Institutions</h2>

            <div class="awards-grid">
                <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="award-item reveal <?php echo e($index > 0 ? 'reveal-delay-'.$index : ''); ?>">
                        <div class="award-icon">
                            <?php echo $award['icon_svg']; ?>

                        </div>
                        <p><?php echo e($award['name']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="cta" id="contact">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">ENGINEER THE</span>
                <span class="cta-extraordinary">EXTRAORDINARY</span>
            </h2>
            <p class="cta-sub">
                Partner with the firm that understands the gravity of your vision.
                From initial feasibility to final structural certification, we build legacies.
            </p>
            <div class="cta-btns">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="<?php echo e(route('contact.index')); ?>#engineer" class="btn-outline-white">SPEAK TO AN ENGINEER</a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/pages/home.blade.php ENDPATH**/ ?>