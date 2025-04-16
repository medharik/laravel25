<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneContoller extends Controller
{

    /**
     * Display a listing of the resource (phone)
     * get :   /phones
     */
    public function index()
    {
        //
        echo "je suis la fonction index";
    }

    /**
     * Show the form for creating a new resource.
     * get :   /phones/create
     */
    public function create()
    {
        echo "je suis la fonction create";
        //
    }

    /**
     * Store a newly created resource in storage (base de donnees ).
     * post : /phones
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * get : phones/:id
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET : phones/:id/edit
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage(bd)
     * PUT : phones/:id
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE : phones/:id
     */
    public function destroy(string $id)
    {
        //
    }
}
