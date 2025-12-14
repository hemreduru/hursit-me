<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .error-text {
            text-shadow: 2px 2px 0px #ec4899, -2px -2px 0px #06b6d4;
            animation: glitch 1s infinite;
        }
        @keyframes glitch {
            0% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
            100% { transform: translate(0); }
        }
        .bg-grid {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        }
    </style>
</head>
<body class="bg-gray-900 text-white h-screen w-full flex items-center justify-center overflow-hidden relative font-sans">

    <!-- Background Grid & Glow -->
    <div class="absolute inset-0 bg-grid z-0"></div>
    <div class="absolute inset-0 bg-radial-gradient from-purple-900/40 via-gray-900 to-gray-900 z-0"></div>

    <!-- Floating Shapes -->
    <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute top-1/3 right-1/4 w-32 h-32 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-1/4 left-1/2 w-32 h-32 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="relative z-10 text-center px-4">
        <!-- Error Code -->
        <h1 class="text-9xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500 error-text mb-4">
            @yield('code')
        </h1>

        <!-- Error Message -->
        <h2 class="text-3xl md:text-5xl font-bold mb-6 tracking-tight">
            @yield('message')
        </h2>

        <!-- Description (Optional) -->
        <p class="text-gray-400 text-lg md:text-xl mb-10 max-w-lg mx-auto">
            @yield('description', 'Oops! The pixels you are looking for seem to have drifted into the void.')
        </p>

        <!-- CTA Button -->
        <a href="{{ route('home') }}" class="group relative inline-flex items-center justify-center px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-transparent border-2 border-white/20 rounded-full hover:bg-white/10 hover:border-white/50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
            <span>{{ __('Back to Home') }}</span>
            <svg class="w-5 h-5 ml-2 -mr-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
        </a>
    </div>

    <!-- Script for simple blob animation -->
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</body>
</html>
