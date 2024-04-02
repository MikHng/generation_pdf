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
use App\Models\Student; // Assurez-vous d'importer le modèle Student si ce n'est pas déjà fait
use App\Http\Controllers\StudentController;

class NotesbilanController extends Controller
{
    public function affichenotebilan()
    {
        $a = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z6 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z7 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z8 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z9 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        return view('Notes_Bilan', compact(
       'a',
       'b',
       'c',
       'd',
       'e',
       'f',
       'g',
       'h',
       'i',
       'j',
       'k',
       'l',
       'm',
       'n',
       'o',
       'p',
       'q',
       'r',
       's',
       't',
       'u',
       'v',
       'w',
       'x',
       'y',
       'z',
       'a1',
       'b1',
       'c1',
       'd1',
       'e1',
       'f1',
       'g1',
       'h1',
       'i1',
       'j1',
       'k1',
       'l1',
       'm1',
       'n1',
       'o1',
       'p1',
       'q1',
       'r1',
       's1',
       't1',
       'u1',
       'v1',
       'w1',
       'x1',
       'y1',
       'z1',
       'a2',
       'b2',
       'c2',
       'd2',
       'e2',
       'f2',
       'g2',
       'h2',
       'i2',
       'j2',
       'k2',
       'l2',
       'm2',
       'n2',
       'o2',
       'p2',
       'q2',
       'r2',
       's2',
       't2',
       'u2',
       'v2',
       'w2',
       'x2',
       'y2',
       'z2',
       'a3',
       'b3',
       'c3',
       'd3',
       'e3',
       'f3',
       'g3',
       'h3',
       'i3',
       'j3',
       'k3',
       'l3',
       'm3',
       'n3',
       'o3',
       'p3',
       'q3',
       'r3',
       's3',
       't3',
       'u3',
       'v3',
       'w3',
       'x3',
       'y3',
       'z3',
       'a4',
       'b4',
       'c4',
       'd4',
       'e4',
       'f4',
       'g4',
       'h4',
       'i4',
       'j4',
       'k4',
       'l4',
       'm4',
       'n4',
       'o4',
       'p4',
       'q4',
       'r4',
       's4',
       't4',
       'u4',
       'v4',
       'w4',
       'x4',
       'y4',
       'z4',
       'a5',
       'b5',
       'c5',
       'd5',
       'e5',
       'f5',
       'g5',
       'h5',
       'i5',
       'j5',
       'k5',
       'l5',
       'm5',
       'n5',
       'o5',
       'p5',
       'q5',
       'r5',
       's5',
       't5',
       'u5',
       'v5',
       'w5',
       'x5',
       'y5',
       'z5',
       'a6',
       'b6',
       'c6',
       'd6',
       'e6',
       'f6',
       'g6',
       'h6',
       'i6',
       'j6',
       'k6',
       'l6',
       'm6',
       'n6',
       'o6',
       'p6',
       'q6',
       'r6',
       's6',
       't6',
       'u6',
       'v6',
       'w6',
       'x6',
       'y6',
       'z6',
       'a7',
       'b7',
       'c7',
       'd7',
       'e7',
       'f7',
       'g7',
       'h7',
       'i7',
       'j7',
       'k7',
       'l7',
       'm7',
       'n7',
       'o7',
       'p7',
       'q7',
       'r7',
       's7',
       't7',
       'u7',
       'v7',
       'w7',
       'x7',
       'y7',
       'z7',
       'a8',
       'b8',
       'c8',
       'd8',
       'e8',
       'f8',
       'g8',
       'h8',
       'i8',
       'j8',
       'k8',
       'l8',
       'm8',
       'n8',
       'o8',
       'p8',
       'q8',
       'r8',
       's8',
       't8',
       'u8',
       'v8',
       'w8',
       'x8',
       'y8',
       'z8',
       'a9',
       'b9',
       'c9',
       'd9',
       'e9',
       'f9',
       'g9',
       'h9',
       'i9',
       'j9',
       'k9',
       'l9',
       'm9',
       'n9',
       'o9',
       'p9',
       'q9',
       'r9',
       's9',
       't9',
       'u9',
       'v9',
       'w9',
       'x9',
       'y9',
       'z9',
       'a10',
       'b10',
       'c10',
       'd10',
       'e10',
       'f10',));
    }
    public function affichenotebilanPdf()
    {
        $a= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z1= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z2= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z3= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z4= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z5= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z6= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z7= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z8= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $b9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $c9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $d9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $e9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $f9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $g9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $h9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $i9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $j9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $k9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $l9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $m9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $n9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $o9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $p9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $q9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $r9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $s9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $t9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $u9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $v9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $w9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $x9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $y9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $z9= Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
        $a10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $b10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $c10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $d10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $e10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $f10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');

        // Passer la valeur de 'a' à la vue PDF
        $pdf = PDF::loadView('Etat_des_Activites_FinancieresPdf', compact('a',
        'b',
       'c',
       'd',
       'e',
       'f',
       'g',
       'h',
       'i',
       'j',
       'k',
       'l',
       'm',
       'n',
       'o',
       'p',
       'q',
       'r',
       's',
       't',
       'u',
       'v',
       'w',
       'x',
       'y',
       'z',
       'a1',
       'b1',
       'c1',
       'd1',
       'e1',
       'f1',
       'g1',
       'h1',
       'i1',
       'j1',
       'k1',
       'l1',
       'm1',
       'n1',
       'o1',
       'p1',
       'q1',
       'r1',
       's1',
       't1',
       'u1',
       'v1',
       'w1',
       'x1',
       'y1',
       'z1',
       'a2',
       'b2',
       'c2',
       'd2',
       'e2',
       'f2',
       'g2',
       'h2',
       'i2',
       'j2',
       'k2',
       'l2',
       'm2',
       'n2',
       'o2',
       'p2',
       'q2',
       'r2',
       's2',
       't2',
       'u2',
       'v2',
       'w2',
       'x2',
       'y2',
       'z2',
       'a3',
       'b3',
       'c3',
       'd3',
       'e3',
       'f3',
       'g3',
       'h3',
       'i3',
       'j3',
       'k3',
       'l3',
       'm3',
       'n3',
       'o3',
       'p3',
       'q3',
       'r3',
       's3',
       't3',
       'u3',
       'v3',
       'w3',
       'x3',
       'y3',
       'z3',
       'a4',
       'b4',
       'c4',
       'd4',
       'e4',
       'f4',
       'g4',
       'h4',
       'i4',
       'j4',
       'k4',
       'l4',
       'm4',
       'n4',
       'o4',
       'p4',
       'q4',
       'r4',
       's4',
       't4',
       'u4',
       'v4',
       'w4',
       'x4',
       'y4',
       'z4',
       'a5',
       'b5',
       'c5',
       'd5',
       'e5',
       'f5',
       'g5',
       'h5',
       'i5',
       'j5',
       'k5',
       'l5',
       'm5',
       'n5',
       'o5',
       'p5',
       'q5',
       'r5',
       's5',
       't5',
       'u5',
       'v5',
       'w5',
       'x5',
       'y5',
       'z5',
       'a6',
       'b6',
       'c6',
       'd6',
       'e6',
       'f6',
       'g6',
       'h6',
       'i6',
       'j6',
       'k6',
       'l6',
       'm6',
       'n6',
       'o6',
       'p6',
       'q6',
       'r6',
       's6',
       't6',
       'u6',
       'v6',
       'w6',
       'x6',
       'y6',
       'z6',
       'a7',
       'b7',
       'c7',
       'd7',
       'e7',
       'f7',
       'g7',
       'h7',
       'i7',
       'j7',
       'k7',
       'l7',
       'm7',
       'n7',
       'o7',
       'p7',
       'q7',
       'r7',
       's7',
       't7',
       'u7',
       'v7',
       'w7',
       'x7',
       'y7',
       'z7',
       'a8',
       'b8',
       'c8',
       'd8',
       'e8',
       'f8',
       'g8',
       'h8',
       'i8',
       'j8',
       'k8',
       'l8',
       'm8',
       'n8',
       'o8',
       'p8',
       'q8',
       'r8',
       's8',
       't8',
       'u8',
       'v8',
       'w8',
       'x8',
       'y8',
       'z8',
       'a9',
       'b9',
       'c9',
       'd9',
       'e9',
       'f9',
       'g9',
       'h9',
       'i9',
       'j9',
       'k9',
       'l9',
       'm9',
       'n9',
       'o9',
       'p9',
       'q9',
       'r9',
       's9',
       't9',
       'u9',
       'v9',
       'w9',
       'x9',
       'y9',
       'z9',
       'a10',
       'b10',
       'c10',
       'd10',
       'e10',
       'f10'))
       ->setOptions(['defaultFont' => 'sans-serif']);
   
   $pdf->setPaper('a4', 'landscape');
   
   // Télécharger le PDF avec le nom spécifique et la variable 'a'
   return $pdf->download('Etat_des_Activites_Financieres.pdf', compact('a',
          'b',
          'c',
          'd',
          'e',
          'f',
          'g',
          'h',
          'i',
          'j',
          'k',
          'l',
          'm',
          'n',
          'o',
          'p',
          'q',
          'r',
          's',
          't',
          'u',
          'v',
          'w',
          'x',
          'y',
          'z',
          'a1',
          'b1',
          'c1',
          'd1',
          'e1',
          'f1',
          'g1',
          'h1',
          'i1',
          'j1',
          'k1',
          'l1',
          'm1',
          'n1',
          'o1',
          'p1',
          'q1',
          'r1',
          's1',
          't1',
          'u1',
          'v1',
          'w1',
          'x1',
          'y1',
          'z1',
          'a2',
          'b2',
          'c2',
          'd2',
          'e2',
          'f2',
          'g2',
          'h2',
          'i2',
          'j2',
          'k2',
          'l2',
          'm2',
          'n2',
          'o2',
          'p2',
          'q2',
          'r2',
          's2',
          't2',
          'u2',
          'v2',
          'w2',
          'x2',
          'y2',
          'z2',
          'a3',
          'b3',
          'c3',
          'd3',
          'e3',
          'f3',
          'g3',
          'h3',
          'i3',
          'j3',
          'k3',
          'l3',
          'm3',
          'n3',
          'o3',
          'p3',
          'q3',
          'r3',
          's3',
          't3',
          'u3',
          'v3',
          'w3',
          'x3',
          'y3',
          'z3',
          'a4',
          'b4',
          'c4',
          'd4',
          'e4',
          'f4',
          'g4',
          'h4',
          'i4',
          'j4',
          'k4',
          'l4',
          'm4',
          'n4',
          'o4',
          'p4',
          'q4',
          'r4',
          's4',
          't4',
          'u4',
          'v4',
          'w4',
          'x4',
          'y4',
          'z4',
          'a5',
          'b5',
          'c5',
          'd5',
          'e5',
          'f5',
          'g5',
          'h5',
          'i5',
          'j5',
          'k5',
          'l5',
          'm5',
          'n5',
          'o5',
          'p5',
          'q5',
          'r5',
          's5',
          't5',
          'u5',
          'v5',
          'w5',
          'x5',
          'y5',
          'z5',
          'a6',
          'b6',
          'c6',
          'd6',
          'e6',
          'f6',
          'g6',
          'h6',
          'i6',
          'j6',
          'k6',
          'l6',
          'm6',
          'n6',
          'o6',
          'p6',
          'q6',
          'r6',
          's6',
          't6',
          'u6',
          'v6',
          'w6',
          'x6',
          'y6',
          'z6',
          'a7',
          'b7',
          'c7',
          'd7',
          'e7',
          'f7',
          'g7',
          'h7',
          'i7',
          'j7',
          'k7',
          'l7',
          'm7',
          'n7',
          'o7',
          'p7',
          'q7',
          'r7',
          's7',
          't7',
          'u7',
          'v7',
          'w7',
          'x7',
          'y7',
          'z7',
          'a8',
          'b8',
          'c8',
          'd8',
          'e8',
          'f8',
          'g8',
          'h8',
          'i8',
          'j8',
          'k8',
          'l8',
          'm8',
          'n8',
          'o8',
          'p8',
          'q8',
          'r8',
          's8',
          't8',
          'u8',
          'v8',
          'w8',
          'x8',
          'y8',
          'z8',
          'a9',
          'b9',
          'c9',
          'd9',
          'e9',
          'f9',
          'g9',
          'h9',
          'i9',
          'j9',
          'k9',
          'l9',
          'm9',
          'n9',
          'o9',
          'p9',
          'q9',
          'r9',
          's9',
          't9',
          'u9',
          'v9',
          'w9',
          'x9',
          'y9',
          'z9',
          'a10',
          'b10',
          'c10',
          'd10',
          'e10',
          'f10'));

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
