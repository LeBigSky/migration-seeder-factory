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
        $store= new Batiment();
        $store->nom = $request-> nom;
        $store->description = $request-> description;
        $store->save();
        return redirect ()->route('admin.batiments');

    }
    public function create (){
        return view('back.pages.batiment.create');
    }
    public function edit ($id){
        $batiment= Batiment::find($id);
        return view('back.pages.batiment.edit', compact('batiment'));
    }
    public function update (Request $request, $id){
        $update= Batiment::find($id);
        $update->nom = $request-> nom;
        $update->description = $request-> description;
        $update->save();
        return redirect ()->route('admin.batiments');
    }
    public function show ($id){
        $batiment= Batiment::find($id);
        return view('back.pages.batiment.show', compact('batiment'));
    }
    public function delete ($id){
        $batiment= Batiment::find($id);
        $batiment->delete();
        return redirect ()-> route('admin.batiments');
    }
}
