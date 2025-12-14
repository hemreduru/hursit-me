<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Echt Zorg Travel
        \App\Models\Portfolio::create([
            'title' => ['en' => 'Echt Zorg Travel', 'tr' => 'Echt Zorg Travel'],
            'slug' => ['en' => 'echt-zorg-travel', 'tr' => 'echt-zorg-travel'],
            'description' => [
                'en' => 'Built the website from scratch using Laravel (PHP) and MySQL. Designed and implemented as a mini CMS to allow flexibility and scalability. Developed an admin panel enabling the client to fully manage and control every aspect of the website. Integrated email, SMS, and Telegram notification systems for enhanced communication. Implemented a CI/CD pipeline to ensure smooth and continuous deployment.',
                'tr' => 'Laravel (PHP) ve MySQL kullanarak web sitesini sıfırdan oluşturdum. Esneklik ve ölçeklenebilir izin verecek şekilde bir mini CMS olarak tasarladım ve uyguladım. Müşterinin web sitesinin her yönünü tam olarak yönetmesini ve kontrol etmesini sağlayan bir yönetim paneli geliştirdim. Gelişmiş iletişim için e-posta, SMS ve Telegram bildirim sistemlerini entegre ettim. Sorunsuz ve sürekli dağıtım sağlamak için bir CI/CD boru hattı uyguladım.'
            ],
            'image' => 'https://placehold.co/600x400/2563eb/ffffff?text=Echt+Zorg',
            'link' => '#',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // 2. Harbeli Bilişim
        \App\Models\Portfolio::create([
            'title' => ['en' => 'Harbeli Bilişim', 'tr' => 'Harbeli Bilişim'],
            'slug' => ['en' => 'harbeli-bilisim', 'tr' => 'harbeli-bilisim'],
            'description' => [
                'en' => 'Performed periodic maintenance and updates on the existing WordPress website. Developed a custom import method to streamline product additions. Rebuilt the entire website from using Laravel (PHP) and MySQL, based on client requirements. Implemented an automated migration process to transfer data from the old WordPress site to the new Laravel-based system.',
                'tr' => 'Mevcut WordPress web sitesinde periyodik bakım ve güncellemeler gerçekleştirdim. Ürün eklemelerini kolaylaştırmak için özel bir içe aktarma yöntemi geliştirdim. Müşteri gereksinimlerine göre tüm web sitesini Laravel (PHP) ve MySQL kullanarak yeniden oluşturdum. Verileri eski WordPress sitesinden yeni Laravel tabanlı sisteme aktarmak için otomatik bir geçiş süreci uyguladım.'
            ],
            'image' => 'https://placehold.co/600x400/ea580c/ffffff?text=Harbeli',
            'link' => '#',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        // 3. Levent School
        \App\Models\Portfolio::create([
            'title' => ['en' => 'Levent School', 'tr' => 'Levent Schools'],
            'slug' => ['en' => 'levent-school', 'tr' => 'levent-school'],
            'description' => [
                'en' => 'Created a comprehensive end-user documentation covering the full usage of the system. Implemented bulk import functionality to migrate existing personnel data from CSV and XLSX files. Developed automated document and form generation features required by the school. Tech stack: Laravel, MySQL, JavaScript.',
                'tr' => 'Sistemin tam kullanımını kapsayan kapsamlı bir son kullanıcı dokümantasyonu oluşturdum. Mevcut personel verilerini CSV ve XLSX dosyalarından taşımak için toplu içe aktarma işlevi uyguladım. Okulun ihtiyaç duyduğu otomatik belge ve form oluşturma özellikleri geliştirdim. Teknoloji yığını: Laravel, MySQL, JavaScript.'
            ],
            'image' => 'https://placehold.co/600x400/16a34a/ffffff?text=Levent+Schools',
            'link' => '#',
            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}
