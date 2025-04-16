<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //fonction 1 : afficher la page (view ) du formulaire de creation (new) d'un client
    function create()  {
        return view("clients/create");
    }
}
