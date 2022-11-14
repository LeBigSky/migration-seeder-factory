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
        $store= new Eleve();
        $store->nom = $request-> nom;
        $store->prenom = $request-> prenom;
        $store->age = $request-> age;
        $store->employé = $request-> employé;
        $store->save();
        return redirect ()->route('admin.eleves');

    }
    public function create (){
        return view('back.pages.eleves.create');
    }
    public function edit ($id){
        $eleve= Eleve::find($id);
        return view('back.pages.eleves.edit', compact('eleve'));
    }
    public function update (Request $request, $id){
        $update= Eleve::find($id);
        $update->nom = $request-> nom;
        $update->prenom = $request-> prenom;
        $update->age = $request-> age;
        $update->employé = $request-> employé;
        $update->save();
        return redirect ()->route('admin.eleves');
    }
    public function show ($id){
        $eleve= Eleve::find($id);
        return view('back.pages.eleves.show', compact('eleve'));
    }
    public function delete ($id){
        $eleve= Eleve::find($id);
        $eleve->delete();
        return redirect ()-> route('admin.eleves');
    }
}
