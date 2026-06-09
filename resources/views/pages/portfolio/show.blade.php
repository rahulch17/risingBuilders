{{-- resources/views/pages/portfolio/show.blade.php --}}
@extends('layouts.app')

@section('title', $project['title'].' – Rising Builders Portfolio')
@section('meta_description', $project['description'])

@section('content')

    {{-- ==================== PAGE HERO ==================== --}}
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="{{ asset('images/portfolio/'.$project['image']) }}"
                 alt="{{ $project['title'] }}" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">{{ $project['category'] }}</p>
            <h1 class="page-hero-title">{{ strtoupper($project['title']) }}</h1>
            <p class="page-hero-sub">{{ $project['location'] }} · {{ $project['year'] }}</p>
        </div>
    </section>

    {{-- ==================== PROJECT DETAIL ==================== --}}
    <section class="about">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">PROJECT OVERVIEW</p>
                <h2 class="about-title">{{ strtoupper($project['title']) }}</h2>
                <p class="about-desc">{{ $project['description'] }}</p>
                <div class="stats-grid" style="margin-top: 2rem;">
                    <div class="stat">
                        <span class="stat-num">{{ $project['year'] }}</span>
                        <span class="stat-label">YEAR COMPLETED</span>
                    </div>
                    <div class="stat">
                        <span class="stat-num">{{ $project['location'] }}</span>
                        <span class="stat-label">LOCATION</span>
                    </div>
                </div>
                <a href="{{ route('contact.index') }}" class="btn-solid-gold" style="margin-top: 2rem; display: inline-block;">
                    DISCUSS A SIMILAR PROJECT
                </a>
            </div>
            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="{{ asset('images/portfolio/'.$project['image']) }}"
                     alt="{{ $project['title'] }}" class="about-img" loading="lazy"/>
            </div>
        </div>
    </section>

    {{-- ==================== RELATED PROJECTS ==================== --}}
    @if ($relatedProjects->isNotEmpty())
        <section class="portfolio">
            <div class="portfolio-inner">
                <p class="section-label">MORE PROJECTS</p>
                <h2 class="portfolio-title">Related Work</h2>
                <div class="portfolio-grid">
                    @foreach ($relatedProjects as $index => $related)
                        <div class="portfolio-card reveal {{ $index > 0 ? 'reveal-delay-'.$index : '' }}">
                            <img src="{{ asset('images/portfolio/'.$related['image']) }}"
                                 alt="{{ $related['title'] }}" loading="lazy"/>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">{{ $related['category'] }}</span>
                                <h3>{{ $related['title'] }}</h3>
                                <a href="{{ route('portfolio.show', $related['slug']) }}" class="portfolio-view-btn">
                                    VIEW PROJECT →
                                </a>
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
                <span class="cta-engineer">ENGINEER THE</span>
                <span class="cta-extraordinary">EXTRAORDINARY</span>
            </h2>
            <p class="cta-sub">Inspired by what we've built? Let's talk about your next landmark project.</p>
            <div class="cta-btns">
                <a href="{{ route('contact.index') }}" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="{{ route('portfolio.index') }}" class="btn-outline-white">VIEW ALL PROJECTS</a>
            </div>
        </div>
    </section>

@endsection
