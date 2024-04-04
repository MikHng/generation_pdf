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
use Maatwebsite\Excel\Concerns\Exportable;


class NotesbilanExport implements FromView, WithStyles
{
    use Exportable;
    protected $a;
    protected $b;
    protected $c;
    protected $d;
    protected $e;
    protected $f;
    protected $g;
    protected $h;
    protected $i;
    protected $j;
    protected $k;
    protected $l;
    protected $m;
    protected $n;
    protected $o;
    protected $p;
    protected $q;
    protected $r;
    protected $s;
    protected $t;
    protected $u;
    protected $v;
    protected $w;
    protected $x;
    protected $y;
    protected $z;
    protected $a1;
    protected $b1;
    protected $c1;
    protected $d1;
    protected $e1;
    protected $f1;
    protected $g1;
    protected $h1;
    protected $i1;
    protected $j1;
    protected $k1;
    protected $l1;
    protected $m1;
    protected $n1;
    protected $o1;
    protected $p1;
    protected $q1;
    protected $r1;
    protected $s1;
    protected $t1;
    protected $u1;
    protected $v1;
    protected $w1;
    protected $x1;
    protected $y1;
    protected $z1;
    public function __construct(         $a,
    $b,
    $c,
    $d,
    $e,
    $f,
    $g,
    $h,
    $i,
    $j,
    $k,
    $l,
    $m,
    $n,
    $o,
    $p,
    $q,
    $r,
    $s,
    $t,
    $u,
    $v,
    $w,
    $x,
    $y,
    $z,
    $a1,
    $b1,
    $c1,
    $d1,
    $e1,
    $f1,
    $g1,
    $h1,
    $i1,
    $j1,
    $k1,
    $l1,
    $m1,
    $n1,
    $o1,
    $p1,
    $q1,
    $r1,
    $s1,
    $t1,
    $u1,
    $v1,
    $w1,
    $x1,
    $y1,
    $z1,)
    {
        $this-> a = $a;
        $this-> b = $b;
        $this-> c = $c;
        $this-> d = $d;
        $this-> e = $e;
        $this-> f = $f;
        $this-> g = $g;
        $this-> h = $h;
        $this-> i = $i;
        $this-> j = $j;
        $this-> k = $k;
        $this-> l = $l;
        $this-> m = $m;
        $this-> n = $n;
        $this-> o = $o;
        $this-> p = $p;
        $this-> q = $q;
        $this-> r = $r;
        $this-> s = $s;
        $this-> t = $t;
        $this-> u = $u;
        $this-> v = $v;
        $this-> w = $w;
        $this-> x = $x;
        $this-> y = $y;
        $this-> z = $z;
        $this-> a1 = $a1;
        $this-> b1 = $b1;
        $this-> c1 = $c1;
        $this-> d1 = $d1;
        $this-> e1 = $e1;
        $this-> f1 = $f1;
        $this-> g1 = $g1;
        $this-> h1 = $h1;
        $this-> i1 = $i1;
        $this-> j1 = $j1;
        $this-> k1 = $k1;
        $this-> l1 = $l1;
        $this-> m1 = $m1;
        $this-> n1 = $n1;
        $this-> o1 = $o1;
        $this-> p1 = $p1;
        $this-> q1 = $q1;
        $this-> r1 = $r1;
        $this-> s1 = $s1;
        $this-> t1 = $t1;
        $this-> u1 = $u1;
        $this-> v1 = $v1;
        $this-> w1 = $w1;
        $this-> x1 = $x1;
        $this-> y1 = $y1;
        $this-> z1 = $z1;
    }

   
    public function view(): View
    {
       
                return view('Notes_BilanExcel', [
                    'a' => $this ->a ,
                    'b' => $this ->b ,
                    'c' => $this ->c ,
                    'd' => $this ->d ,
                    'e' => $this ->e ,
                    'f' => $this ->f ,
                    'g' => $this ->g ,
                    'h' => $this ->h ,
                    'i' => $this ->i ,
                    'j' => $this ->j ,
                    'k' => $this ->k ,
                    'l' => $this ->l ,
                    'm' => $this ->m ,
                    'n' => $this ->n ,
                    'o' => $this ->o ,
                    'p' => $this ->p ,
                    'q' => $this ->q ,
                    'r' => $this ->r ,
                    's' => $this ->s ,
                    't' => $this ->t ,
                    'u' => $this ->u ,
                    'v' => $this ->v ,
                    'w' => $this ->w ,
                    'x' => $this ->x ,
                    'y' => $this ->y ,
                    'z' => $this ->z ,
                    'a1' => $this -> a1 ,
                    'b1' => $this -> b1 ,
                    'c1' => $this -> c1 ,
                    'd1' => $this -> d1 ,
                    'e1' => $this -> e1 ,
                    'f1' => $this -> f1 ,
                    'g1' => $this -> g1 ,
                    'h1' => $this -> h1 ,
                    'i1' => $this -> i1 ,
                    'j1' => $this -> j1 ,
                    'k1' => $this -> k1 ,
                    'l1' => $this -> l1 ,
                    'm1' => $this -> m1 ,
                    'n1' => $this -> n1 ,
                    'o1' => $this -> o1 ,
                    'p1' => $this -> p1 ,
                    'q1' => $this -> q1 ,
                    'r1' => $this -> r1 ,
                    's1' => $this -> s1 ,
                    't1' => $this -> t1 ,
                    'u1' => $this -> u1 ,
                    'v1' => $this -> v1 ,
                    'w1' => $this -> w1 ,
                    'x1' => $this -> x1 ,
                    'y1' => $this -> y1 ,
                    'z1' => $this -> z1 ]);
    
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