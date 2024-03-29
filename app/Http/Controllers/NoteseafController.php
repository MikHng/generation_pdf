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
        })->sum('firstnameirstname');

        $b = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $c = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $d = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $e = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $f = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $g = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $h = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $i = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $j = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $k = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $l = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $m = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $n = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $o = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $p = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $q = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $r = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $s = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $t = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $u = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $v = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $w = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $x = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $y = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $z = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $a1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $b1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $c1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $d1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $e1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $f1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $g1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $h1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $i1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $j1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $k1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $l1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $m1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $n1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $o1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $p1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $q1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $r1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $s1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $t1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $u1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $v1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $w1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $x1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $y1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $z1 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $a2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $b2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $c2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $d2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $e2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $f2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $g2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $h2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $i2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $j2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $k2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $l2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $m2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $n2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $o2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $p2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $q2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $r2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $s2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $t2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $u2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $v2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $w2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $x2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $y2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $z2 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $a3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $b3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $c3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $d3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $e3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $f3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $g3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $h3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $i3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $j3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $k3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $l3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $m3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $n3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $o3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $p3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $q3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $r3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $s3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $t3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $u3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $v3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $w3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $x3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $y3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $z3 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $a4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $b4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $c4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $d4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $e4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $f4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $g4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $h4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $i4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $j4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $k4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $l4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $m4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $n4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $o4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $p4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $q4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $r4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $s4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $t4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $u4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $v4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $w4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $x4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $y4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

        $z4 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstnameirstname');

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

        $W5 = Student::where(function ($query) {
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

        $W6 = Student::where(function ($query) {
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

        $W7 = Student::where(function ($query) {
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

        $W8 = Student::where(function ($query) {
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

        $y12 = Student::where(function ($query) {
            $query->whereBetween('matricule', [00000, 99999]);

           // $query->whereBetween('matricule', [21000, 21999])
                //->orWhereBetween('matricule', [22000, 22999])
               // ->orWhere('matricule', 26100)
               // ->orWhereBetween('matricule', [27100, 27999]);
        })->sum('firstname');





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
       'x12',
       'y12'

    ));        
  
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
