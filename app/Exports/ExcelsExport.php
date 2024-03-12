<?php

namespace App\Exports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Spatie\SimpleExcel\Sheet;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
//use Maatwebsite\Excel\Facades\Excel;

class ExcelsExport implements FromView, WithStyles
{
    public function view(): View
    {
                return view('BilanPdf');
    
    }

   // public function sheets(): array
   // {
       /* return [
            'bilan' => function () {
                $view = $this->view();
                $html = $view->render();
                dd($html);
                $htmlWithStyle = "<style>
                                 
                                body {
                                    font-family: Arial, sans-serif;
                                    font-size: 12px;
                                    background-color: Black;
                                }
                                th, td {
                                    border: 1px solid #ddd;
                                    padding: 8px;
                                }
                              
                              </style>" . $html;
                //$sheet = Sheet::html($html);
                $sheet = Sheet::html(new HtmlString($htmlWithStyle));

                return $sheet;
            },
        ];*/
   // }

   public function styles(Worksheet $sheet)
   {
       $sheet->getStyle('A1:' . $sheet->getHighestColumn() . $sheet->getHighestRow())
           ->getFill()
           ->setFillType(Fill::FILL_SOLID)
           ->getStartColor()
           ->setARGB('FFFF0000'); // Rouge
   }
    //public function styles($sheet)
    //{
        // Définissez les styles à appliquer au fichier Excel ici
    //}
}

/*
class ExcelsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    
    public function collection()
    {
        return Excel::all();
    }
}*/
