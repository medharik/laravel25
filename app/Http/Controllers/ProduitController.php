<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    // afficher le formulaire de creation d'un nouveau produit
    public function create(){
        return view("create",['message'=>'Nouveau produit','titre'=>"Page d'ajout d'un produit"]);
    }
    public function store(Request $request){
        $request->validate([
            'libelle' => 'required|max:255',
            'prix'=>'numeric|required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);


        $chemin=$request->file('photo')->store('uploads','public');
        // dd(vars: $chemin);

        $data=$request->all();

        $data['photo']=$chemin;
        // dd($data);
        Produit::create($data);

        return redirect("/nouveau")->with('notice',"Produit ajouter avec succes");
    }





    // ajouter le produit dans la base de donnees (dans la table produit)
}
