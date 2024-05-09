<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index(){
        $voitures=Voiture::all();
        return view('voitures.index',compact('voitures'));
    }
    public function create(){
        $marques= Marque::all();
        return view('voitures.create',compact('marques'));

    }
    public function store(Request $request){

        $request->validate([
            'matricule' => 'required|string',
            'serie' => 'required|string',
            'model' => 'required|string',
            'couleur' => 'required|string',
            'carburant' => 'required|string',
            'puissance' => 'required|string',
            'prix' => 'required|numeric',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'marque_id'=>'required|numeric',
        ]);

        $ima = time().'.'.$request->image->extension();

        $request->image->move(public_path('voitures'), $ima);

        Voiture::create([
            'matricule'=>$request->matricule,
            'serie'=>$request->serie,
            'model'=>$request->model,
            'couleur'=>$request->couleur,
            'carburant'=>$request->carburant,
            'puissance'=>$request->puissance,
            'prix'=>$request->prix,
            'marque_id'=>$request->marque_id,
            'image'  => 'voitures/'.$ima,

        ]);
        return back()->with('msg','voiture Created');

    }
    //
}
