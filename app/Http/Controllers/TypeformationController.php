<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeformationController extends Controller
{
    public function type (){
        $types= Typeformation::all();
        return view('front.pages.types', compact('types'));
    }
    /////////////////////////////////////////////////////////////////////// BACK SIDE OF THE PAGE \/
    public function backtype (){
        $types= Typeformation::all();
        return view('back.pages.types.types', compact('types'));
    }
    public function store (Request $request){
        $store= new Typeformation();
        $store->nom = $request-> nom;
        $store->save();
        return redirect ()->route('admin.types');
    }
    public function create (){
        return view('back.pages.types.create');
    }
    public function edit ($id){
        $type= Typeformation::find($id);
        return view('back.pages.types.edit', compact('type'));
    }
    public function update (Request $request, $id){
        $update= Typeformation::find($id);
        $update->nom = $request-> nom;
        $update->save();
        return redirect ()->route('admin.types');
    }
    public function show ($id){
        $type= Typeformation::find($id);
        return view('back.pages.types.show', compact('type'));
    }
    public function delete ($id){
        $type= Typeformation::find($id);
        $type->delete();
        return redirect ()-> route('admin.types');
    }
}
