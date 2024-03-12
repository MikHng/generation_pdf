<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FondExport;


class FondController extends Controller
{
    public function affichefonds()
    {
        return view('Fonds_Restreints');
    }
    public function affichefondsPdf()
    {
         $Data = ['foo' => 'bar'];

              $pdf = PDF::loadView('Fonds_RestreintsPdf', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);

        
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('Fonds_Restreints.pdf');

    }

    public function export() 
    {
        return Excel::download(new FondExport, 'Fonds_Restreints.xlsx');
    }
}
