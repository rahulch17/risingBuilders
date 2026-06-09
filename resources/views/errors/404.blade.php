{{-- resources/views/errors/404.blade.php --}}
@extends('layouts.app')

@section('title', '404 – Page Not Found – Rising Builders')

@section('content')
    <section class="page-hero page-hero--short">
        <div class="page-hero-bg">
            <img src="{{ asset('images/hero-skyscraper.png') }}" alt="404" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content" style="text-align: center;">
            <p class="hero-since">— ERROR 404</p>
            <h1 class="page-hero-title">PAGE NOT<br>FOUND</h1>
            <p class="page-hero-sub">The page you're looking for doesn't exist or has been moved.</p>
            <div class="hero-btns" style="justify-content: center; margin-top: 2rem;">
                <a href="{{ route('home') }}" class="btn-solid">GO HOME</a>
                <a href="{{ route('contact.index') }}" class="btn-outline">CONTACT US</a>
            </div>
        </div>
        @include('components.wave-divider')
    </section>
@endsection
