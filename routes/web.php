<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ChaiseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\OrdinateurController;
use App\Http\Controllers\PhoneContoller;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nouveau',[ProduitController::class,'create'])->name('nouveau-produit');
Route::post('/enregister',[ProduitController::class,'store'])->name('store-produit');


Route::get('/nouvelle-categorie',[CategorieController::class,'create'])->name('nouvellecat');
Route::post('/enregister-categorie',[CategorieController::class,'store'])->name('storecat');

// route  pour afficher le formulaire client ?
Route::get('/client/create',[ClientController::class,'create']);
//route pour afficher la page du formulaire nouveau smartphone
Route::get('/smart/create',[SmartphoneController::class,'afficher'])->name('');
Route::get('smart/liste',[SmartphoneController::class,'liste'])->name('');
Route::get('chaise/create',[ChaiseController::class,'create'])->name('');
Route::get('chaise/liste',[ChaiseController::class,'liste'])->name('');

Route::get('/pc/nouveau', [OrdinateurController::class, 'create']);
Route::post('/pc/store', [OrdinateurController::class, 'store']);;
// route('documents.index') <=> url('documents/index')
Route::resource('phones', PhoneContoller::class);
Route::resource('boutiques', BoutiqueController::class);
//permet de creer automatiquement 7 liens (chaque lien execute une fontion du controller)

Route::resource('articles', ArticleController::class);
Route::resource('documents', DocumentController::class);
Route::resource('utilisateurs', UtilisateurController::class);
Route::resource('matieres', MatiereController::class);
Route::resource('clients', ClientController::class);
Route::resource('factures', FactureController::class);


Route::apiResource('/api/boutiques', BoutiqueController::class);
