<?php

namespace App\Filament\Resources\IndexHomePageResource\Pages;

use App\Filament\Resources\IndexHomePageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndexHomePage extends EditRecord
{
    protected static string $resource = IndexHomePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
