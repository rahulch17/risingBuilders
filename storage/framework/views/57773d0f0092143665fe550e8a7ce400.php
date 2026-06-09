<?php $__env->startSection('title', 'Contact Us – Rising Builders'); ?>
<?php $__env->startSection('meta_description', 'Get in touch with Rising Builders. Start your project, request a quote, or speak directly with one of our engineers.'); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="page-hero page-hero--short">
        <div class="page-hero-bg">
            <img src="<?php echo e(asset('images/contact-hero.png')); ?>" alt="Contact Us" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">REACH OUT</p>
            <h1 class="page-hero-title">LET'S BUILD<br>TOGETHER</h1>
            <p class="page-hero-sub">Our team is ready to discuss your next landmark project.</p>
        </div>
    </section>

    
    <section class="contact-section">
        <div class="contact-inner">

            
            <div class="contact-info reveal">
                <p class="section-label">GET IN TOUCH</p>
                <h2 class="about-title">CONTACT INFORMATION</h2>

                <div class="contact-details">
                    <div class="contact-detail-item">
                        <span class="contact-icon">📍</span>
                        <div>
                            <strong>Address</strong>
                            <p><?php echo e($contactInfo['address']); ?></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <span class="contact-icon">📞</span>
                        <div>
                            <strong>Phone</strong>
                            <p><a href="tel:<?php echo e($contactInfo['phone']); ?>"><?php echo e($contactInfo['phone']); ?></a></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <span class="contact-icon">✉️</span>
                        <div>
                            <strong>Email</strong>
                            <p><a href="mailto:<?php echo e($contactInfo['email']); ?>"><?php echo e($contactInfo['email']); ?></a></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <span class="contact-icon">🕐</span>
                        <div>
                            <strong>Office Hours</strong>
                            <p><?php echo e($contactInfo['hours']); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="contact-form-wrap reveal reveal-delay-1" id="engineer">

                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <p class="section-label">SEND A MESSAGE</p>
                <h2 class="about-title">START YOUR PROJECT</h2>

                <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="contact-form" novalidate>
                    <?php echo csrf_field(); ?>

                    <div class="form-row">
                        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name"
                                   value="<?php echo e(old('name')); ?>"
                                   placeholder="Your full name" required>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="form-error"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email"
                                   value="<?php echo e(old('email')); ?>"
                                   placeholder="your@email.com" required>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="form-error"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                   value="<?php echo e(old('phone')); ?>"
                                   placeholder="+1 (555) 000-0000">
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="form-error"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('service') ? 'has-error' : ''); ?>">
                            <label for="service">Service of Interest</label>
                        <select id="service" name="service" onchange="toggleOtherService(this)">
                            <option value="">Select a service</option>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($service['slug']); ?>"
                                    <?php echo e(old('service') === $service['slug'] ? 'selected' : ''); ?>>
                                    <?php echo e($service['name']); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <option value="other" <?php echo e(old('service') === 'other' ? 'selected' : ''); ?>>
                                Other
                            </option>
                        </select>

<div id="other-service-box" style="display:none; margin-top:12px;">
    <label for="other_service">Please specify *</label>
    <textarea id="other_service" name="other_service"
              rows="3"
              placeholder="Tell us what service you need..."><?php echo e(old('other_service')); ?></textarea>
</div>
                            <?php $__errorArgs = ['service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="form-error"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
                        <label for="message">Project Details *</label>
                        <textarea id="message" name="message" rows="5"
                                  placeholder="Tell us about your project..." required><?php echo e(old('message')); ?></textarea>
                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="form-error"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="submit" class="btn-solid-gold btn-full">
                        SEND MESSAGE →
                    </button>
                </form>
            </div>

        </div>
    </section>
    
<section class="map-section">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4010.850883314349!2d85.33556787595197!3d27.70207557618559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1900240b98e1%3A0x9484a4a269c20db1!2sRising%20Builders%20%26%20Engineers%20Pvt.%20Ltd.!5e1!3m2!1sen!2snp!4v1780995338761!5m2!1sen!2snp"
        width="100%"
        height="480"
        style="border:0; display:block;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>
<?php $__env->startPush('scripts'); ?>
<script>
    function toggleOtherService(select) {
        const box = document.getElementById('other-service-box');
        box.style.display = select.value === 'other' ? 'block' : 'none';
    }
    // keep visible on validation error reload
    document.addEventListener('DOMContentLoaded', function () {
        const select = document.getElementById('service');
        if (select.value === 'other') {
            document.getElementById('other-service-box').style.display = 'block';
        }
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\6th sem\risingBuilders\resources\views/pages/contact/index.blade.php ENDPATH**/ ?>