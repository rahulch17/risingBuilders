<?php $__env->startSection('title', 'About Us – Rising Builders'); ?>
<?php $__env->startSection('meta_description', 'Founded on the principles of architectural rigor and material science, Rising Builders has been at the forefront of structural engineering for over 34 years.'); ?>

<?php $__env->startSection('content'); ?>

    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="<?php echo e(asset('images/about-hero.png')); ?>" alt="About Rising Builders" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">OUR STORY</p>
            <h1 class="page-hero-title">A DECADES-LONG LEGACY</h1>
            <p class="page-hero-sub">Engineering environments where progress lives since <?php echo e($company['founded']); ?>.</p>
        </div>
    </section>

    
    <section class="about-mission">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">PRECISION ENGINEERING</p>
                <h2 class="about-title">WHO WE ARE</h2>
                <p class="about-desc"><?php echo e($company['description']); ?></p>
                <p class="about-desc mt-4"><?php echo e($company['mission']); ?></p>
            </div>
            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="<?php echo e(asset('images/architectural-model.png')); ?>"
                     alt="Architectural Model" class="about-img" loading="lazy"/>
                <div class="about-quote-box">
                    <p class="about-quote">"<?php echo e($company['quote']); ?>"</p>
                    <span class="about-quote-attr">— <?php echo e($company['quote_author']); ?></span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="about-stats-section">
        <div class="about-inner">
            <div class="stats-grid">
                <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="stat reveal">
                        <span class="stat-num"><?php echo e($stat['value']); ?></span>
                        <span class="stat-label"><?php echo e($stat['label']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="team-section">
        <div class="services-inner">
            <div class="services-header reveal">
                <div>
                    <p class="section-label">OUR PEOPLE</p>
                    <h2 class="services-title">MEET THE TEAM</h2>
                </div>
                <p class="services-sub">World-class engineers, architects and project managers united by a commitment to structural excellence.</p>
            </div>
            <div class="team-grid">
                <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="team-card reveal <?php echo e($index > 0 ? 'reveal-delay-'.$index : ''); ?>">
                        <img src="<?php echo e(asset('images/team/'.$member['photo'])); ?>"
                             alt="<?php echo e($member['name']); ?>" loading="lazy"/>
                        <div class="team-info">
                            <h3><?php echo e($member['name']); ?></h3>
                            <p class="team-role"><?php echo e($member['role']); ?></p>
                            <p class="team-bio"><?php echo e($member['bio']); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <div class="award-icon"><?php echo $award['icon_svg']; ?></div>
                        <p><?php echo e($award['name']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">READY TO BUILD</span>
                <span class="cta-extraordinary">TOGETHER?</span>
            </h2>
            <p class="cta-sub">Reach out today and let's discuss how Rising Builders can bring your vision to life.</p>
            <div class="cta-btns">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn-solid-gold">GET IN TOUCH</a>
                <a href="<?php echo e(route('services.index')); ?>" class="btn-outline-white">OUR SERVICES</a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/pages/about.blade.php ENDPATH**/ ?>