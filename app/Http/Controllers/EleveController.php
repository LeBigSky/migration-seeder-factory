<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function eleve (){
        $eleves= Eleve::all();
        return view('front.pages.eleves', compact('eleves'));
    }
    /////////////////////////////////////////////////////////////////////// BACK SIDE OF THE PAGE \/
    public function backeleve (){
        $eleves= Eleve::all();
        return view('back.pages.eleves.eleves', compact('eleves'));
    }
    public function store (Request $request){
        $request->validate([
            "nom" => ["required", "min:3", "max:15"],
            "prenom" => ["required", "min:3", "max:20"],
            "age" => ["required"],
            "employé" => ["required"]
        ]);
        $store= new Eleve();
        $store->nom = $request-> nom;
        $store->prenom = $request-> prenom;
        $store->age = $request-> age;
        $store->employé = $request-> employé;
        $store->save();
        return redirect ()->route('admin.eleves')->with('success', "l'élève a été ajouter");

    }
    public function create (){
        return view('back.pages.eleves.create');
    }
    public function edit ($id){
        $eleve= Eleve::find($id);
        return view('back.pages.eleves.edit', compact('eleve'));
    }
    public function update (Request $request, $id){
        $request->validate([
            "nom" => ["required", "min:3", "max:15"],
            "prenom" => ["required", "min:3", "max:20"],
            "age" => ["required"],
            "employé" => ["required"]
        ]);

        $update= Eleve::find($id);
        $update->nom = $request-> nom;
        $update->prenom = $request-> prenom;
        $update->age = $request-> age;
        $update->employé = $request-> employé;
        $update->save();
        return redirect ()->route('admin.eleves')->with('success', "l'élève a été modifier");
    }
    public function show ($id){
        $eleve= Eleve::find($id);
        return view('back.pages.eleves.show', compact('eleve'));
    }
    public function delete ($id){
        $eleve= Eleve::find($id);
        $eleve->delete();
        return redirect ()-> route('admin.eleves')->with('warning', "l'élève a été supprimé");
    }
}
