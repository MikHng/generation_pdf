<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtatfluxController extends Controller
{
    public function afficheretatflux()
    {
        return view('Etat_Flux_de_Tresorerie');
    }
}
