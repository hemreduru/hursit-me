<?php

namespace App\Filament\Resources\PersonalInfoResource\Pages;

use App\Filament\Resources\PersonalInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListPersonalInfos extends ListRecords
{
    use Translatable;
    protected static string $resource = PersonalInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
