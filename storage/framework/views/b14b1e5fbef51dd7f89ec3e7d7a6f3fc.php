
<nav class="navbar" id="navbar">
    <div class="nav-inner">
        <a href="<?php echo e(route('home')); ?>" class="nav-logo">RISING BUILDERS</a>

        <ul class="nav-links">
            <li>
                <a href="<?php echo e(route('home')); ?>"
                   class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('services.index')); ?>"
                   class="<?php echo e(request()->routeIs('services.*') ? 'active' : ''); ?>">
                    Services
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portfolio.index')); ?>"
                   class="<?php echo e(request()->routeIs('portfolio.*') ? 'active' : ''); ?>">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('about')); ?>"
                   class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">
                    About
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('contact.index')); ?>"
                   class="<?php echo e(request()->routeIs('contact.*') ? 'active' : ''); ?>">
                    Contact
                </a>
            </li>
        </ul>

        <a href="<?php echo e(route('contact.index')); ?>" class="btn-quote">GET A QUOTE</a>

        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>

    
    <div class="nav-mobile" id="nav-mobile">
        <a href="<?php echo e(route('home')); ?>">Home</a>
        <a href="<?php echo e(route('services.index')); ?>">Services</a>
        <a href="<?php echo e(route('portfolio.index')); ?>">Portfolio</a>
        <a href="<?php echo e(route('about')); ?>">About</a>
        <a href="<?php echo e(route('contact.index')); ?>">Contact</a>
        <a href="<?php echo e(route('contact.index')); ?>" class="btn-quote">GET A QUOTE</a>
    </div>
</nav>
<?php /**PATH D:\6th sem\risingBuilders\resources\views/partials/navbar.blade.php ENDPATH**/ ?>