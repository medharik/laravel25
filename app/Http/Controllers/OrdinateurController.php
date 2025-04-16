<?php

namespace App\Http\Controllers;

use App\Models\Ordinateur;
use Illuminate\Http\Request;

class OrdinateurController extends Controller
{
    // fonction create pour afficher la page create.blade.php
    public function create()
    {
        return view("ordinateurs.create");
    }
    // fonction store : recoit la requete du formulaire
    // qui contient le libelle et le prix et les ajoute dans la base de donnees (en utilisant le modele : Ordinateur)
    public function store(Request $request)
    {

        //ajoute l'ordinateur dans la table ordinateurs
        //$request->all() contient tous ce qu'on a saisie dans le formulaire
        //NB : n'oublie pas de les declarer dans le modele Ordinateur :     protected $fillable = ['libelle','prix'];

        Ordinateur::create($request->all());

        return view("ordinateurs.index");
    }
}
