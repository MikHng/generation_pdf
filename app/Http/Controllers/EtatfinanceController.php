<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EtatfinanceExport;


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
}
