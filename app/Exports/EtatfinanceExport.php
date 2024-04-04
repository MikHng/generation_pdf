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
    protected $a2;
    protected $b2;
    protected $c2;
    protected $d2;
    protected $e2;
    protected $f2;
    protected $g2;
    protected $h2;
    protected $i2;
    protected $j2;
    protected $k2;
    protected $l2;
    protected $m2;
    protected $n2;
    protected $o2;
    protected $p2;
    protected $q2;
    protected $r2;
    protected $s2;
    protected $t2;
    protected $u2;
    protected $v2;
    protected $w2;
    protected $x2;
    protected $y2;
    protected $z2;
    protected $a3;
    protected $b3;
    protected $c3;
    protected $d3;
    protected $e3;
    protected $f3;
    protected $g3;
    protected $h3;
    protected $i3;
    protected $j3;
    protected $k3;
    protected $l3;
    protected $m3;
    protected $n3;
    protected $o3;
    protected $p3;
    protected $q3;
    protected $r3;
    protected $s3;
    protected $t3;
    protected $u3;
    protected $v3;
    protected $w3;
    protected $x3;
    protected $y3;
    protected $z3;
    protected $a4;
    protected $b4;
    protected $c4;
    protected $d4;
    protected $e4;
    protected $f4;
    protected $g4;
    protected $h4;
    protected $i4;
    protected $j4;
    protected $k4;
    protected $l4;
    protected $m4;
    protected $n4;
    protected $o4;
    protected $p4;
    protected $q4;
    protected $r4;
    protected $s4;
    protected $t4;
    protected $u4;
    protected $v4;
    protected $w4;
    protected $x4;
    protected $y4;
    protected $z4;
    protected $a5;
    protected $b5;

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
        $z1,
        $a2,
        $b2,
        $c2,
        $d2,
        $e2,
        $f2,
        $g2,
        $h2,
        $i2,
        $j2,
        $k2,
        $l2,
        $m2,
        $n2,
        $o2,
        $p2,
        $q2,
        $r2,
        $s2,
        $t2,
        $u2,
        $v2,
        $w2,
        $x2,
        $y2,
        $z2,
        $a3,
        $b3,
        $c3,
        $d3,
        $e3,
        $f3,
        $g3,
        $h3,
        $i3,
        $j3,
        $k3,
        $l3,
        $m3,
        $n3,
        $o3,
        $p3,
        $q3,
        $r3,
        $s3,
        $t3,
        $u3,
        $v3,
        $w3,
        $x3,
        $y3,
        $z3,
        $a4,
        $b4,
        $c4,
        $d4,
        $e4,
        $f4,
        $g4,
        $h4,
        $i4,
        $j4,
        $k4,
        $l4,
        $m4,
        $n4,
        $o4,
        $p4,
        $q4,
        $r4,
        $s4,
        $t4,
        $u4,
        $v4,
        $w4,
        $x4,
        $y4,
        $z4,
        $a5,
        $b5,)
    {
        $this-> a =  $a;
        $this-> b =  $b;
        $this-> c =  $c;
        $this-> d =  $d;
        $this-> e =  $e;
        $this-> f =  $f;
        $this-> g =  $g;
        $this-> h =  $h;
        $this-> i =  $i;
        $this-> j =  $j;
        $this-> k =  $k;
        $this-> l =  $l;
        $this-> m =  $m;
        $this-> n =  $n;
        $this-> o =  $o;
        $this-> p =  $p;
        $this-> q =  $q;
        $this-> r =  $r;
        $this-> s =  $s;
        $this-> t =  $t;
        $this-> u =  $u;
        $this-> v =  $v;
        $this-> w =  $w;
        $this-> x =  $x;
        $this-> y =  $y;
        $this-> z =  $z;
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
        $this-> w1 =  $w1;
        $this-> x1 =  $x1;
        $this-> y1 =  $y1;
        $this-> z1 =  $z1;
        $this-> a2 =  $a2;
        $this-> b2 =  $b2;
        $this-> c2 =  $c2;
        $this-> d2 =  $d2;
        $this-> e2 =  $e2;
        $this-> f2 =  $f2;
        $this-> g2 =  $g2;
        $this-> h2 =  $h2;
        $this-> i2 =  $i2;
        $this-> j2 =  $j2;
        $this-> k2 =  $k2;
        $this-> l2 =  $l2;
        $this-> m2 =  $m2;
        $this-> n2 =  $n2;
        $this-> o2 =  $o2;
        $this-> p2 =  $p2;
        $this-> q2 =  $q2;
        $this-> r2 =  $r2;
        $this-> s2 =  $s2;
        $this-> t2 =  $t2;
        $this-> u2 =  $u2;
        $this-> v2 =  $v2;
        $this-> w2 =  $w2;
        $this-> x2 =  $x2;
        $this-> y2 =  $y2;
        $this-> z2 =  $z2;
        $this-> a3 =  $a3;
        $this-> b3 =  $b3;
        $this-> c3 =  $c3;
        $this-> d3 =  $d3;
        $this-> e3 =  $e3;
        $this-> f3 =  $f3;
        $this-> g3 =  $g3;
        $this-> h3 =  $h3;
        $this-> i3 =  $i3;
        $this-> j3 =  $j3;
        $this-> k3 =  $k3;
        $this-> l3 =  $l3;
        $this-> m3 =  $m3;
        $this-> n3 =  $n3;
        $this-> o3 =  $o3;
        $this-> p3 =  $p3;
        $this-> q3 =  $q3;
        $this-> r3 =  $r3;
        $this-> s3 =  $s3;
        $this-> t3 =  $t3;
        $this-> u3 =  $u3;
        $this-> v3 =  $v3;
        $this-> w3 =  $w3;
        $this-> x3 =  $x3;
        $this-> y3 =  $y3;
        $this-> z3 =  $z3;
        $this-> a4 =  $a4;
        $this-> b4 =  $b4;
        $this-> c4 =  $c4;
        $this-> d4 =  $d4;
        $this-> e4 =  $e4;
        $this-> f4 =  $f4;
        $this-> g4 =  $g4;
        $this-> h4 =  $h4;
        $this-> i4 =  $i4;
        $this-> j4 =  $j4;
        $this-> k4 =  $k4;
        $this-> l4 =  $l4;
        $this-> m4 =  $m4;
        $this-> n4 =  $n4;
        $this-> o4 =  $o4;
        $this-> p4 =  $p4;
        $this-> q4 =  $q4;
        $this-> r4 =  $r4;
        $this-> s4 =  $s4;
        $this-> t4 =  $t4;
        $this-> u4 =  $u4;
        $this-> v4 =  $v4;
        $this-> w4 =  $w4;
        $this-> x4 =  $x4;
        $this-> y4 =  $y4;
        $this-> z4 =  $z4;
        $this-> a5 =  $a5;
        $this-> b5 =  $b5;
    }


    public function view(): View
    {
                return view('Etat_des_Activites_FinancieresPdf', [
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
                    'z1' => $this -> z1 ,
                    'a2' => $this -> a2 ,
                    'b2' => $this -> b2 ,
                    'c2' => $this -> c2 ,
                    'd2' => $this -> d2 ,
                    'e2' => $this -> e2 ,
                    'f2' => $this -> f2 ,
                    'g2' => $this -> g2 ,
                    'h2' => $this -> h2 ,
                    'i2' => $this -> i2 ,
                    'j2' => $this -> j2 ,
                    'k2' => $this -> k2 ,
                    'l2' => $this -> l2 ,
                    'm2' => $this -> m2 ,
                    'n2' => $this -> n2 ,
                    'o2' => $this -> o2 ,
                    'p2' => $this -> p2 ,
                    'q2' => $this -> q2 ,
                    'r2' => $this -> r2 ,
                    's2' => $this -> s2 ,
                    't2' => $this -> t2 ,
                    'u2' => $this -> u2 ,
                    'v2' => $this -> v2 ,
                    'w2' => $this -> w2 ,
                    'x2' => $this -> x2 ,
                    'y2' => $this -> y2 ,
                    'z2' => $this -> z2 ,
                    'a3' => $this -> a3 ,
                    'b3' => $this -> b3 ,
                    'c3' => $this -> c3 ,
                    'd3' => $this -> d3 ,
                    'e3' => $this -> e3 ,
                    'f3' => $this -> f3 ,
                    'g3' => $this -> g3 ,
                    'h3' => $this -> h3 ,
                    'i3' => $this -> i3 ,
                    'j3' => $this -> j3 ,
                    'k3' => $this -> k3 ,
                    'l3' => $this -> l3 ,
                    'm3' => $this -> m3 ,
                    'n3' => $this -> n3 ,
                    'o3' => $this -> o3 ,
                    'p3' => $this -> p3 ,
                    'q3' => $this -> q3 ,
                    'r3' => $this -> r3 ,
                    's3' => $this -> s3 ,
                    't3' => $this -> t3 ,
                    'u3' => $this -> u3 ,
                    'v3' => $this -> v3 ,
                    'w3' => $this -> w3 ,
                    'x3' => $this -> x3 ,
                    'y3' => $this -> y3 ,
                    'z3' => $this -> z3 ,
                    'a4' => $this -> a4 ,
                    'b4' => $this -> b4 ,
                    'c4' => $this -> c4 ,
                    'd4' => $this -> d4 ,
                    'e4' => $this -> e4 ,
                    'f4' => $this -> f4 ,
                    'g4' => $this -> g4 ,
                    'h4' => $this -> h4 ,
                    'i4' => $this -> i4 ,
                    'j4' => $this -> j4 ,
                    'k4' => $this -> k4 ,
                    'l4' => $this -> l4 ,
                    'm4' => $this -> m4 ,
                    'n4' => $this -> n4 ,
                    'o4' => $this -> o4 ,
                    'p4' => $this -> p4 ,
                    'q4' => $this -> q4 ,
                    'r4' => $this -> r4 ,
                    's4' => $this -> s4 ,
                    't4' => $this -> t4 ,
                    'u4' => $this -> u4 ,
                    'v4' => $this -> v4 ,
                    'w4' => $this -> w4 ,
                    'x4' => $this -> x4 ,
                    'y4' => $this -> y4 ,
                    'z4' => $this -> z4 ,
                    'a5' => $this -> a5 ,
                    'b5' => $this -> b5 ,
                 ]);
    
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