<?php

namespace App\Filament\Resources\IndexHomePageResource\Pages;

use App\Filament\Resources\IndexHomePageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIndexHomePage extends ViewRecord
{
    protected static string $resource = IndexHomePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
