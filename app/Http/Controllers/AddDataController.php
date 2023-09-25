<?php

namespace App\Http\Controllers;

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
        ]
    );
    }
}
