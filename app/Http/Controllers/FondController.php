<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FondController extends Controller
{
    public function affichefonds()
    {
        return view('Fonds_Restreints');
    }
}
