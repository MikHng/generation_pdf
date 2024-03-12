<?php

namespace App\Http\Controllers;
//namespace App\Models\Excel;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelsExport;

class BilanController extends Controller
{
    public function afficherBilan()
    {
        return view('Bilan');
    }
    public function afficherBilanPdf()
    {
         $Data = ['foo' => 'bar'];

              $pdf = PDF::loadView('BilanPdf', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);

        
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('Bilan.pdf');
    }
    public function export() 
        {
            return Excel::download(new ExcelsExport, 'bilan.xlsx');
        }

}
