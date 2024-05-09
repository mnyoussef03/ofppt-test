<?php

namespace App\Http\Controllers;
use  App\Models\Marque;

use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function index(){
        $marques= Marque::all();
        return view('marques.index',compact('marques'));
    }
    public function create(){
        return view('marques.create');

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'logo' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]
    ,
    [
        'name.required' => 'La Marque Est Obligatoire'
    ]);
        $imageName = time().'.'.$request->logo->extension();
        // Public Folder
        $request->logo->move(public_path('logos'), $imageName);
        Marque::create([
            'name' => $request->name,
            'logo'  => 'logos/'.$imageName
        ]);
        return back()->with('msg','Marque Created');
    }
    //
}
