<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //affiche la page du form

    // get : /nouvelle-categorie
function create()  {
    return  view('create_categorie',['titre'=>'Nouvelle categorie']);
}

// entregister la actegorie dans la base de donnees et rediriger vers la page du form
// post : /entregister-categorie
function store(Request $request)  {

    $cat=Categorie::create($request->all());
    return response()->json($cat);
//    return  redirect('/nouvelle-categorie')->with('notice','Categorie entregistree avec succes');
}
}
