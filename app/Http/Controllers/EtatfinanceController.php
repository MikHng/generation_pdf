<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EtatfinanceExport;
use App\Models\informationrapport;
use App\Models\Student; // Assurez-vous d'importer le modèle Student si ce n'est pas déjà fait
use App\Http\Controllers\StudentController;


class EtatfinanceController extends Controller
{
    
    public function afficheretataf()
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




        return view('Etat_des_Activites_Financieres', compact('a',
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
        'b5'));
    }
    public function afficheretatafPdf()
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
        'b5'))
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
        'b5'));

    }

    public function export() 
        {
             // Récupérer les valeurs des variables
    $a = Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
    $b = Student::whereBetween('matricule', [00000, 99999])->sum('firstname');
    // Ajoutez d'autres variables si nécessaire

    // Passer les variables à la classe d'exportation Excel
    return Excel::download(new EtatfinanceExport($a, $b), 'Etat_des_Activites_Financieres.xlsx');
        }

        public function maVueSpecifique()
    {
        $nomstructure = Informationrapport::latest()->value('nomstructure');
        $annee = Informationrapport::latest()->value('annee');
        $nomdfc = Informationrapport::latest()->value('nomdfc');
        $nomdir = Informationrapport::latest()->value('nomdir');
        
        return view('Etat_des_Activites_Financieres', compact('nomstructure', 'annee', 'nomdfc', 'nomdir'));
    }

    

     /*   public function passerDerniereValeurChampVersVue()
        {
            // Récupérer la dernière valeur enregistrée du champ dans votre tableau
            $derniereValeur = Information::latest()->value('nom_du_champ'); // Remplacez 'nom_du_champ' par le nom de votre champ
    
            // Passer la dernière valeur à la vue
            return view('votre_vue', ['derniereValeur' => $derniereValeur]);
        }*/
}
