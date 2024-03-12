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
        'A4:D4' => 'ccffcc',  // Vert
        'A6:D6' => 'ccffcc',  // Vert
        'A7:D7' => 'ccffcc',  // Vert
        'A14:D14' => 'ffff99',  // Jaune
        'A16:D16' => 'ccffcc',  // Vert
        'A22:D22' => 'ffff99',  // Jaune
        'A24:D24' => 'ffff99',  // Jaune
        'A26:D26' => 'ccffcc',  // Vert
        'A27:D27' => 'ccffcc',  // Vert
        'A30:D30' => 'ffff99',  // Jaune
        'A32:D32' => 'ccffcc',  // Vert
        'A35:D35' => 'ffff99',  // Jaune
        'A37:D37' => 'ccffcc',  // Vert
        'A42:D42' => 'ffff99',  // Jaune
        'A44:D44' => 'ffff99',  // Jaune
      
    ];
   //A4 etant le debut et D44 etant la fin;
    $ranges = 'A4:' . 'D44';

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