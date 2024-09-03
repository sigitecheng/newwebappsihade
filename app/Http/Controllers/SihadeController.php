<?php

namespace App\Http\Controllers;

use App\Models\berkasberkas;
use App\Models\brosur;
use Illuminate\Http\Request;

class SihadeController extends Controller
{
    //
    public function index()
    {
        $data_berkas = brosur::all();
        return view('frontend.dashboard.index', [
            'title' => 'Sihade',
            'data' => $data_berkas,
        ]);
    }
    
}
