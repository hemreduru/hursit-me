@extends('layouts.master')

@push('styles')
<style>
    .glass-panel {
        background: rgba(22, 22, 22, 0.6);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
</style>
@endpush

@section('content')
<main class="relative pt-32 pb-16 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-white transition-colors mb-8">
            <span class="material-symbols-outlined text-sm">arrow_back</span>
            {{ __('Back to Articles') }}
        </a>

        <!-- Header -->
        <header class="mb-12">
            <div class="flex items-center gap-3 text-sm text-gray-400 mb-4">
                <span class="bg-primary/20 text-primary px-2 py-0.5 rounded text-xs font-bold uppercase">{{ __('Blog') }}</span>
                <span>•</span>
                <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : __('Draft') }}</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                {{ $post->title }}
            </h1>

            @if($post->thumbnail)
            <div class="rounded-xl overflow-hidden glass-panel border border-white/5 mb-8">
                <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full h-auto object-cover max-h-[500px]">
            </div>
            @endif
        </header>

        <!-- Content -->
        <article class="prose prose-invert prose-lg max-w-none text-gray-300">
            {!! $post->content !!}
        </article>
    </div>
</main>
@endsection
