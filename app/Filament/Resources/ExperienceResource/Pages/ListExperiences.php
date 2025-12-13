<?php

namespace App\Filament\Resources\ExperienceResource\Pages;

use App\Filament\Resources\ExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListExperiences extends ListRecords
{
    use Translatable;
    protected static string $resource = ExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
