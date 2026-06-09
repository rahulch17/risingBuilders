{{-- resources/views/partials/navbar.blade.php --}}
<nav class="navbar" id="navbar">
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Rising Builders" class="nav-logo-img" />
        </a>

        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('services.index') }}"
                   class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
                    Services
                </a>
            </li>
            <li>
                <a href="{{ route('portfolio.index') }}"
                   class="{{ request()->routeIs('portfolio.*') ? 'active' : '' }}">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}"
                   class="{{ request()->routeIs('contact.*') ? 'active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>

        <a href="{{ route('contact.index') }}" class="btn-quote">GET A QUOTE</a>

        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>

    {{-- Mobile Drawer --}}
    <div class="nav-mobile" id="nav-mobile">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('services.index') }}">Services</a>
        <a href="{{ route('portfolio.index') }}">Portfolio</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact.index') }}">Contact</a>
        <a href="{{ route('contact.index') }}" class="btn-quote">GET A QUOTE</a>
    </div>
</nav>
