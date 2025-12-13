<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Blog 1
        \App\Models\Blog::create([
            'title' => ['en' => 'Mastering CSS Grid in 2024', 'tr' => "2024'te CSS Grid'de Uzmanlaşmak"],
            'slug' => ['en' => 'mastering-css-grid', 'tr' => 'css-grid-uzmanlasmak'],
            'content' => [
                'en' => 'A comprehensive guide to modern layouts using Grid and Subgrid features effectively...',
                'tr' => 'Grid ve Subgrid özelliklerini etkili bir şekilde kullanarak modern düzenlere yönelik kapsamlı bir rehber...'
            ],
            'thumbnail' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBm9Z67eNOHcFarNP7TrPB2p9KHetgVQWC-N0ugSdjb312NSH7UxH35309akKV9I5r73EW7RjczYVC9yn4Vi5py4EbCSjW73TrN1uifvH_y24-_GzROFjsELN0YzwFVZJ9YwmFXZQa2zusGjzxLB2dEjlXksmuzWLB44-OxqFMeFsM0Um_7w8hlXHVNkJAVN4aLZB-rTJSonwCUD6y2tXQoadyoui44ei7ZS9Qvm_cjb6TDJK2ERi2_qfqIY3IdXQsUBgyBNJLYkO8',
            'published_at' => '2023-10-24',
            'is_active' => true,
        ]);

        // Blog 2
        \App\Models\Blog::create([
            'title' => ['en' => 'Why I switched to Linux for Development', 'tr' => "Geliştirme İçin Neden Linux'a Geçtim"],
            'slug' => ['en' => 'switched-to-linux', 'tr' => 'linuxa-gectim'],
            'content' => [
                'en' => "Leaving macOS behind wasn't easy, but the control and customization were worth it.",
                'tr' => "macOS'u geride bırakmak kolay değildi ama kontrol ve özelleştirme buna değdi."
            ],
            'thumbnail' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBx1MUfHUl610RAIM3wI2NfhSCYE-vjiTPjIXPI3xNA7FMXfRTV4iR0T1ARaPFMomzv7novyIosI-6FiW6GKPBpbijsAXnqtvhEvsqMIBjT63JcqyxLyurekN7sEAYhrBNmciGrlJdwHJghkgdLI91gq01R6YLxcAXjjXM6qpfRr-e2gJF15jcAnPxBfvs47yoflF2fX8OoKvIYQ-OZvINetka8UQozJuaC_ExAoQV6NO4LMmhKLMtloYBC3D1xMDPtwhUW4qDO5yU',
            'published_at' => '2023-11-02',
            'is_active' => true,
        ]);

        // Blog 3
        \App\Models\Blog::create([
            'title' => ['en' => 'The Future of AI in Web Dev', 'tr' => 'Web Geliştirmede Yapay Zekanın Geleceği'],
            'slug' => ['en' => 'future-of-ai', 'tr' => 'yapay-zekanin-gelecegi'],
            'content' => [
                'en' => "Will LLMs replace frontend engineers? Or will they just make us 10x faster?",
                'tr' => "LLM'ler ön uç mühendislerinin yerini alacak mı? Yoksa bizi sadece 10 kat daha hızlı mı yapacaklar?"
            ],
            'thumbnail' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDgKAXz1d-n_AAV6kqfuP2t42L5x8fgJNnOFmtrsKZIkEJ-xK33lvFGJpY8eLra85S4y-iCYb-0Oc5-qDFFgqtRQjIvXArjh7hwxi_ulbQPfRRILv_zDsUrx40-xQQcf0YNQM4T2TguWQsdHlL4Y-xDKLXWLzA2o1n2w4g58Sa7n34Y6-R7_wRAHFX2ZlJxcOYtd1USOmQbvqN0qWRL51PNsx0pxKHtXL-HWhdZ8_jNydV68bRj3MQCXosyWCkRaEDHPGWtgudrEJI',
            'published_at' => '2023-11-15',
            'is_active' => true,
        ]);

        // Blog 4 (Building Scalable Systems with Rust - Featured)
         \App\Models\Blog::create([
            'title' => ['en' => 'Building Scalable Systems with Rust', 'tr' => 'Rust ile Ölçeklenebilir Sistemler'],
            'slug' => ['en' => 'scalable-systems-rust', 'tr' => 'rust-olceklenebilir-sistemler'],
            'content' => [
                'en' => "Memory safety without garbage collection is a game changer...",
                'tr' => "Çöp toplama olmadan bellek güvenliği oyunun kurallarını değiştiriyor..."
            ],
            'thumbnail' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDJBvGOn_f_MhUUaqXp0Y7yhhNdqHB5leXvgWBeZ2unHxmB0EO_vqXE2KRbWObB94kuBg1B5GKQD9U32dVuJXNZDGd2Y4OCGYUITdrLW5oc2bV2CMMGGuOv2jup9O3tnfDQSZu3GnB3uk6mYexgUE44Xuj7hkICnCNqw9kP3ly5L0WA1fEaPgto5472pMIO-TL0BNZLrvUCMFTJTc7hUVrRVC66WZTCYA0Mx00ENtpyy5dmQpirrIk8CLKdZeuhDAGawIkYjJ8H4ZU',
            'published_at' => '2023-12-01',
            'is_active' => true,
        ]);
    }
}
