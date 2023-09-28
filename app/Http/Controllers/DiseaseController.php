<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index()
    {
        return view('pages.disease.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'يجب إدخال إسم المرض'
        ]);


        Disease::create([
            'name' => $request->name,
        ]);

        return back()->with('success', 'تم إضافة المرض بنجاح');
    }

    public function show()
    {
        $diseases = Disease::get();
        return view('pages.disease.show', compact('diseases'));
    }
}
