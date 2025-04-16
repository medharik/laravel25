<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     * URI : /boutiques,
     * verb : get
     */
    public function index()
    {
        $boutiques = Boutique::all();
        $titre = 'liste des produits';
        return view("boutiques.index", compact("titre", "boutiques"));
    }

    /**
     * Show the form for creating a new resource.
     * URI : boutiques/create ,
     * verb: get
     */
    public function create()
    {
        return view("boutiques.create");
    }

    /**
     * Store a newly created resource in storage (base de donnees).
     * URI : /boutiques
     * VERB :  POST (form)
     */
    public function store(Request $request)
    {
        $request->validate([
            "email"=>"required|unique:boutiques|email",
            'tel'=>'required|min:2'
        ]);

        Boutique::create($request->all());
        // return view ("boutiques/index");
        return redirect('/boutiques');
    }

    /**
     * Display the specified resource.
     * URI : boutiques/{id}
     * verb : get (lien navigateur)
     */
    public function show(string $id)
    {
      $boutique = Boutique::find($id);
      $titre="consultation des donnees de la boutiques ".$boutique->nom;

    return $boutique;
      //  return view("boutiques/show", compact("boutique",'titre'));
    }

    /**
     * Show the form for editing the specified resource.
     * URI : boutiques/id/edit
     * verb : GET
     *
     */
    public function edit(string $id)
    {
        $boutique = Boutique::find($id);
        $titre="Edition  des donnees de la boutiques ".$boutique->nom;
        return view("boutiques/edit", compact("boutique",'titre'));
    }

    /**
     * Update the specified resource in storage.
     * URI : boutiques/id
     * verb : PUT  (upadte form )
     */
    public function update(Request $request, string $id)
    {
        $boutique= Boutique::find($id);
        $boutique->update([$request->all()]);
        //....
    }

    /**
     * Remove the specified resource from storage.
     * URI : boutiques/id
     * verb : delete
     */
    public function destroy(string $id)
    {
        $boutique= Boutique::find($id);
        $boutique->delete();
        return $boutique;
    }
}
