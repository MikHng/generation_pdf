<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function afficherBilan()
    {
        return view('Bilan');
    }

    public function afficheretataf()
    {
        return view('Etat_des_Activites_Financieres');
    }

    public function afficheretatflux()
    {
        return view('Etat_Flux_de_Tresorerie');
    }

    public function affichefonds()
    {
        return view('Fonds_Restreints');
    }

    public function affichenotebilan()
    {
        return view('Notes_Bilan');
    }

    public function afficheeaf()
    {
        return view('Notes_EAF');
    }
}
