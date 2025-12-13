<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\TranslationLoader\LanguageLine;

class ImportTranslations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translations:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import translations from tr.json to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = lang_path('tr.json');

        if (!file_exists($path)) {
            $this->error("File not found: $path");
            return;
        }

        $json = json_decode(file_get_contents($path), true);

        if (!$json) {
            $this->error("Invalid JSON or empty file");
            return;
        }

        $this->info("Importing " . count($json) . " translation keys...");

        foreach ($json as $key => $trValue) {
            // Check if exists
            $line = LanguageLine::where('group', '_json')
                ->where('key', $key)
                ->first();

            if ($line) {
                // Update existing
                $text = $line->text;
                $text['tr'] = $trValue;
                // If 'en' doesn't exist, set it to the key (as per user workflow usually key=english)
                if (!isset($text['en'])) {
                    $text['en'] = $key;
                }
                $line->text = $text;
                $line->save();
            } else {
                // Create new
                LanguageLine::create([
                    'group' => '_json',
                    'key' => $key,
                    'text' => [
                        'en' => $key,
                        'tr' => $trValue
                    ],
                ]);
            }
        }

        $this->info("Done! Imported/Updated translations.");
    }
}
