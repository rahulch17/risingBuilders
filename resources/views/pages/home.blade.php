{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Rising Builders – Structural Mastery')
@section('meta_description', 'Engineering environments where progress lives. Rising Builders has been at the forefront of structural engineering for over 34 years.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="hero" id="home">
        <div class="hero-bg">
            <img src="{{ asset('images/hero-skyscraper.png') }}"
                 alt="Skyscraper under construction"
                 class="hero-img" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>

        <div class="hero-content">
            <p class="hero-since">— SINCE {{ $company['founded'] }}</p>
        <h1 class="hero-title">
        STRUCTURAL <span class="mastery">MASTERY</span><br>
        ARCHITECTURAL LEGACY.
        </h1>
            <p class="hero-sub">
                Redefining the skylines of tomorrow through unparalleled precision<br>
                engineering and a relentless commitment to structural permanence.
            </p>
            <div class="hero-btns">
                <a href="{{ route('about') }}" class="btn-solid">EXPLORE OUR LEGACY</a>
                <a href="{{ route('portfolio.index') }}" class="btn-outline">VIEW PROJECTS</a>
            </div>
        </div>

    </section>

    {{-- ==================== ABOUT SNIPPET ==================== --}}
    <section class="about" id="about">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">PRECISION ENGINEERING</p>
                <h2 class="about-title">A DECADES-LONG LEGACY</h2>
                <p class="about-desc">{{ $company['description'] }}</p>

                <div class="stats-grid">
                    @foreach ($stats as $stat)
                        <div class="stat">
                            <span class="stat-num">{{ $stat['value'] }}</span>
                            <span class="stat-label">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="{{ asset('images/architectural-model.png') }}"
                     alt="Architectural Model"
                     class="about-img" loading="lazy"/>
                <div class="about-quote-box">
                    <p class="about-quote">"{{ $company['quote'] }}"</p>
                    <span class="about-quote-attr">— {{ $company['quote_author'] }}</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== SERVICES PREVIEW ==================== --}}
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
                @foreach ($services as $index => $service)
                    <div class="service-card {{ $service['featured'] ? 'active' : '' }} reveal {{ $index > 0 ? 'reveal-delay-'.$index : '' }}">
                        <div class="service-icon">
                            {!! $service['icon_svg'] !!}
                        </div>
                        <h3>{{ $service['name'] }}</h3>
                        <p>{{ $service['short_description'] }}</p>
                        <ul>
                            @foreach ($service['highlights'] as $highlight)
                                <li>{{ $highlight }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('services.show', $service['slug']) }}" class="service-link">
                            DETAILS →
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== PORTFOLIO PREVIEW ==================== --}}
    <section class="portfolio" id="portfolio">
        <div class="portfolio-inner">
            <p class="section-label">MILESTONES</p>
            <h2 class="portfolio-title">Landmark Portfolio</h2>

            <div class="portfolio-grid">

                {{-- Featured project spans full height --}}
                @if ($featuredProject = $projects->firstWhere('featured', true))
                    <div class="portfolio-card-apex reveal">
                        <img src="{{ asset('images/portfolio/'.$featuredProject['image']) }}"
                             alt="{{ $featuredProject['title'] }}" loading="lazy"/>
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">{{ $featuredProject['category'] }}</span>
                            <h3>{{ $featuredProject['title'] }}</h3>
                        </div>
                    </div>
                @endif

                {{-- Second project --}}
                @if ($secondProject = $projects->skip(1)->first())
                    <div class="portfolio-card-emerald reveal reveal-delay-1">
                        <img src="{{ asset('images/portfolio/'.$secondProject['image']) }}"
                             alt="{{ $secondProject['title'] }}" loading="lazy"/>
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">{{ $secondProject['category'] }}</span>
                            <h3>{{ $secondProject['title'] }}</h3>
                        </div>
                    </div>
                @endif

                {{-- Bottom two projects --}}
                <div class="portfolio-bottom-row reveal reveal-delay-2">
                    @foreach ($projects->skip(2)->take(2) as $project)
                        <div class="portfolio-card-harbor">
                            <img src="{{ asset('images/portfolio/'.$project['image']) }}"
                                 alt="{{ $project['title'] }}" loading="lazy"/>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">{{ $project['category'] }}</span>
                                <h3>{{ $project['title'] }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="portfolio-cta">
                <a href="{{ route('portfolio.index') }}" class="btn-solid">VIEW ALL PROJECTS</a>
            </div>
        </div>
    </section>

    {{-- ==================== AWARDS ==================== --}}
    <section class="awards">
        <div class="awards-inner">
            <p class="section-label">GLOBAL RECOGNITION</p>
            <h2 class="awards-title">Honored by the Industry's Leading<br>Institutions</h2>

            <div class="awards-grid">
                @foreach ($awards as $index => $award)
                    <div class="award-item reveal {{ $index > 0 ? 'reveal-delay-'.$index : '' }}">
                        <div class="award-icon">
                            {!! $award['icon_svg'] !!}
                        </div>
                        <p>{{ $award['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
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
                <a href="{{ route('contact.index') }}" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="{{ route('contact.index') }}#engineer" class="btn-outline-white">SPEAK TO AN ENGINEER</a>
            </div>
        </div>
    </section>

@endsection
