<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NotesbilanExport;

class NotesbilanController extends Controller
{
    public function affichenotebilan()
    {
        return view('Notes_Bilan');
    }
    public function affichenotebilanPdf()
    {
         $Data = ['foo' => 'bar'];

              $pdf = PDF::loadView('Notes_BilanPdf', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);

        
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('Notes_Bilan.pdf');

    }

    public function export() 
    {
        return Excel::download(new NotesbilanExport, 'Notes_Bilan.xlsx');
    }
}
