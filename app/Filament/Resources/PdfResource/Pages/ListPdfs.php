<?php

namespace App\Filament\Resources\PdfResource\Pages;

use App\Filament\Resources\PdfResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPdfs extends ListRecords
{
    protected static string $resource = PdfResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
