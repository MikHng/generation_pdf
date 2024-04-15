<?php

namespace App\Http\Controllers;
use App\Models\Accueil;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;


class EtatController extends Controller
{
    //
}



use App\Imports\StudentsModif;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage; // Importer la classe Storage de Laravel pour gérer le stockage des fichiers


class StudentController extends Controller
{
    public function index()
    {
       $students = Student::orderBy('matricule')->get();
       return view('welcome',compact('students'));
    } 

public function editnote($id)
{
    $student = Student::find($id);
    return view('pages.student.editnote', compact('student'));
}

       public function update(Request $request, $id)
       {
        $student = Student::find($id);
        $student->notes = $request->input('notes');
        $student->update();
        return redirect()->back()->with('status','Mise à jour de la note réussie !');
       }
      
       public function modificationnotes(Request $request)
       {
        //dd($request);
        $students= $request->students;
        $notes= $request->notes;
         foreach($notes as $key => $note)
         {
            $studentid=$students[$key];
            $student = Student::find($studentid);
            $student->notes=$note;
            $student->save();
         }
         return redirect()->route('accueil')->with('status','Mise à jour des notes réussie !');
       }
   

       public function destroy()
        {
            // Supprimer tous les étudiants
            Student::truncate();

            // Redirection avec un message de succès
            return redirect()->back()->with('status', 'Tous les utilisateurs ont été supprimés avec succès !');
        }

    /*public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('status','Suppression réussie !');
    }*/
    

    public function import(Request $req)
    {
      Excel::import(new StudentsImport,$req->file('student_file'));
      return redirect()->back()->with('status','Importation réussie !');
    }

}
