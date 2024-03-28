<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Récupérer tous les étudiants depuis la base de données
        $students = Student::all();

        // Passer les étudiants récupérés à une vue pour affichage
        return view('Etats_des_Activites_Financieres', ['students' => $students]);
    }
}
