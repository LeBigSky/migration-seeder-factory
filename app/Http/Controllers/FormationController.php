<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function formation (){
        $formations= Formation::all();
        return view('front.pages.formations', compact('formations'));
    }
    public function backformation (){
        $formations= Formation::all();
        return view('back.pages.formations.formations', compact('formations'));
    }
    public function store (Request $request){
        $store= new Formation();
        $store->nom = $request-> nom;
        $store->description = $request-> description;
        $store->save();
        return redirect ()->route('admin.formations');
    }
    public function create (){
        return view('back.pages.formations.create');
    }
    public function edit ($id){
        $formation= Formation::find($id);
        return view('back.pages.Formations.edit', compact('formation'));
    }
    public function update (Request $request, $id){
        $update= Formation::find($id);
        $update->nom = $request-> nom;
        $update->description = $request-> description;
        $update->save();
        return redirect ()->route('admin.formations');
    }
    public function show ($id){
        $formation= Formation::find($id);
        return view('back.pages.formations.show', compact('formation'));
    }
    public function delete ($id){
        $formation= Formation::find($id);
        $formation->delete();
        return redirect ()-> route('admin.formations');
    }
}
