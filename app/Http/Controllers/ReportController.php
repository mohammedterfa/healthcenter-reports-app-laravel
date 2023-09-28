<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

use PDF;

class ReportController extends Controller
{
    public function index()
    {
        $diseases = Disease::get();
        return view('pages.reports.index', compact('diseases'));
    }


    public function detailed()
    {
        $data = [
            'foo' => 'bar'
        ];

        $pdf = PDF::loadView('pdf.document', $data);

        return $pdf->stream('document.pdf');
    }
}
