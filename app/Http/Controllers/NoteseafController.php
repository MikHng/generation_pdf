<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteseafController extends Controller
{
    public function afficheeaf()
    {
        return view('Notes_EAF');
    }
}
