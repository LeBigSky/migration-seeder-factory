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
}
