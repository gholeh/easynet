<?php

namespace App\Filament\Resources\AppSettingsResource\Pages;

use App\Filament\Resources\AppSettingsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppSettings extends ListRecords
{
    protected static string $resource = AppSettingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
