<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PersonalInfo::create([
            'full_name' => 'Hurşit Emre Duru',
            'hero_title' => ['en' => 'Software Developer', 'tr' => 'Yazılım Geliştirici'],
            'about_text' => [
                'en' => 'Objectives: Contract Type: Full-time Employment. Open to: On-Site, Remote and Hybrid Positions. Location: Nicosia, TRNC.',
                'tr' => 'Hedefler: Sözleşme Türü: Tam Zamanlı İstihdam. Açık olduğu pozisyonlar: Yerinde, Uzaktan ve Hibrit Pozisyonlar. Konum: Lefkoşa, KKTC.'
            ],
            'cv_file' => 'hursit-cv-en.pdf',
            'avatar_image' => 'https://ui-avatars.com/api/?name=Hursit+Emre+Duru&background=0D8ABC&color=fff',
        ]);
    }
}
