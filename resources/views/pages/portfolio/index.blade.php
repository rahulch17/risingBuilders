{{-- resources/views/pages/portfolio/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Portfolio – Rising Builders')
@section('meta_description', 'Explore Rising Builders\' landmark portfolio of commercial, residential and civil infrastructure projects.')

@section('content')

    {{-- ==================== PAGE HERO ==================== --}}
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="{{ asset('images/portfolio-hero.png') }}" alt="Our Portfolio" loading="eager"/>
            <div class="hero-overlay"></div>
        </div>
        <div class="page-hero-content">
            <p class="section-label light">MILESTONES</p>
            <h1 class="page-hero-title">LANDMARK PORTFOLIO</h1>
            <p class="page-hero-sub">Over 450 projects completed across commercial, residential and civil infrastructure.</p>
        </div>
    </section>

    {{-- ==================== FILTER TABS ==================== --}}
    <section class="portfolio portfolio-page">
        <div class="portfolio-inner">

            <div class="portfolio-filters reveal">
                <button class="filter-btn active" data-filter="all">ALL</button>
                @foreach ($categories as $category)
                    <button class="filter-btn" data-filter="{{ Str::slug($category) }}">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            {{-- ==================== PROJECTS GRID ==================== --}}
            <div class="portfolio-grid portfolio-grid--all" id="portfolio-grid">
                @foreach ($projects as $index => $project)
                    <div class="portfolio-card reveal {{ $index > 0 ? 'reveal-delay-'.($index % 3) : '' }}"
                         data-category="{{ Str::slug($project['category']) }}">
                        <img src="{{ asset('images/portfolio/'.$project['image']) }}"
                             alt="{{ $project['title'] }}" loading="lazy"/>
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">{{ $project['category'] }}</span>
                            <h3>{{ $project['title'] }}</h3>
                            <a href="{{ route('portfolio.show', $project['slug']) }}" class="portfolio-view-btn">
                                VIEW PROJECT →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="portfolio-pagination">
                {{ $projects->links() }}
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="cta">
        <div class="cta-inner reveal">
            <h2 class="cta-title">
                <span class="cta-engineer">YOUR PROJECT</span>
                <span class="cta-extraordinary">STARTS HERE</span>
            </h2>
            <p class="cta-sub">Let's discuss your vision and build something extraordinary together.</p>
            <div class="cta-btns">
                <a href="{{ route('contact.index') }}" class="btn-solid-gold">START YOUR PROJECT</a>
                <a href="{{ route('services.index') }}" class="btn-outline-white">OUR SERVICES</a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // Client-side filter
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.dataset.filter;
            document.querySelectorAll('.portfolio-card').forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush
