
<footer class="footer">
    <div class="footer-inner">
        <a href="<?php echo e(route('home')); ?>" class="footer-logo">RISING BUILDERS</a>

        <div class="footer-links">
            <a href="<?php echo e(route('home')); ?>#privacy">Privacy Policy</a>
            <a href="<?php echo e(route('home')); ?>#terms">Terms of Service</a>
            <a href="<?php echo e(route('careers')); ?>">Careers</a>
            <a href="<?php echo e(route('home')); ?>#sitemap">Sitemap</a>
            <a href="<?php echo e(route('contact.index')); ?>">Contact</a>
        </div>

        <div class="footer-social">
            <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zm2-3a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                </svg>
            </a>
        </div>
    </div>

    <p class="footer-copy">
        © <?php echo e(date('Y')); ?> <?php echo e(config('app.company_name', 'Rising Builders')); ?>. Engineered For Excellence.
    </p>
</footer>
<?php /**PATH D:\6th sem\risingBuilders\resources\views/partials/footer.blade.php ENDPATH**/ ?>