<?php

namespace App\Filament\Resources\KendaraanResource\Pages;

use App\Filament\Resources\KendaraanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKendaraans extends ListRecords
{
    protected static string $resource = KendaraanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
