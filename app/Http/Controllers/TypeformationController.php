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
    public function backtype (){
        $types= Typeformation::all();
        return view('back.pages.types.types', compact('types'));
    }
}
