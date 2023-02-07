<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Models\matiere;
use App\Models\semestre;
use Illuminate\Http\Request;
use DB;
class ClasseController extends Controller
{
    public function vu(){
        $etudiant=etudiant::all();
        $nbetudiant = DB::table('etudiants')->count();
        $matiere=matiere::all();
        $semestre=semestre::all();


        return view('classe',compact('etudiant','semestre','matiere','nbetudiant'));
    }

    public function enregistrer(Request $request){

        $etudiant= new etudiant();

        $etudiant->nom=$request->nom;
        $etudiant->prenom=$request->prenom;
        $etudiant->semestre_id=$request->semestre;
        $etudiant->matiere_id=$request->matiere;
        $etudiant->note=$request->note;
        $etudiant->examen=$request->examen;
        $etudiant->save();
        return redirect('classe')
                ->with('message', 'enregistrement avec Succee!');
    }

public function supprimer(Request $request)
{
  $etudiant = etudiant::findOrFail($request->idab);

  $etudiant->delete();

  return redirect('classe');
}
}
