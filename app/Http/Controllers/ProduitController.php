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

        Produit::create($request->all());
        // return view("index",['message'=>'le produit '.$request->libelle.' a ete ajoute avec succees','titre'=>"Page d'accueil"]);
    return redirect("/nouveau")->with('notice',"Produit ajouter avec succes");
    }





    // ajouter le produit dans la base de donnees (dans la table produit)
}
