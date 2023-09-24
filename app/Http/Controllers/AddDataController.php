<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddDataController extends Controller
{
    public function index()
    {
        return view('pages/data/add_data');
    }
}
