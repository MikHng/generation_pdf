<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesbilanController extends Controller
{
    public function affichenotebilan()
    {
        return view('Notes_Bilan');
    }
}
