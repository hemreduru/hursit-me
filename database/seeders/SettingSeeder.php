<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contacts
        \App\Models\Setting::create(['key' => 'email', 'value' => 'hemreduru@gmail.com', 'type' => 'text', 'group' => 'contact']);
        \App\Models\Setting::create(['key' => 'github_link', 'value' => 'https://github.com/hemreduru', 'type' => 'text', 'group' => 'contact']);
        \App\Models\Setting::create(['key' => 'linkedin_link', 'value' => 'https://linkedin.com/in/hemreduru', 'type' => 'text', 'group' => 'contact']);
        \App\Models\Setting::create(['key' => 'phone', 'value' => '+90 (539) 119 11 63', 'type' => 'text', 'group' => 'contact']);
        \App\Models\Setting::create(['key' => 'address_en', 'value' => 'Nicosia, TRNC', 'type' => 'text', 'group' => 'contact']);
        \App\Models\Setting::create(['key' => 'address_tr', 'value' => 'Lefkoşa, KKTC', 'type' => 'text', 'group' => 'contact']);
    }
}
