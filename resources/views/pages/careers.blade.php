{{-- resources/views/pages/careers.blade.php --}}
@extends('layouts.app')

@section('title', 'Careers – Rising Builders')
@section('meta_description', 'Join the Rising Builders team. Explore career opportunities in structural engineering, architecture, and project management.')

@section('content')

    <section class="page-hero page-hero--short">
        <div class="page-hero-bg">
            <img src="{{ asset('images/about-hero.png') }}" alt="Careers at Rising Builders" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">JOIN THE TEAM</p>
            <h1 class="page-hero-title">BUILD YOUR CAREER<br>WITH US</h1>
            <p class="page-hero-sub">We're always looking for exceptional engineers, architects and project leaders.</p>
        </div>
    </section>

    <section class="about">
        <div class="about-inner" style="justify-content: center; text-align: center; padding: 80px 40px;">
            <div class="about-text reveal">
                <p class="section-label">COMING SOON</p>
                <h2 class="about-title">OPEN POSITIONS</h2>
                <p class="about-desc">Our careers page is currently being updated. Please reach out directly to our HR team for current openings.</p>
                <a href="{{ route('contact.index') }}" class="btn-solid-gold" style="margin-top: 2rem; display: inline-block;">
                    GET IN TOUCH
                </a>
            </div>
        </div>
    </section>

@endsection
