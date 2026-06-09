{{-- resources/views/pages/services/show.blade.php --}}
@extends('layouts.app')

@section('title', $service['name'].' – Rising Builders')
@section('meta_description', $service['short_description'])

@section('content')

    {{-- ==================== PAGE HERO ==================== --}}
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="{{ asset('images/services/'.$service['hero_image']) }}" alt="{{ $service['name'] }}" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">{{ $service['category_label'] }}</p>
            <h1 class="page-hero-title">{{ strtoupper($service['name']) }}</h1>
            <p class="page-hero-sub">{{ $service['short_description'] }}</p>
        </div>
    </section>

    {{-- ==================== SERVICE DETAIL ==================== --}}
    <section class="about">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">OVERVIEW</p>
                <h2 class="about-title">{{ strtoupper($service['name']) }}</h2>
                <p class="about-desc">{{ $service['full_description'] }}</p>
                <ul class="service-detail-list">
                    @foreach ($service['highlights'] as $highlight)
                        <li>{{ $highlight }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('contact.index') }}" class="btn-solid mt-8 inline-block">
                    REQUEST A CONSULTATION
                </a>
            </div>
            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="{{ asset('images/services/'.$service['detail_image']) }}"
                     alt="{{ $service['name'] }}" class="about-img" loading="lazy"/>
            </div>
        </div>
    </section>

    {{-- ==================== RELATED PROJECTS ==================== --}}
    @if ($relatedProjects->isNotEmpty())
        <section class="portfolio">
            <div class="portfolio-inner">
                <p class="section-label">RELATED WORK</p>
                <h2 class="portfolio-title">Projects in {{ $service['name'] }}</h2>
                <div class="portfolio-grid">
                    @foreach ($relatedProjects as $index => $project)
                        <div class="portfolio-card reveal {{ $index > 0 ? 'reveal-delay-'.$index : '' }}">
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
        </section>
    @endif

    {{-- ==================== CTA ==================== --}}
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">INTERESTED IN</span>
                <span class="cta-extraordinary">{{ strtoupper($service['name']) }}?</span>
            </h2>
            <p class="cta-sub">Talk to one of our specialists and get a tailored quote for your project.</p>
            <div class="cta-btns">
                <a href="{{ route('contact.index') }}" class="btn-solid-gold">GET A QUOTE</a>
                <a href="{{ route('services.index') }}" class="btn-outline-white">ALL SERVICES</a>
            </div>
        </div>
    </section>

@endsection
