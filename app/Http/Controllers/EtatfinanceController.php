<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtatfinanceController extends Controller
{
    public function afficheretataf()
    {
        return view('Etat_des_Activites_Financieres');
    }
}
