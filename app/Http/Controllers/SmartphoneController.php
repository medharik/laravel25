<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    //fonction qui affiche la page du formualaire pour creer un nouiveau smartphone
    public function afficher(){
return view("nouveauSmart");
    }
    function liste(){
        return view("liste");
    }
}
