<?php

namespace App\Filament\Resources\PdfResource\Pages;

use App\Filament\Resources\PdfResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePdf extends CreateRecord
{
    protected static string $resource = PdfResource::class;
}
