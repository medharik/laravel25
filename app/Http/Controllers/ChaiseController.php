<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChaiseController extends Controller
{
    public function create()
    {
        return view("chaises.create");
    }
    public function liste(){
        return view("chaises.liste");
    }
}
