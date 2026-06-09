{{-- resources/views/pages/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Us – Rising Builders')
@section('meta_description', 'Founded on the principles of architectural rigor and material science, Rising Builders has been at the forefront of structural engineering for over 34 years.')

@section('content')

    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="{{ asset('images/about-hero.png') }}" alt="About Rising Builders" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">OUR STORY</p>
            <h1 class="page-hero-title">A DECADES-LONG LEGACY</h1>
            <p class="page-hero-sub">Engineering environments where progress lives since {{ $company['founded'] }}.</p>
        </div>
    </section>

    {{-- ==================== MISSION ==================== --}}
    <section class="about-mission">
        <div class="about-inner">
            <div class="about-text reveal">
                <p class="section-label">PRECISION ENGINEERING</p>
                <h2 class="about-title">WHO WE ARE</h2>
                <p class="about-desc">{{ $company['description'] }}</p>
                <p class="about-desc mt-4">{{ $company['mission'] }}</p>
            </div>
            <div class="about-img-wrap reveal reveal-delay-1">
                <img src="{{ asset('images/architectural-model.png') }}"
                     alt="Architectural Model" class="about-img" loading="lazy"/>
                <div class="about-quote-box">
                    <p class="about-quote">"{{ $company['quote'] }}"</p>
                    <span class="about-quote-attr">— {{ $company['quote_author'] }}</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== STATS ==================== --}}
    <section class="about-stats-section">
        <div class="about-inner">
            <div class="stats-grid">
                @foreach ($stats as $stat)
                    <div class="stat reveal">
                        <span class="stat-num">{{ $stat['value'] }}</span>
                        <span class="stat-label">{{ $stat['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== TEAM ==================== --}}
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
                @foreach ($team as $index => $member)
                    <div class="team-card reveal {{ $index > 0 ? 'reveal-delay-'.$index : '' }}">
                        <img src="{{ asset('images/team/'.$member['photo']) }}"
                             alt="{{ $member['name'] }}" loading="lazy"/>
                        <div class="team-info">
                            <h3>{{ $member['name'] }}</h3>
                            <p class="team-role">{{ $member['role'] }}</p>
                            <p class="team-bio">{{ $member['bio'] }}</p>
                        </div>
                    </div>
                @endforeach
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
                        <div class="award-icon">{!! $award['icon_svg'] !!}</div>
                        <p>{{ $award['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">READY TO BUILD</span>
                <span class="cta-extraordinary">TOGETHER?</span>
            </h2>
            <p class="cta-sub">Reach out today and let's discuss how Rising Builders can bring your vision to life.</p>
            <div class="cta-btns">
                <a href="{{ route('contact.index') }}" class="btn-solid-gold">GET IN TOUCH</a>
                <a href="{{ route('services.index') }}" class="btn-outline-white">OUR SERVICES</a>
            </div>
        </div>
    </section>

@endsection
