<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EtatfluxExport;

class EtatfluxController extends Controller
{
    public function afficheretatflux()
    {
        return view('Etat_Flux_de_Tresorerie');
    }
    public function afficheretatfluxPdf()
    {
         $Data = ['foo' => 'bar'];

              $pdf = PDF::loadView('Etat_Flux_de_TresoreriePdf', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);

        
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('Etat_Flux_de_Tresorerie.pdf');

    }

    public function export() 
    {
        return Excel::download(new EtatfluxExport, 'Etat_Flux_de_Tresorerie.xlsx');
    }
}
