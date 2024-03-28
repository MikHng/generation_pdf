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

class EtatfinanceExport implements FromView, WithStyles
{
    public function view(): View
    {
                return view('Etat_des_Activites_FinancieresPdf');
    
    }

   public function styles(Worksheet $sheet)
   {
    $colors = [
        'A4:H4' => 'ccffcc',  // Vert
        'A5:H5' => 'ccffcc',  // Vert
        'A6:H6' => 'ccffcc',  // Vert
        'A7:H7' => 'ccffcc',  // Vert
        'A10:H10' => 'ccffcc',  // Vert
        'A15:H15' => 'ffff99',  // Jaune
        'A17:H17' => 'ccffcc',  // Vert
        'A22:H22' => 'ffff99',  // Jaune
        'A24:H24' => 'ffff99',  // Jaune
        'A25:H25' => 'ccffcc',  // Vert
        'A30:H30' => 'ccffcc',  // Vert
        'A31:H31' => 'ffff99',  // Jaune
        'A33:H33' => 'ccffcc',  // Vert
        'A35:H35' => 'ffff99',  // Jaune
        
      
    ];
   //A4 etant le debut et D44 etant la fin;
    $ranges = 'A4:' . 'H35';

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