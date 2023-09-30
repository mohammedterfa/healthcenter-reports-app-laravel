<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\DiseaseData;
use Illuminate\Http\Request;

use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;

class ReportController extends Controller
{
    public function index()
    {
        $diseases = Disease::get();
        return view('pages.reports.index', compact('diseases'));
    }


    public function detailed()
    {
        $diseases = DiseaseData::orderBy('date', 'desc')->get();

        $pdf = PDF::loadView('pdf.detailed', compact('diseases'));
        return $pdf->stream('detailed.pdf');
    }
}
