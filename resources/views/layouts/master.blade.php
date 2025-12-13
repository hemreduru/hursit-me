<!DOCTYPE html>
<html class="dark" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $title ?? 'Hurşit Emre Duru | Software Developer' }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @hasSection('tailwind_config')
        @yield('tailwind_config')
    @else
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#330df2",
                            "primary-glow": "rgba(51, 13, 242, 0.5)",
                            "secondary": "#7b2cbf",
                            "background-dark": "#0d0d0d",
                            "surface": "#131023",
                            "glass": "rgba(255, 255, 255, 0.03)",
                            "glass-border": "rgba(255, 255, 255, 0.08)"
                        },
                        fontFamily: {
                            "display": ["Space Grotesk", "sans-serif"],
                            "mono": ["ui-monospace", "SFMono-Regular", "Menlo", "Monaco", "Consolas", "Liberation Mono", "Courier New", "monospace"]
                        },
                        boxShadow: {
                            'neon': '0 0 20px rgba(51, 13, 242, 0.4)',
                            'neon-hover': '0 0 30px rgba(51, 13, 242, 0.6)',
                        },
                        borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                    },
                },
            }
        </script>
    @endif

    <style>
        body {
            background-color: #0d0d0d;
            font-family: 'Space Grotesk', sans-serif;
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0d0d0d;
        }
        ::-webkit-scrollbar-thumb {
            background: #330df2;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #4b2bff;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-background-dark text-white antialiased overflow-x-hidden relative">
    @yield('content')
    @stack('scripts')
</body>
</html>
