@extends('layouts.master')

@push('styles')
<style>
    /* Custom Utilities for Glassmorphism & Glows */
    .glass-panel {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .glass-nav {
        background: rgba(13, 13, 13, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .neon-text-glow {
        text-shadow: 0 0 20px rgba(51, 13, 242, 0.5);
    }

    .neon-box-glow {
        box-shadow: 0 0 20px rgba(51, 13, 242, 0.15);
    }

    .hover-card:hover {
        transform: translateY(-4px) scale(1.01);
        border-color: rgba(51, 13, 242, 0.4);
        box-shadow: 0 10px 30px -10px rgba(51, 13, 242, 0.3);
    }

    .code-syntax-keyword { color: #c678dd; }
    .code-syntax-string { color: #98c379; }
    .code-syntax-func { color: #61afef; }
    .code-syntax-plain { color: #abb2bf; }

    /* Hide scrollbar for ticker */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Lenis Smooth Scroll Recommended CSS */
    html.lenis, html.lenis body {
        height: auto;
    }

    .lenis.lenis-smooth {
        scroll-behavior: auto !important;
    }

    .lenis.lenis-smooth [data-lenis-prevent] {
        overscroll-behavior: contain;
    }

    .lenis.lenis-stopped {
        overflow: hidden;
    }

    .lenis.lenis-scrolling iframe {
        pointer-events: none;
    }
</style>
@endpush

@section('content')
<!-- Background Ambient Glow -->
<div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute top-[-10%] left-[-10%] w-[40vw] h-[40vw] rounded-full bg-primary/20 blur-[120px]"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-secondary/10 blur-[120px]"></div>
</div>

<!-- Floating Navigation (Updated to match Home) -->
<div class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
    <nav class="glass-nav rounded-full px-6 py-3 flex items-center justify-between gap-6 shadow-lg max-w-4xl w-full">
         <a class="text-xl font-bold tracking-tighter flex items-center gap-2 group" href="{{ route('home') }}">
            <span class="material-symbols-outlined text-primary group-hover:animate-pulse">terminal</span>
            DEV.
        </a>

        <div class="hidden md:flex items-center gap-8">
            <a class="text-sm text-gray-400 hover:text-white transition-colors" href="{{ route('home') }}#hero">{{ __('Home') }}</a>
            <a class="text-sm text-gray-400 hover:text-white transition-colors" href="{{ route('home') }}#about">{{ __('About') }}</a>
            <a class="text-sm text-gray-400 hover:text-white transition-colors" href="{{ route('home') }}#experience">{{ __('Experience') }}</a>
            <a class="text-sm text-white font-bold transition-colors" href="{{ route('portfolio.index') }}">{{ __('Portfolio') }}</a>
            <a class="text-sm text-gray-400 hover:text-white transition-colors" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
            <a class="text-sm text-gray-400 hover:text-white transition-colors" href="{{ route('home') }}#contact">{{ __('Contact') }}</a>
        </div>

        <div class="flex items-center gap-4">
             <a class="bg-primary/90 hover:bg-primary text-white text-xs font-bold uppercase tracking-wider px-5 py-2.5 rounded-full transition-all shadow-[0_0_15px_rgba(51,13,242,0.4)] hover:shadow-[0_0_25px_rgba(51,13,242,0.6)]" href="#">
                {{ __('Download CV') }}
            </a>

             <!-- Vertical Line Divider -->
            <div class="h-6 w-px bg-white/20"></div>

             <!-- Language Switcher -->
            <div class="flex items-center gap-2 text-xs font-bold">
                 @if(app()->getLocale() == 'en')
                    <span class="text-white">EN</span>
                    <span class="text-gray-600">/</span>
                    <a href="{{ route('language.switch', 'tr') }}" class="text-gray-400 hover:text-white transition-colors">TR</a>
                @else
                    <a href="{{ route('language.switch', 'en') }}" class="text-gray-400 hover:text-white transition-colors">EN</a>
                    <span class="text-gray-600">/</span>
                    <span class="text-white">TR</span>
                @endif
            </div>
        </div>
    </nav>
</div>

<main class="relative z-10 flex flex-col items-center w-full min-h-screen pt-32 pb-20 px-4 md:px-10 max-w-7xl mx-auto">
    <!-- Rest of the Portfolio content remains same, just ensuring static text is consistently using updated layout -->

     <!-- Header for Portfolio Page -->
    <div class="w-full flex flex-col items-center text-center py-10 md:py-16">
        <h1 class="text-4xl md:text-6xl font-black tracking-tighter mb-4">
            {{ __('Selected Works') }}
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl">
            {{ __('A curation of my best engineering.') }}
        </p>
    </div>

    <!-- Selected Works (Mosaic Grid) -->
    <section class="w-full flex flex-col gap-10 mb-32" id="projects">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-[300px]">
            @foreach($projects as $index => $project)
            <div class="group relative {{ ($index % 4 == 0 || $index % 4 == 3) ? 'md:col-span-2' : '' }} rounded-2xl overflow-hidden glass-panel border-0 hover-card transition-all duration-300 cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 opacity-60 group-hover:opacity-40" data-alt="{{ $project->title }}" style='background-image: url("{{ $project->image }}");'></div>
                <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/50 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <div class="flex gap-2 mb-3">
                        @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" class="px-2 py-1 bg-primary/20 text-primary text-xs font-bold rounded uppercase border border-primary/20 backdrop-blur-sm hover:bg-primary hover:text-white transition-colors">
                            {{ __('View Project') }}
                        </a>
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold mb-2 group-hover:text-primary transition-colors">{{ $project->title }}</h3>
                    <p class="text-gray-400 line-clamp-2 text-sm max-w-lg group-hover:text-white transition-colors">
                        {{ $project->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <footer class="w-full border-t border-white/5 pt-10 pb-6 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex flex-col gap-2">
            <span class="text-2xl font-bold text-white tracking-tighter">DEV.</span>
            <span class="text-gray-500 text-sm">© 2023 Alex Chen. {{ __('All rights reserved.') }}</span>
        </div>
        <div class="flex gap-6">
            <a class="text-gray-400 hover:text-white transition-colors" href="#">
                <span class="sr-only">GitHub</span>
                <svg class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
            </a>
            <a class="text-gray-400 hover:text-white transition-colors" href="#">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
            </a>
            <a class="text-gray-400 hover:text-white transition-colors" href="#">
                <span class="sr-only">LinkedIn</span>
                <svg class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
            </a>
        </div>
    </footer>
</main>

@push('scripts')
<!-- Lenis Smooth Scroll -->
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

        // Connect lenis to anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                // Only prevent default if it's an anchor on the same page
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    lenis.scrollTo(this.getAttribute('href'));
                }
            });
        });
    });
</script>
@endpush
@endsection
