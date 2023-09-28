<?php

namespace App\Http\Controllers;

use App\Models\DiseaseData;
use Illuminate\Http\Request;

class AddDataController extends Controller
{
    public function index()
    {
        return view('pages/data/add_data');
    }

    public function store(Request $request)
    {
        $request->validate([
           'date' => 'required|date',
           'disease' => 'required|integer',
           'examination' => 'required',
           'cases_number' => 'required|integer|min:1'
        ],
        [
            'date.required' => 'يجب إختيار التاريخ',
            'date.date' => 'صيغة التاريخ غير صحيحة',
            'disease.required' => 'يجب اختيار المرض',
            'disease.integer' => 'يجب اختيار مرض',
            'examination.required' => 'يجب اختيار التشخيص',
            'cases_number.required' => 'يجب ادخال عدد الحالات',
            'cases_number.integer' => 'يجب أن يكون الادخال بصيغة أرقام',
            'cases_number.min' => 'يجب ادخال عدد الحالات اكبر من 0'
        ]);

        DiseaseData::create([
            'date' => $request->date,
            'disease' => $request->disease,
            'examination' => $request->examination,
            'cases_number' => $request->cases_number
        ]);

        return back()->with('success', 'تم اضافة البيانات بنجاح');
    }


    public function show ()
    {
        $all_data = DiseaseData::get();
        return view('pages/data/show', compact('all_data'));
    }
}
