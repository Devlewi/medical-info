<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function dashboard()
    {
        return view('medecin.dashboard');
    }
}
