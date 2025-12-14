/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
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
    plugins: [

    ],
}
