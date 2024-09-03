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
        // $data_berkas = berkasberkas::all();
        return view('frontend.dashboard.index', [
            'title' => 'Sihade',
            // 'data_berkas' => $data_berkas,
        ]);
    }
    
}
