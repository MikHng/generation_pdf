<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BilanController extends Controller
{
    public function afficherBilan()
    {
        return view('Bilan');
    }

}
