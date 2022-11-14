<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function home (){
        $batiments= Batiment::all();
        return view('home', compact('batiments'));
    }
    public function batiment (){
        $batiments= Batiment::all();
        return view('front.pages.batiment', compact('batiments'));
    }
    /////////////////////////////////////////////////////////////////////// BACK SIDE OF THE PAGE \/
    public function backbatiment (){
        $batiments= Batiment::all();
        return view('back.pages.batiment.batiment', compact('batiments'));
    }
    public function store (Request $request){
        $request->validate([
            "nom" => ["required", "min:3", "max:15"],
            "description" => ["required", "min:5", "max:200"]
        ]);


        $store= new Batiment();
        $store->nom = $request-> nom;
        $store->description = $request-> description;
        $store->save();
        return redirect ()->route('admin.batiments')->with('success', 'La batiment a été ajouter') ;

    }
    public function create (){
        return view('back.pages.batiment.create');
    }
    public function edit ($id){
        $batiment= Batiment::find($id);
        return view('back.pages.batiment.edit', compact('batiment'));
    }
    public function update (Request $request, $id){
        $request->validate([
            "nom" => ["required", "min:3", "max:15"],
            "description" => ["required", "min:5", "max:200"]
        ]);

        $update= Batiment::find($id);
        $update->nom = $request-> nom;
        $update->description = $request-> description;
        $update->save();
        return redirect ()->route('admin.batiments')->with('success', 'La batiment a été modifier');
    }
    public function show ($id){
        $batiment= Batiment::find($id);
        return view('back.pages.batiment.show', compact('batiment'));
    }
    public function delete ($id){
        $batiment= Batiment::find($id);
        $batiment->delete();
        return redirect ()-> route('admin.batiments')->with('warning', 'La batiment a été supprimer') ;
    }
}
