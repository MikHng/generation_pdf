<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;

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

}
