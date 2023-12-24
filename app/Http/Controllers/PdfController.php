<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kendaraan;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function __invoke(Kendaraan $kendaraan)
    {
        return Pdf::loadView('pdf', ['record' => $kendaraan])
            ->download($kendaraan->id. '.pdf');
    }
}
