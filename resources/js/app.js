import './bootstrap';
import Lenis from '@studio-freight/lenis'

document.addEventListener("DOMContentLoaded", function () {
    // Lenis Smooth Scroll
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
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                lenis.scrollTo(href);
            }
        });
    });
});
