<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factures = Facture::paginate(2);
        $liens=$factures->links();
        // dd($liens);
        return view('factures.index', compact('factures'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients=Client::all();
        return view('factures.create',compact('clients'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Facture::create($request->all());
       return redirect()->route('factures.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $facture = Facture::find($id);
        // dd($facture->id);

// $client=Client::find($facture->client->id);
//recuperer les autres facture de ce client
$facture_autres=Facture::where('client_id',$facture->client_id)->whereNot('id',$facture->id)->get();
// dd($facture_autres);


        return view('factures.show', compact('facture','facture_autres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $facture = Facture::find($id);
        $clients=Client::all();
        return view('factures.edit', compact('facture','clients'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $facture=Facture::find($id);
        $facture->update($request->all());
                 return redirect()->route('factures.index')->with('notice','Modif effectuee avec succes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
