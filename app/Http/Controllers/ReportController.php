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


    public function detailed(Request $request)
    {
        $diseases = DiseaseData::
        where('date', '>=', $request->start_date)
        ->where('date', '<=', $request->end_date)
    /* ->groupBy('disease') // تجميع بناءً على اسم المرض
    ->selectRaw('disease, SUM(positive) as total_positive, SUM(negative) as total_negative') */
    ->get();
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $pdf = PDF::loadView('pdf.detailed', compact('diseases', 'start_date', 'end_date'));
        return $pdf->stream('detailed.pdf');
    }
}
