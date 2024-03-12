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
use PhpOffice\PhpSpreadsheet\Style\Border;

class EtatfluxExport implements FromView, WithStyles
{
    public function view(): View
    {
                return view('Etat_Flux_de_TresoreriePdf');
    
    }

   public function styles(Worksheet $sheet)
   {
    $colors = [
        'A3:D3' => 'dce6f1',  //bleu
        'A4:D4' => 'ccffcc',  // Vert
        'A11:D11' => 'ffff99',  // Jaune
        'A15:D15' => 'ffff99',  // Jaune
        'A16:D16' => 'ffff99',  // Jaune
        'A18:D18' => 'ccffcc',  // Vert
        'A21:D21' => 'ffff99',  // Jaune
        'A23:D23' => 'ccffcc',  // Vert
        'A26:D26' => 'ffff99',  // Jaune
        'A28:D28' => 'ccffcc',  // Vert
        'A30:D30' => 'ffff99',  // Jaune
        'A31:D31' => 'ffff99',  // Jaune
        'A32:D32' => 'ffff99',  // Jaune
        'A36:D36' => 'ccffcc',  // Vert
        'A40:D40' => 'ffff99',  // Jaune


      
    ];
   //A4 etant le debut et D44 etant la fin;
    $ranges = 'A3:' . 'D40';

    foreach ($colors as $range => $color) {
        $sheet->getStyle($range)
            ->getFill()
            ->setFillType(Fill::FILL_SOLID)
            ->getStartColor()
            ->setARGB($color);
            
        $sheet->getStyle($ranges)
            ->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['argb' => '000000'], // Couleur noire
                    ],
                ],
            ]);
        $sheet->getStyle($range)->getFont()->setBold(true);
    }
}
}