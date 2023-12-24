<?php

namespace App\Filament\Resources\PdfResource\Pages;

use App\Filament\Resources\PdfResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPdf extends EditRecord
{
    protected static string $resource = PdfResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
