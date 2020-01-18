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

    public function create() {
        return view('guitars.create');
    }

    public function store() {
        $guitar = new Guitars;

        $guitar->name = request('name');
        $guitar->type = request('type');
        $guitar->excerpt = request('excerpt');
        $guitar->body = request('body');

        $guitar->save();

        return redirect('/guitars');
    }

    public function edit($id) {

        $guitar = Guitars::find($id);


        return view('guitars.edit', [
            'guitar' => $guitar
        ]);
    }

    public function update($id) {

        $guitar =  Guitars::find($id); 

        $guitar->name = request('name');
        $guitar->type = request('type');
        $guitar->excerpt = request('excerpt');
        $guitar->body = request('body');

        $guitar->save();

        return redirect('/guitars/' . $guitar->id);
    }
    
}
