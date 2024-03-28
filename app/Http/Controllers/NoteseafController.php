<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NoteseafExport;

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
        })->sum('a');

        $b = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('b');

        $c = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('c');

        $d = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('d');

        $e = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('e');

        $f = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('f');

        $g = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('g');

        $h = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('h');

        $i = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('i');

        $j = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('j');

        $k = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('k');

        $l = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('l');

        $m = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('m');

        $n = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('n');

        $o = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('o');

        $p = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('p');

        $q = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('q');

        $r = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('r');

        $s = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('s');

        $t = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('t');

        $u = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('u');

        $v = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('v');

        $W = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('W');

        $x = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('x');

        $y = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('y');

        $z = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('z');

        $a1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('a1');

        $b2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('b2');

        $c2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('c2');

        $d2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('d2');

        $e2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('e2');

        $f2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('f2');

        $g2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('g2');

        $h2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('h2');

        $i2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('i2');

        $j2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('j2');

        $k2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('k2');

        $l2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('l2');

        $m2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('m2');

        $n2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('n2');

        $o2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('o2');

        $p2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('p2');

        $q2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('q2');

        $r2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('r2');

        $s2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('s2');

        $t2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('t2');

        $u2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('u2');

        $v2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('v2');

        $W2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('W2');

        $x2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('x2');

        $y2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('y2');

        $z2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('z2');

        $a3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('a3');

        $b3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('b3');

        $c3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('c3');

        $d3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('d3');

        $e3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('e3');

        $f3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('f3');

        $g3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('g3');

        $h3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('h3');

        $i3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('i3');

        $j3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('j3');

        $k3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('k3');

        $l3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('l3');

        $m3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('m3');

        $n3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('n3');

        $o3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('o3');

        $p3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('p3');

        $q3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('q3');

        $r3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('r3');

        $s3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('s3');

        $t3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('t3');

        $u3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('u3');

        $v3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('v3');

        $W3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('W3');

        $x3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('x3');

        $y3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('y3');

        $z3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('z3');

        $a4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('a4');

        $b4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('b4');

        $c4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('c4');

        $d4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('d4');

        $e4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('e4');

        $f4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('f4');

        $g4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('g4');

        $h4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('h4');

        $i4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('i4');

        $j4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('j4');

        $k4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('k4');

        $l4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('l4');

        $m4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('m4');

        $n4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('n4');

        $o4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('o4');

        $p4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('p4');

        $q4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('q4');

        $r4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('r4');

        $s4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('s4');

        $t4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('t4');

        $u4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('u4');

        $v4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('v4');

        $W4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('W4');

        $x4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('x4');

        $y4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('y4');

        $z4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('z4');

        $a5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('a5');

        $b5 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('b5');

       return view('Notes_EAF');
        
  
    }
    public function afficheeafPdf()
    {
         $Data = ['foo' => 'bar'];

              $pdf = PDF::loadView('Notes_EAFPdf', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);

        
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('Notes_EAF.pdf');

    }

    public function export() 
    {
        return Excel::download(new NoteseafExport, 'Notes_EAF.xlsx');
    }
}
