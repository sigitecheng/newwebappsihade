<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    //

    public function index()
    {
        // $data_berkas = brosur::all();
        return view('backend.admindashboard.index', [
            'title' => 'Administrator Sihade ',
            // 'data' => $data_berkas,
        ]);
    }
    
}
