{{-- resources/views/pages/services/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Our Services – Rising Builders')
@section('meta_description', 'Explore Rising Builders\' core infrastructure expertise: Commercial, Residential, and Civil Engineering services.')

@section('content')

    {{-- ==================== PAGE HERO ==================== --}}
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="{{ asset('images/services-hero.png') }}" alt="Services" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">TECHNICAL DOMAINS</p>
            <h1 class="page-hero-title">CORE INFRASTRUCTURE<br>EXPERTISE</h1>
            <p class="page-hero-sub">Advanced computational design and sustainable materials to create high-performance structural systems.</p>
        </div>
    </section>

    {{-- ==================== SERVICES GRID ==================== --}}
    <section class="services services-page">
        <div class="services-inner">
            <div class="services-grid services-grid--full">
                @forelse (($services ?? []) as $index => $service)
                    <div class="service-card {{ $service['featured'] ? 'active' : '' }} reveal {{ $index > 0 ? 'reveal-delay-'.($index % 3) : '' }}">
                        <div class="service-icon">{!! $service['icon_svg'] !!}</div>
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

                @empty
                    <p>No services found.</p>
                @endforelse
            </div>
        </div>
    </section>

    {{-- ==================== PROCESS ==================== --}}
    <section class="about-stats-section">
        <div class="services-inner">
            <div class="services-header reveal">
                <div>
                    <p class="section-label">HOW WE WORK</p>
                    <h2 class="services-title">OUR PROCESS</h2>
                </div>
            </div>
            <div class="process-grid">
                @foreach ($process as $index => $step)

                    <div class="process-step reveal {{ $index > 0 ? 'reveal-delay-'.$index : '' }}">
                        <span class="process-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">ENGINEER THE</span>
                <span class="cta-extraordinary">EXTRAORDINARY</span>
            </h2>
            <p class="cta-sub">Ready to start your next project? Our team is here to help.</p>
            <div class="cta-btns">
                <a href="{{ route('contact.index') }}" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="{{ route('portfolio.index') }}" class="btn-outline-white">VIEW PROJECTS</a>
            </div>
        </div>
    </section>

@endsection
