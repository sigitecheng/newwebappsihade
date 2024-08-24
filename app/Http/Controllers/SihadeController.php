<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SihadeController extends Controller
{
    //

    public function index()
    {
        return view('frontend.dashboard.index', [

            'title' => 'Sihade',
        ]);
    }
    
}
