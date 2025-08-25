<?php

namespace App\Http\Controllers;

use Spatie\LaravelPdf\Facades\Pdf;

class PdfExportController extends Controller
{
    public function exportForm2A()
    {
        //sample code
        $protocol = (object)[
            'mcuerb_code' => 'MCU-2025-001',
            'title' => 'Effect of AI on Research Practices',
            'principal_investigator' => 'Dr. Juan Dela Cruz',
            'co_investigator' => 'Prof. Maria Santos',
            'review_type' => 'EXPEDITED',
        ];

        //dito din palitan mo nalang din
        return Pdf::view('student.forms.form5ePdf', compact('protocol'))
            ->format('Letter')
            ->margins(15, 15, 15, 15)
            ->inline('FORM-2D.pdf');
    }
}
