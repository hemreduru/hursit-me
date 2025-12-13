@extends('layouts.master')

@section('content')
<!-- Ambient Background -->
<style>
    /* Ambient Glow Background */
    .ambient-glow {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 15% 50%, rgba(51, 13, 242, 0.08) 0%, transparent 25%),
            radial-gradient(circle at 85% 30%, rgba(51, 13, 242, 0.05) 0%, transparent 25%);
        pointer-events: none;
        z-index: 0;
    }

    .glass-panel {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .timeline-line::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 15px;
        width: 2px;
        background: linear-gradient(to bottom, #330df2 0%, rgba(51, 13, 242, 0.1) 100%);
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
<div class="ambient-glow"></div>

<!-- Navigation -->
<nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
    <div class="glass-panel rounded-full px-6 py-3 flex items-center gap-6 shadow-2xl">
        <a class="text-sm font-medium hover:text-primary transition-colors" href="#hero">{{ __('Home') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="#about">{{ __('About') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="#experience">{{ __('Experience') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('portfolio.index') }}">{{ __('Portfolio') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="#contact">{{ __('Contact') }}</a>

        <!-- Divider -->
        <div class="h-6 w-px bg-white/20 mx-2"></div>

        <div class="flex items-center gap-4">
            <a class="bg-primary hover:bg-[#4b2bff] text-white text-xs font-bold px-4 py-2 rounded-full shadow-neon hover:shadow-neon-hover transition-all duration-300" href="#">
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
    </div>
</nav>

<!-- Main Layout -->
<main class="relative z-10 flex flex-col items-center w-full max-w-[1200px] mx-auto px-6 md:px-12">
    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center pt-20 relative w-full" id="hero">
        <!-- Decorative Elements -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary/20 rounded-full blur-[120px] -z-10"></div>
        <div class="mb-6 inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/30 bg-primary/10 text-primary text-xs font-bold tracking-widest uppercase">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            {{ __('Open to Work') }}
        </div>
        <h1 class="text-5xl md:text-7xl font-bold tracking-tighter mb-4 leading-tight">
            {{ $personalInfo->full_name ?? 'Hurşit Emre Duru' }}
        </h1>
        <h2 class="text-xl md:text-2xl text-gray-400 font-light mb-8 max-w-2xl">
            {{ $personalInfo->hero_title ?? '' }}
        </h2>
        <p class="text-gray-500 max-w-lg mb-10 leading-relaxed text-sm md:text-base">
            {{ $personalInfo->about_text ?? '' }}
        </p>
        <div class="flex gap-4">
            <a class="group relative px-8 py-3 bg-primary text-white font-bold rounded-lg overflow-hidden shadow-neon transition-all hover:shadow-neon-hover" href="#projects">
                <span class="relative z-10">{{ __('View My Projects') }}</span>
                <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
            </a>
            <a class="px-8 py-3 bg-transparent border border-white/20 text-white font-medium rounded-lg hover:bg-white/5 transition-colors" href="#contact">
                {{ __('Get In Touch') }}
            </a>
        </div>
        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 animate-bounce text-white/30">
            <span class="material-symbols-outlined text-3xl">keyboard_arrow_down</span>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 w-full max-w-4xl" id="about">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/3 relative group">
                <div class="absolute -inset-1 bg-gradient-to-br from-primary to-purple-600 rounded-2xl blur opacity-30 group-hover:opacity-75 transition duration-500"></div>
                <div class="relative w-full aspect-square rounded-xl overflow-hidden glass-panel flex items-center justify-center bg-[#131023]" data-alt="Abstract minimal geometric avatar representing a developer profile" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCyr1T-VgaEfrUchaqMG96RJ3H8fknKqWKlyO5u0nAwpMeBsXMbipTHZYF1-srvi08gDIw94uiPW8o2zrZtkbif9uOCn2khFq3EAh3Mc-apqakaTQrlkE_TGd6j-KFZE7_rf7ZcHEHlucREE8fQNHNweSPPD9_MQO2j3Ok_fuQbdyhgj3ZwVyzxFU924EG9ZRNYHZ8PoGdgQeqThQYfAh9Z-KVekLd6BlJDa0f-f-9fm2uXad4eOn-NIxThOfAPnCFCtMQjlGGr0tM'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                </div>
            </div>
            <div class="w-full md:w-2/3">
                <div class="flex items-center gap-2 mb-4">
                    <span class="material-symbols-outlined text-primary">terminal</span>
                    <h3 class="text-primary font-bold text-sm tracking-widest uppercase">{{ __('About Me') }}</h3>
                </div>
                <h2 class="text-3xl font-bold mb-6">{{ __('A Vision Beyond Code') }}</h2>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    {{ $personalInfo->about_text ?? '' }}
                </p>
                <div class="flex items-center gap-6 text-sm text-gray-300">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-lg">location_on</span>
                        {{ __('Istanbul, Turkey') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-24 w-full max-w-4xl" id="experience">
        <div class="mb-12 text-center md:text-left">
            <h3 class="text-primary font-bold text-sm tracking-widest uppercase mb-2">{{ __('Journey') }}</h3>
            <h2 class="text-3xl font-bold">{{ __('Experience') }}</h2>
        </div>
        <div class="relative timeline-line pl-2 md:pl-4 space-y-12">
            @foreach($experiences as $experience)
            <div class="relative pl-8 md:pl-12 group">
                <div class="absolute left-[11px] top-1.5 w-2.5 h-2.5 bg-[#0d0d0d] border-2 border-primary rounded-full group-hover:scale-125 group-hover:bg-primary transition-all duration-300 z-10"></div>
                <div class="glass-panel p-6 rounded-xl transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-primary/5">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-2">
                        <h4 class="text-xl font-bold text-white">{{ $experience->role }} <span class="text-gray-500 text-base font-normal">({{ $experience->company_name }})</span></h4>
                        <span class="text-sm font-medium text-primary bg-primary/10 px-3 py-1 rounded-full mt-2 md:mt-0 w-fit">
                            {{ $experience->start_date->format('Y') }} - {{ $experience->is_current ? __('Present') : $experience->end_date->format('Y') }}
                        </span>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">{{ $experience->location ?? __('Remote') }}</p>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        {{ $experience->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-24 w-full max-w-5xl" id="skills">
        <div class="mb-12 text-center">
            <h3 class="text-primary font-bold text-sm tracking-widest uppercase mb-2">{{ __('Tech Stack') }}</h3>
            <h2 class="text-3xl font-bold">{{ __('Skills & Tools') }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Backend Card -->
            <div class="glass-panel p-6 rounded-xl hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-3 mb-4 text-primary">
                    <span class="material-symbols-outlined">dns</span>
                    <h4 class="font-bold text-lg text-white">Backend</h4>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($backendSkills as $skill)
                    <span class="bg-white/5 hover:bg-white/10 text-xs text-gray-300 px-3 py-1.5 rounded border border-white/5 transition-colors">{{ $skill->name }}</span>
                    @endforeach
                </div>
            </div>
            <!-- Frontend Card -->
            <div class="glass-panel p-6 rounded-xl hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-3 mb-4 text-primary">
                    <span class="material-symbols-outlined">devices</span>
                    <h4 class="font-bold text-lg text-white">Frontend</h4>
                </div>
                <div class="flex flex-wrap gap-2">
                     @foreach($frontendSkills as $skill)
                    <span class="bg-white/5 hover:bg-white/10 text-xs text-gray-300 px-3 py-1.5 rounded border border-white/5 transition-colors">{{ $skill->name }}</span>
                     @endforeach
                </div>
            </div>
            <!-- DevOps & Tools Card -->
            <div class="glass-panel p-6 rounded-xl hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-3 mb-4 text-primary">
                    <span class="material-symbols-outlined">settings_suggest</span>
                    <h4 class="font-bold text-lg text-white">{{ __('DevOps & Tools') }}</h4>
                </div>
                <div class="flex flex-wrap gap-2">
                     @foreach($devopsSkills as $skill)
                    <span class="bg-white/5 hover:bg-white/10 text-xs text-gray-300 px-3 py-1.5 rounded border border-white/5 transition-colors">{{ $skill->name }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Skill Usages Detail Section -->
        <div class="mt-12 w-full">
            <div class="glass-panel p-8 rounded-xl">
                <h3 class="text-2xl font-bold mb-8 text-white flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">psychology</span>
                    {{ __('How I Use My Tech Stack') }}
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($skills as $skill)
                        @if($skill->usages->count() > 0)
                        <div class="relative group">
                            <div class="absolute -inset-2 bg-gradient-to-r from-primary/20 to-transparent rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative">
                                <h4 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                    <span class="text-primary text-xl">▹</span>
                                    {{ $skill->name }}
                                </h4>
                                <ul class="space-y-2 ml-7">
                                     @foreach($skill->usages as $usage)
                                        <li class="text-gray-400 text-sm leading-relaxed flex items-start gap-2">
                                            <span class="w-1.5 h-1.5 rounded-full bg-gray-600 mt-1.5 flex-shrink-0 group-hover:bg-primary transition-colors"></span>
                                            {{ $usage->description }}
                                        </li>
                                     @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section (Integrated from Portfolio Page - 3 Items) -->
    <section class="py-24 w-full" id="projects">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div>
                <h3 class="text-primary font-bold text-sm tracking-widest uppercase mb-2">{{ __('Portfolio') }}</h3>
                <h2 class="text-3xl font-bold">{{ __('Recent Works') }}</h2>
            </div>
            <a class="hidden md:flex items-center gap-2 text-sm text-gray-400 hover:text-primary transition-colors mt-4 md:mt-0" href="{{ route('portfolio.index') }}">
                {{ __('View All Projects') }} <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="group relative rounded-xl overflow-hidden glass-panel border border-white/5 hover:border-primary/50 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2">
                <div class="h-48 bg-gray-900 overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0d0d0d] to-transparent opacity-80 z-10"></div>
                     <!-- Placeholder Image -->
                    <img alt="{{ $project->title ?? '' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-60" src="{{ $project->image ?? '' }}"/>
                </div>
                <div class="p-6 relative z-20 -mt-10">
                    <div class="flex gap-2 mb-3">
                        @if($project->link)
                         <a href="{{ $project->link }}" target="_blank" class="text-[10px] font-bold tracking-wider text-primary bg-primary/10 px-2 py-1 rounded uppercase hover:bg-primary hover:text-white transition-colors">Link</a>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">{{ $project->title }}</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        {{ $project->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="md:hidden flex justify-center mt-8">
            <a class="flex items-center gap-2 text-sm text-gray-400 hover:text-primary transition-colors" href="{{ route('portfolio.index') }}">
                {{ __('View All Projects') }} <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
    </section>

    <!-- Blog Section (Integrated from Blog Page - 3 Items) -->
    <section class="py-24 w-full border-t border-white/5" id="blog">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div>
                <h3 class="text-primary font-bold text-sm tracking-widest uppercase mb-2">{{ __('Insights') }}</h3>
                <h2 class="text-3xl font-bold">{{ __('Latest Articles') }}</h2>
            </div>
            <a class="hidden md:flex items-center gap-2 text-sm text-gray-400 hover:text-primary transition-colors mt-4 md:mt-0" href="{{ route('blog.index') }}">
                 {{ __('View Archive') }} <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <article class="group rounded-xl bg-[#1a1a1a]/50 border border-white/5 overflow-hidden hover:border-primary/40 transition-all duration-300 hover:shadow-neon flex flex-col h-full">
                <div class="relative h-48 overflow-hidden">
                    <img alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ $post->thumbnail ?? '' }}"/>
                    <div class="absolute top-3 right-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-medium text-white">
                        {{ __('Article') }}
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-1 gap-3">
                    <h4 class="text-xl font-bold text-white group-hover:text-primary transition-colors line-clamp-2">{{ $post->title }}</h4>
                    <p class="text-gray-400 text-sm line-clamp-2">
                        {{ Str::limit($post->content, 100) }}
                    </p>
                    <div class="mt-auto pt-4 flex items-center justify-between text-xs text-gray-500">
                        <span>{{ $post->published_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        <div class="md:hidden flex justify-center mt-8">
            <a class="flex items-center gap-2 text-sm text-gray-400 hover:text-primary transition-colors" href="{{ route('blog.index') }}">
                {{ __('View Archive') }} <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
    </section>

    <!-- Footer / Contact -->
    <footer class="py-24 w-full border-t border-white/5 mt-12 flex flex-col items-center" id="contact">
        <h2 class="text-4xl font-bold mb-8 text-center">{{ __('Let\'s Create Something Great') }}</h2>
        <p class="text-gray-400 mb-10 max-w-md text-center">
            {{ __('Have a project in mind or just want to say hi? Feel free to reach out.') }}
        </p>
        <a class="text-2xl md:text-3xl font-light text-white hover:text-primary transition-colors mb-12 border-b border-primary/30 pb-1" href="mailto:contact@hursitemreduru.com">
            h.emreduru@gmail.com
        </a>
        <div class="flex gap-6 mb-16">
            <a class="w-12 h-12 rounded-full glass-panel flex items-center justify-center text-white hover:bg-primary hover:text-white hover:shadow-neon transition-all duration-300 group" href="#">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">code</span>
            </a>
            <a class="w-12 h-12 rounded-full glass-panel flex items-center justify-center text-white hover:bg-[#0077b5] hover:text-white hover:shadow-lg transition-all duration-300 group" href="#">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">work</span>
            </a>
            <a class="w-12 h-12 rounded-full glass-panel flex items-center justify-center text-white hover:bg-[#25d366] hover:text-white hover:shadow-lg transition-all duration-300 group" href="#">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">call</span>
            </a>
        </div>
        <p class="text-gray-600 text-xs text-center">
            © {{ date('Y') }} Hurşit Emre Duru. {{ __('All rights reserved.') }} <br/>
            {{ __('Designed & Coded with passion.') }}
        </p>
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
                e.preventDefault();
                lenis.scrollTo(this.getAttribute('href'));
            });
        });
    });
</script>
@endpush
@endsection
