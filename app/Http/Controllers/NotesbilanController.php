<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NotesbilanExport;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
Use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

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
/*
    public function export()
    {
        $data = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data2 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data3 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data4 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data5 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data6 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data7 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data8 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data9 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data10 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data11 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        $data12 = [
            'colonne1' => null,
            'colonne2' => null,
            'colonne3' => null,
            // Ajoutez d'autres champs avec des valeurs nulles selon vos besoins pour la table 2
        ];

        

        $spreadsheet = new Spreadsheet();

        // Table 1
        $html1 = view('Notes_EAFExcel', ['data' => $data])->render();
        $worksheet1 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille1');
        $worksheet1->fromHtml($html1);
        $spreadsheet->addSheet($worksheet1);

        // Table 2
        $html2 = view('Notes_EAFExcel', ['data' => $data2])->render();
        $worksheet2 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille2');
        $worksheet2->fromHtml($html2);
        $spreadsheet->addSheet($worksheet2);

        $html3 = view('Notes_EAFExcel', ['data' => $data3])->render();
        $worksheet3 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille3');
        $worksheet3->fromHtml($html3);
        $spreadsheet->addSheet($worksheet3);

        $html4 = view('Notes_EAFExcel', ['data' => $data4])->render();
        $worksheet4 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille4');
        $worksheet4->fromHtml($html4);
        $spreadsheet->addSheet($worksheet4);

        $html5 = view('Notes_EAFExcel', ['data' => $data5])->render();
        $worksheet5 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille5');
        $worksheet5->fromHtml($html5);
        $spreadsheet->addSheet($worksheet5);

        $html6 = view('Notes_EAFExcel', ['data' => $data6])->render();
        $worksheet6 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille6');
        $worksheet6->fromHtml($html6);
        $spreadsheet->addSheet($worksheet6);

        $html7 = view('Notes_EAFExcel', ['data' => $data7])->render();
        $worksheet7 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille7');
        $worksheet7->fromHtml($html7);
        $spreadsheet->addSheet($worksheet7);

        $html8 = view('Notes_EAFExcel', ['data' => $data8])->render();
        $worksheet8 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille8');
        $worksheet8->fromHtml($html8);
        $spreadsheet->addSheet($worksheet2);

        $html9 = view('Notes_EAFExcel', ['data' => $data9])->render();
        $worksheet9 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille9');
        $worksheet9->fromHtml($html9);
        $spreadsheet->addSheet($worksheet9);

        $html10 = view('Notes_EAFExcel', ['data' => $data10])->render();
        $worksheet10 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille10');
        $worksheet10->fromHtml($html10);
        $spreadsheet->addSheet($worksheet10);

        $html11 = view('Notes_EAFExcel', ['data' => $data11])->render();
        $worksheet11 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille11');
        $worksheet11->fromHtml($html11);
        $spreadsheet->addSheet($worksheet11);

        $html12 = view('Notes_EAFExcel', ['data' => $data12])->render();
        $worksheet12 = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Feuille12');
        $worksheet12->fromHtml($html12);
        $spreadsheet->addSheet($worksheet12);

        // Ajoutez d'autres tables au besoin

        // Active la première feuille
        $spreadsheet->setActiveSheetIndex(0);

        // Crée un objet de réponse
        $response = response()->stream(
            function () use ($spreadsheet) {
                $writer = new Xlsx($spreadsheet);
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="nom_du_fichier.xlsx"',
            ]
        );

        return $response;
    }*/
    
    public function export() 
    {
        return Excel::download(new NotesbilanExport, 'Notes_Bilan.xlsx');
    }
}
