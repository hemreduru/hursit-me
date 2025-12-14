<nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
    <div class="glass-panel rounded-full px-6 py-3 flex items-center gap-6 shadow-2xl">
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#hero">{{ __('Home') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#about">{{ __('About') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#experience">{{ __('Experience') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('portfolio.index') }}">{{ __('Portfolio') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#contact">{{ __('Contact') }}</a>

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
