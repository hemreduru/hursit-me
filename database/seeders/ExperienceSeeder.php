<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Uluslarası Kıbrıs Üniversitesi
        \App\Models\Experience::create([
            'company_name' => 'Uluslarası Kıbrıs Üniversitesi',
            'role' => [
                'en' => 'Software Developer',
                'tr' => 'Yazılım Geliştirici'
            ],
            'description' => [
                'en' => 'Created and maintained robust software solutions using Laravel (PHP), SQL, on Ubuntu. Ensured software reliability and performance, contributing to the university\'s digital infrastructure. Focused on user-friendly interface design, intuitive navigation, and efficient database design. Part of a dynamic team of developers, effectively using GitLab.',
                'tr' => 'Laravel (PHP) ve SQL kullanarak Ubuntu üzerinde sağlam yazılım çözümleri oluşturup bakımını yaptım. Üniversitenin dijital altyapısına katkıda bulunarak yazılım güvenilirliğini ve performansını sağladım. Kullanıcı dostu arayüz tasarımı, sezgisel gezinme ve verimli veritabanı tasarımına odaklandım. GitLab\'ı etkin bir şekilde kullanan dinamik bir geliştirici ekibinin parçası oldum.'
            ],
            'start_date' => '2024-08-01',
            'is_current' => true,
        ]);

        // 2. Freelance
        \App\Models\Experience::create([
            'company_name' => 'Freelance',
            'role' => [
                'en' => 'Software Developer',
                'tr' => 'Yazılım Geliştirici'
            ],
            'description' => [
                'en' => 'Developed robust REST APIs utilizing MySQL and Laravel/PHP. Delivered tailored solutions for diverse client needs, ensuring usability, performance, and scalability. Integrated intuitive user interfaces with optimized backend systems. Effectively collaborated with clients to transform business requirements into functional platforms.',
                'tr' => 'MySQL ve Laravel/PHP kullanarak sağlam REST API\'ler geliştirdim. Çeşitli müşteri ihtiyaçları için kullanılabilirlik, performans ve ölçeklenebilirlik sağlayan özel çözümler sundum. Sezgisel kullanıcı arayüzlerini optimize edilmiş arka uç sistemleriyle entegre ettim. İş gereksinimlerini işlevsel platformlara dönüştürmek için müşterilerle etkili bir şekilde işbirliği yaptım.'
            ],
            'start_date' => '2020-04-01',
            'is_current' => true,
        ]);
    }
}
