<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function home (){
        $batiment= Batiment::all();
        return view('home', compact('batiment'));
    }
}
