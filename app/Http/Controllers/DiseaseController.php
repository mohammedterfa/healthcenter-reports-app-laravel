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

    public function edit($id)
    {
        $disease = Disease::find($id);
        return view('pages.disease.edit', compact('disease'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'يجب إدخال إسم المرض'
        ]);


        Disease::find($id)->update([
            'name' => $request->name
        ]);


        return back()->with('success', 'تم التعديل بنجاح');
    }


    public function delete($id)
    {
        Disease::find($id)->delete();

        return back()->with('success', 'تم الحذف بنجاح');
    }
}
