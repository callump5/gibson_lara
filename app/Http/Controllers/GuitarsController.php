<?php

namespace App\Http\Controllers;

use App\Guitars;
use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    public function index(){
        $guitars = Guitars::latest()->get();

        return view('guitars.index', [
            'guitars' => $guitars
        ]);
    }

    public function show($id){
        $guitar = Guitars::find($id);

        return view('guitars.show', [
            'guitar' => $guitar
        ]);
    }
}
