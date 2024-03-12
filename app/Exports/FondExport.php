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

class FondExport implements FromView, WithStyles
{
    public function view(): View
    {
                return view('Fonds_RestreintsPdf');
    
    }

   public function styles(Worksheet $sheet)
   {
    $colors = [
        'A4:E4' => 'ccffcc',  // Vert
        'A6:E6' => 'ccffcc',  // Vert
        'A13:E13' => 'ffff99',  // Jaune
        'A15:E15' => 'ccffcc',  // Vert
        'A19:E19' => 'ffff99',  // Jaune
        'A21:E21' => 'ccffcc',  // Vert
        'A25:E25' => 'ffff99',  // Jaune
        'A27:E27' => 'ffff99',  // Jaune
        
    ];
   //A4 etant le debut et D44 etant la fin;
    $ranges = 'A4:' . 'E27';

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