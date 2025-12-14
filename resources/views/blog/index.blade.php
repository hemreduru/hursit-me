@extends('layouts.master')

@section('content')
<!-- Ambient Background Glows -->
<div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
    <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/20 rounded-full blur-[120px] opacity-30 animate-pulse"></div>
    <div class="absolute bottom-[10%] right-[-5%] w-[30%] h-[30%] bg-accent-purple/20 rounded-full blur-[100px] opacity-20"></div>
</div>

@include('partials.header')

<main class="relative pt-32 pb-16 min-h-screen">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-16">
        <!-- Hero Section -->
        <section class="flex flex-col md:flex-row gap-12 items-center py-10 md:py-20">
            <div class="flex-1 flex flex-col gap-6 z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 w-fit">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="text-xs font-medium text-gray-400 uppercase tracking-wider">{{ __('Available for hire') }}</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold leading-tight tracking-tight text-white">
                    {{ __('Insights &') }} <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-blue-400 to-accent-purple text-glow">{{ __('Digital Artistry') }}</span>
                </h1>
                <p class="text-lg text-gray-400 max-w-lg leading-relaxed">
                    {{ __('Exploring the intersection of scalable systems and creative frontend engineering. A deep dive into Rust, React, and system design.') }}
                </p>
                <!-- Search Input -->
                <div class="mt-4 relative max-w-md w-full group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary to-accent-purple rounded-lg blur opacity-30 group-hover:opacity-75 transition duration-500"></div>
                    <div class="relative flex items-center bg-[#111] rounded-lg p-1.5 border border-white/10">
                        <span class="material-symbols-outlined text-gray-500 ml-3">search</span>
                        <input class="bg-transparent border-none text-white placeholder-gray-500 focus:ring-0 w-full ml-2" placeholder="{{ __('Search articles...') }}" type="text"/>
                        <button class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white text-xs font-bold rounded uppercase tracking-wider transition-colors">
                            {{ __('Enter') }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex-1 w-full max-w-[500px] md:max-w-none relative">
                <div class="relative z-10 rounded-2xl overflow-hidden border border-white/10 shadow-2xl aspect-square md:aspect-video bg-[#1a1a1a]">
                    <img alt="Abstract dark fluid 3d shapes with blue lighting" class="w-full h-full object-cover opacity-80 hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7xkQBRlou1SwI0qbkCUsleXK1rKj8R_Z__pRliJxmzkGtPwh7371hpRxF8I_5DGBR9Dk7ZVcEx74xqjU7dA_doGsrMnxt5IfI2PRxvQItd5a6ABoLwOHojHTHw0dwWBGA4XZ_Zu36z8JIgfu_GnVHncz7rTVo1IVEvBbBcPtMFN9jGh-wcX8k9S3i3WJ4WRiCoXbMEUMIwLfZFigGWIqAZQbNsEKLdVi3KdOKdGHJhWnrfBULNFUQ1PxptkqBRxToDPjL79f28mU"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-background-dark/90 to-transparent flex items-end p-6">
                        <div>
                            <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2 block">{{ __('Latest Drop') }}</span>
                            <h3 class="text-white text-xl font-bold">{{ __('The Architecture of minimalistic UIs') }}</h3>
                        </div>
                    </div>
                </div>
                <!-- Decoration -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/20 rounded-full blur-2xl"></div>
            </div>
        </section>

        <!-- Tags / Chips -->
        <section class="flex flex-wrap gap-3 pb-4 border-b border-white/5">
            <button class="px-5 py-2 rounded-full bg-primary text-white text-sm font-medium shadow-neon transition hover:-translate-y-0.5">{{ __('All') }}</button>
            <button class="px-5 py-2 rounded-full bg-surface-dark border border-white/10 text-gray-400 text-sm font-medium hover:border-primary/50 hover:text-white transition hover:-translate-y-0.5">React</button>
            <button class="px-5 py-2 rounded-full bg-surface-dark border border-white/10 text-gray-400 text-sm font-medium hover:border-primary/50 hover:text-white transition hover:-translate-y-0.5">System Design</button>
            <button class="px-5 py-2 rounded-full bg-surface-dark border border-white/10 text-gray-400 text-sm font-medium hover:border-primary/50 hover:text-white transition hover:-translate-y-0.5">Linux</button>
            <button class="px-5 py-2 rounded-full bg-surface-dark border border-white/10 text-gray-400 text-sm font-medium hover:border-primary/50 hover:text-white transition hover:-translate-y-0.5">AI Engineering</button>
            <button class="px-5 py-2 rounded-full bg-surface-dark border border-white/10 text-gray-400 text-sm font-medium hover:border-primary/50 hover:text-white transition hover:-translate-y-0.5">Rust</button>
        </section>

        <!-- Featured Large Post -->
        <section>
            <h3 class="text-white text-2xl font-bold mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">auto_awesome</span> {{ __('Featured Story') }}
            </h3>
            <div class="group relative rounded-xl overflow-hidden glass-panel hover:border-primary/30 transition-colors duration-300">
                <div class="flex flex-col md:flex-row h-full">
                    <div class="md:w-3/5 h-64 md:h-auto overflow-hidden relative">
                        <img alt="Futuristic server room with blue neon lights" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Futuristic server room with blue neon lights" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJBvGOn_f_MhUUaqXp0Y7yhhNdqHB5leXvgWBeZ2unHxmB0EO_vqXE2KRbWObB94kuBg1B5GKQD9U32dVuJXNZDGd2Y4OCGYUITdrLW5oc2bV2CMMGGuOv2jup9O3tnfDQSZu3GnB3uk6mYexgUE44Xuj7hkICnCNqw9kP3ly5L0WA1fEaPgto5472pMIO-TL0BNZLrvUCMFTJTc7hUVrRVC66WZTCYA0Mx00ENtpyy5dmQpirrIk8CLKdZeuhDAGawIkYjJ8H4ZU"/>
                        <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                    </div>
                    <div class="md:w-2/5 p-8 flex flex-col justify-center gap-4 relative">
                        <div class="absolute top-0 left-0 w-1 h-full bg-primary/50 md:bg-transparent md:w-full md:h-1 md:top-0 md:left-0 md:bg-gradient-to-r md:from-primary/50 md:to-transparent"></div>
                        <div class="flex items-center gap-3 text-sm text-gray-400">
                            <span class="bg-primary/20 text-primary px-2 py-0.5 rounded text-xs font-bold uppercase">{{ __('Architecture') }}</span>
                            <span>•</span>
                            <span>{{ __('12 min read') }}</span>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-white leading-tight group-hover:text-primary-glow transition-colors">
                            {{ __('Building Scalable Systems with Rust') }}
                        </h2>
                        <p class="text-gray-400 text-base line-clamp-3">
                            {{ __('Memory safety without garbage collection is a game changer. Here\'s an in-depth look at how we migrated our core services to Rust, achieving 300% performance gains while eliminating data races entirely.') }}
                        </p>
                        <div class="pt-4">
                            <a class="inline-flex items-center gap-2 text-white font-bold hover:gap-3 transition-all" href="#">
                                {{ __('Read Article') }} <span class="material-symbols-outlined text-primary text-sm">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Grid Layout -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-white text-2xl font-bold">{{ __('Latest Writings') }}</h3>
                <a class="text-sm text-gray-400 hover:text-white transition-colors" href="#">{{ __('View Archive') }}</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <article class="group relative rounded-xl bg-surface-dark border border-white/5 overflow-hidden hover:border-primary/40 transition-all duration-300 hover:shadow-neon flex flex-col h-full">
                    <div class="relative h-48 overflow-hidden">
                        <img alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ $post->thumbnail }}"/>
                        <div class="absolute top-3 right-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-medium text-white">
                            {{ __('Blog') }}
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 gap-3">
                        <h4 class="text-xl font-bold text-white group-hover:text-primary transition-colors line-clamp-2">{{ $post->title }}</h4>
                        <div class="text-gray-400 text-sm line-clamp-2">{!! Str::limit($post->content, 100) !!}</div>
                        <div class="mt-auto pt-4 flex items-center justify-between text-xs text-gray-500">
                            <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : __('Draft') }}</span>
                            <span>{{ __('5 min read') }}</span>
                        </div>
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}" class="absolute inset-0 z-10"></a>
                </article>
                @endforeach
            </div>
        </section>

        <!-- Newsletter -->
        <section class="py-12 relative overflow-hidden rounded-2xl glass-panel border border-white/5">
            <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full blur-[80px]"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent-purple/10 rounded-full blur-[80px]"></div>
            <div class="relative z-10 flex flex-col items-center text-center max-w-2xl mx-auto px-4">
                <div class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">mail</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ __('Stay in the Loop') }}</h2>
                <p class="text-gray-400 mb-8">{{ __('Join 5,000+ developers receiving monthly insights on frontend architecture, system design, and career growth. No spam, just code.') }}</p>
                <form class="flex flex-col sm:flex-row w-full gap-3">
                    <input class="flex-1 bg-black/40 border border-white/10 rounded-lg px-5 py-3 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="dev@example.com" type="email"/>
                    <button class="bg-primary hover:bg-primary-glow text-white font-bold py-3 px-8 rounded-lg shadow-neon hover:shadow-neon-hover transition-all whitespace-nowrap" type="button">
                        {{ __('Subscribe') }}
                    </button>
                </form>
                <p class="text-xs text-gray-500 mt-4">{{ __('Unsubscribe at any time.') }}</p>
            </div>
        </section>
    </div>
</main>

<!-- Footer -->
<footer class="border-t border-white/5 bg-[#050505] pt-12 pb-8">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8 mb-12">
            <div>
                <h3 class="text-xl font-bold text-white mb-2">DevLog<span class="text-primary">.</span>io</h3>
                <p class="text-gray-500 text-sm max-w-xs">{{ __('Building digital products with passion and precision. Based in the Cloud.') }}</p>
            </div>
            <div class="flex gap-6">
                 <!-- Social links... -->
            </div>
        </div>
        <div class="flex flex-col-reverse md:flex-row justify-between items-center pt-8 border-t border-white/5 gap-4">
            <p class="text-gray-600 text-xs">© 2024 DevLog. {{ __('All rights reserved.') }}</p>
            <div class="flex gap-6">
                <a class="text-xs text-gray-500 hover:text-white" href="#">{{ __('Privacy Policy') }}</a>
                <a class="text-xs text-gray-500 hover:text-white" href="#">{{ __('Terms of Service') }}</a>
            </div>
        </div>
    </div>
</footer>

@endsection
