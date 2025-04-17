<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource (article).
     * URI : /articles
     * methode : GET (cad dans le lien du navigateur);
     */
    public function index()
    {
        // Article::orderBy("id","desc")->paginate(10);
        $articles = Article::orderBy('id','desc')->get(); // get all articles
        return view("articles.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *  * URI : /articles/create
     * methode : GET (cad dans le lien du navigateur)
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage (base de donnees).
     *  * URI : /articles
     * methode : POST (cad un envoi de la requete par un form)
     */
    public function store(Request $request)
    {
      $article=  Article::create($request->all());

return redirect("/articles");
    }

    /**
     * Display the specified ($id) resource.
     */
    public function show(string $id)
    {
        $article= Article::find($id);
        return view("articles.show", compact("article"));
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
