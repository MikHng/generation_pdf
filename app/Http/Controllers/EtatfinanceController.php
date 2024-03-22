<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EtatfinanceExport;
use App\Models\informationrapport;


class EtatfinanceController extends Controller
{
    public function afficheretataf()
    {
        return view('Etat_des_Activites_Financieres');
    }
    public function afficheretatafPdf()
    {
         $Data = ['foo' => 'bar'];

              $pdf = PDF::loadView('Etat_des_Activites_FinancieresPdf', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);

        
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('Etat_des_Activites_Financieres.pdf');

    }

    public function export() 
        {
            return Excel::download(new EtatfinanceExport, 'Etat_des_Activites_Financieres.xlsx');
        }

        public function maVueSpecifique()
    {
        $nomstructure = Informationrapport::latest()->value('nomstructure');
        $annee = Informationrapport::latest()->value('annee');
        $nomdfc = Informationrapport::latest()->value('nomdfc');
        $nomdir = Informationrapport::latest()->value('nomdir');
        
        return view('Etat_des_Activites_Financieres', compact('nomstructure', 'annee', 'nomdfc', 'nomdir'));
    }

     /*   public function passerDerniereValeurChampVersVue()
        {
            // Récupérer la dernière valeur enregistrée du champ dans votre tableau
            $derniereValeur = Information::latest()->value('nom_du_champ'); // Remplacez 'nom_du_champ' par le nom de votre champ
    
            // Passer la dernière valeur à la vue
            return view('votre_vue', ['derniereValeur' => $derniereValeur]);
        }*/
}
