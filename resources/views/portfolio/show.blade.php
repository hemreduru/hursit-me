@extends('layouts.master')

@section('content')

@include('partials.header')

<main class="relative pt-32 pb-16 min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <a href="{{ route('portfolio.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-white transition-colors mb-8">
            <span class="material-symbols-outlined text-sm">arrow_back</span>
            {{ __('Back to Portfolio') }}
        </a>

        <!-- Header -->
        <header class="mb-12">
            @if($project->image)
            <div class="rounded-xl overflow-hidden glass-panel border border-white/5 mb-8 w-full aspect-video relative group">
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent flex items-end p-8">
                     <div class="w-full">
                        <div class="flex items-center justify-between">
                            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-2">
                                {{ $project->title }}
                            </h1>
                            @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="px-4 py-2 bg-primary text-white text-sm font-bold rounded-full hover:bg-primary-glow transition-all shadow-neon">
                                {{ __('Visit Project') }} <span class="material-symbols-outlined text-sm align-middle ml-1">open_in_new</span>
                            </a>
                            @endif
                        </div>
                        <p class="text-gray-300 text-lg max-w-2xl mt-2">{{ $project->description }}</p>
                    </div>
                </div>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 glass-panel p-6 rounded-xl">
                 <div>
                    <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">{{ __('Client/Project') }}</h3>
                    <p class="text-white font-medium">{{ $project->title }}</p>
                </div>
                 <div>
                    <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">{{ __('Role') }}</h3>
                    <p class="text-white font-medium">{{ __('Lead Developer') }}</p> {{-- Placeholder, maybe dynamic later --}}
                </div>
                 <div>
                    <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">{{ __('Year') }}</h3>
                    <p class="text-white font-medium">{{ $project->created_at->format('Y') }}</p>
                </div>
            </div>
        </header>

        <!-- Content -->
        <div class="prose prose-invert prose-lg max-w-none text-gray-300">
             {{-- Since Portfolio strictly speaking might not have 'content' separate from description based on my Plan,
                  I will use description again or simply placeholder content if 'content' field doesn't exist.
                  Checking implementation_plan.md: Portfolios has title, slug, description, image, link, sort_order.
                  NO rich text content. So this page is mostly the description + image. --}}
             <p>{{ $project->description }}</p>
        </div>
    </div>
</main>
@endsection
