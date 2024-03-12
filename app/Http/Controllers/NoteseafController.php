<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NoteseafExport;

class NoteseafController extends Controller
{
    public function afficheeaf()
    {
       return view('Notes_EAF');
        
  
    }
    public function afficheeafPdf()
    {
         $Data = ['foo' => 'bar'];

              $pdf = PDF::loadView('Notes_EAFPdf', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);

        
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('Notes_EAF.pdf');

    }

    public function export() 
    {
        return Excel::download(new NoteseafExport, 'Notes_EAF.xlsx');
    }
}
