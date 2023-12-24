<?php

namespace App\Filament\Resources\KendaraanResource\Pages;

use App\Filament\Resources\KendaraanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKendaraan extends EditRecord
{
    protected static string $resource = KendaraanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
