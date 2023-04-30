<?php

use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ManifestationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logg', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/politique', function () {
    return view('politique');
});
Route::get('/politique1', function () {
    return view('politique_site');
});
Route::get('/condition', function () {
    return view('condition');
});
Route::get('/avis', function () {
    return view('avis_de_confidentialite');
});
Route::get('/home', function () {
    // Appeler l'API Node.js
    $api_url = 'http://localhost:5000/boutique/produits';
    $products_json = file_get_contents($api_url);

    // Convertir les données JSON en tableau PHP
    $products_array = json_decode($products_json, true);

    // Passer le tableau à la vue Laravel pour l'afficher
    return view('home', ['products' => $products_array]);
});
Route::get('/manifestation', function () {
    return view('manifestation');
});
Route::get('/manifestations', function () {
    $api_url = 'http://localhost:5000/manifestation';
    $manifs_json = file_get_contents($api_url);

    // Convertir les données JSON en tableau PHP
    $manifsData = json_decode($manifs_json, true);

    // Passer le tableau à la vue Laravel pour l'afficher
    return view('manifestations', ['manifs' => $manifsData]);
});
Route::get('/idee', function () {
    $api_url = 'http://localhost:5000/manifestation/idea';
    $idees_json = file_get_contents($api_url);

    // Convertir les données JSON en tableau PHP
    $ideesData = json_decode($idees_json, true);

    // Passer le tableau à la vue Laravel pour l'afficher
    return view('idee', ['idees' => $ideesData]);
});
Route::get('/poster', function () {
    return view('postmanif');
});
Route::get('/postProd', function () {
    return view('postproduct');
});
Route::get('/postmanif', function () {
    return view('postmanif');
});
Route::get('/gallerie', function () {
    return view('gallerie');
});
Route::get('/panier', [BoutiqueController::class, 'getPanierByUserId']);
Route::get('/postidee', function () {
    return view('postidee');
});
Route::get('/manif', function () {
    return view('manifestation');
});




Route::get('/produits/{id}', [BoutiqueController::class, 'show'])->name('produits.show');
Route::get('/manifestations/{id}', [ManifestationController::class, 'showManif'])->name('manif.show');
Route::get('/idea/{id}', [ManifestationController::class, 'showIdea'])->name('idea.show');
Route::get('/produitsf', [BoutiqueController::class, 'index'])->name('produits.index');
Route::get('/produits',[BoutiqueController::class, 'getProduit']);

Route::post('/inscription', [UserController::class, 'inscription']);
Route::post('/connexion', [UserController::class, 'connexion']);
Route::post('/manif', [ManifestationController::class, 'createManif']);
Route::post('/ideePost', [ManifestationController::class, 'createIdea']);
Route::post('/inscripManif', [ManifestationController::class, 'inscrireManifestation']);
Route::post('/prod', [BoutiqueController::class, 'createProduct']);
Route::post('/panier', [BoutiqueController::class, 'insertPanier']);
Route::post('/deconnexion', [UserController::class, 'deconnexion']);



