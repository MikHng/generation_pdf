<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NoteseafExport;
use App\Models\Student; // Assurez-vous d'importer le modèle Student si ce n'est pas déjà fait
use App\Http\Controllers\StudentController;

class NoteseafController extends Controller
{
    public function afficheeaf()
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

        $g10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z10 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $y11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $z11 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $a12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $b12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $c12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $d12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $e12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $f12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $g12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $h12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $i12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $j12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $k12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $l12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $m12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $n12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $o12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $p12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $q12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $r12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $s12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $t12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $u12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $v12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $w12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

        $x12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');

      /*  $y12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname'); */





       return view('Notes_EAF', compact(
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
       'f10',
       'g10',
       'h10',
       'i10',
       'j10',
       'k10',
       'l10',
       'm10',
       'n10',
       'o10',
       'p10',
       'q10',
       'r10',
       's10',
       't10',
       'u10',
       'v10',
       'w10',
       'x10',
       'y10',
       'z10',
       'a11',
       'b11',
       'c11',
       'd11',
       'e11',
       'f11',
       'g11',
       'h11',
       'i11',
       'j11',
       'k11',
       'l11',
       'm11',
       'n11',
       'o11',
       'p11',
       'q11',
       'r11',
       's11',
       't11',
       'u11',
       'v11',
       'w11',
       'x11',
       'y11',
       'z11',
       'a12',
       'b12',
       'c12',
       'd12',
       'e12',
       'f12',
       'g12',
       'h12',
       'i12',
       'j12',
       'k12',
       'l12',
       'm12',
       'n12',
       'o12',
       'p12',
       'q12',
       'r12',
       's12',
       't12',
       'u12',
       'v12',
       'w12',
       'x12'
       //'y12'
    ));   
    }   
    
    public function afficheeafPdf()
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
        $g10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $h10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $i10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $j10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $k10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $l10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $m10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $n10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $o10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $p10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $q10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $r10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $s10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $t10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $u10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $v10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $w10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $x10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $y10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $z10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $a11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $b11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $c11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $d11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $e11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $f11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $g11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $h11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $i11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $j11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $k11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $l11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $m11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $n11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $o11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $p11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $q11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $r11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $s11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $t11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $u11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $v11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $w11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $x11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $y11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $z11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $a12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $b12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $c12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $d12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $e12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $f12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $g12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $h12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $i12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $j12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $k12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $l12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $m12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $n12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $o12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $p12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $q12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $r12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $s12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $t12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $u12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $v12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $w12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $x12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
       // $y12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');

        // Passer la valeur de 'a' à la vue PDF
        $pdf = PDF::loadView('Notes_EAFPdf', compact('a',
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
       'f10',
       'g10',
       'h10',
       'i10',
       'j10',
       'k10',
       'l10',
       'm10',
       'n10',
       'o10',
       'p10',
       'q10',
       'r10',
       's10',
       't10',
       'u10',
       'v10',
       'w10',
       'x10',
       'y10',
       'z10',
       'a11',
       'b11',
       'c11',
       'd11',
       'e11',
       'f11',
       'g11',
       'h11',
       'i11',
       'j11',
       'k11',
       'l11',
       'm11',
       'n11',
       'o11',
       'p11',
       'q11',
       'r11',
       's11',
       't11',
       'u11',
       'v11',
       'w11',
       'x11',
       'y11',
       'z11',
       'a12',
       'b12',
       'c12',
       'd12',
       'e12',
       'f12',
       'g12',
       'h12',
       'i12',
       'j12',
       'k12',
       'l12',
       'm12',
       'n12',
       'o12',
       'p12',
       'q12',
       'r12',
       's12',
       't12',
       'u12',
       'v12',
       'w12',
       'x12'
      // 'y12'

    ))
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
       'f10',
       'g10',
       'h10',
       'i10',
       'j10',
       'k10',
       'l10',
       'm10',
       'n10',
       'o10',
       'p10',
       'q10',
       'r10',
       's10',
       't10',
       'u10',
       'v10',
       'w10',
       'x10',
       'y10',
       'z10',
       'a11',
       'b11',
       'c11',
       'd11',
       'e11',
       'f11',
       'g11',
       'h11',
       'i11',
       'j11',
       'k11',
       'l11',
       'm11',
       'n11',
       'o11',
       'p11',
       'q11',
       'r11',
       's11',
       't11',
       'u11',
       'v11',
       'w11',
       'x11',
       'y11',
       'z11',
       'a12',
       'b12',
       'c12',
       'd12',
       'e12',
       'f12',
       'g12',
       'h12',
       'i12',
       'j12',
       'k12',
       'l12',
       'm12',
       'n12',
       'o12',
       'p12',
       'q12',
       'r12',
       's12',
       't12',
       'u12',
       'v12',
       'w12',
       'x12'
       //'y12'

    ));
  
    }
    

    public function export() 
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
        $g10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $h10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $i10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $j10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $k10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $l10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $m10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $n10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $o10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $p10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $q10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $r10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $s10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $t10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $u10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $v10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $w10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $x10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $y10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $z10= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $a11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $b11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $c11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $d11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $e11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $f11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $g11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $h11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $i11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $j11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $k11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $l11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $m11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $n11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $o11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $p11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $q11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $r11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $s11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $t11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $u11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $v11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $w11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $x11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $y11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $z11= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $a12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $b12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $c12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $d12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $e12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $f12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $g12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $h12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $i12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $j12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $k12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $l12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $m12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $n12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $o12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $p12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $q12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $r12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $s12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $t12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $u12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $v12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $w12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
        $x12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');
       // $y12= Student::whereBetween('matricule', [00000, 1010101010])->sum('firstname');

        return Excel::download(new NoteseafExport(        $a1,
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
        $b5,
        $c5,
        $d5,
        $e5,
        $f5,
        $g5,
        $h5,
        $i5,
        $j5,
        $k5,
        $l5,
        $m5,
        $n5,
        $o5,
        $p5,
        $q5,
        $r5,
        $s5,
        $t5,
        $u5,
        $v5,
        $w5,
        $x5,
        $y5,
        $z5,
        $a6,
        $b6,
        $c6,
        $d6,
        $e6,
        $f6,
        $g6,
        $h6,
        $i6,
        $j6,
        $k6,
        $l6,
        $m6,
        $n6,
        $o6,
        $p6,
        $q6,
        $r6,
        $s6,
        $t6,
        $u6,
        $v6,
        $w6,
        $x6,
        $y6,
        $z6,
        $a7,
        $b7,
        $c7,
        $d7,
        $e7,
        $f7,
        $g7,
        $h7,
        $i7,
        $j7,
        $k7,
        $l7,
        $m7,
        $n7,
        $o7,
        $p7,
        $q7,
        $r7,
        $s7,
        $t7,
        $u7,
        $v7,
        $w7,
        $x7,
        $y7,
        $z7,
        $a8,
        $b8,
        $c8,
        $d8,
        $e8,
        $f8,
        $g8,
        $h8,
        $i8,
        $j8,
        $k8,
        $l8,
        $m8,
        $n8,
        $o8,
        $p8,
        $q8,
        $r8,
        $s8,
        $t8,
        $u8,
        $v8,
        $w8,
        $x8,
        $y8,
        $z8,
        $a9,
        $b9,
        $c9,
        $d9,
        $e9,
        $f9,
        $g9,
        $h9,
        $i9,
        $j9,
        $k9,
        $l9,
        $m9,
        $n9,
        $o9,
        $p9,
        $q9,
        $r9,
        $s9,
        $t9,
        $u9,
        $v9,
        $w9,
        $x9,
        $y9,
        $z9,
        $a10,
        $b10,
        $c10,
        $d10,
        $e10,
        $f10,
        $g10,
        $h10,
        $i10,
        $j10), 'Notes_EAF.xlsx');
    }
}
