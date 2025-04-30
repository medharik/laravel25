<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents=Document::all();
        return view('documents.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validation  :
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|file|mimes:pdf|max:2048',
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:3000',
        ]);

        $filePath = $request->file('file_path')->store('documents','public');
        $imagePath = $request->file('image_path')->store('images','public');
        // dd($filePath,$imagePath);


Document::create(['title'=>$request->title,'file_path'=>$filePath,'image_path'=>$imagePath]);

return redirect()->route('documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
