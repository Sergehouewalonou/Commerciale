<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AuthenticatedSessionController;
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
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Admin 

Route::middleware(['auth','role:admin'])->group(function(){

        Route::get('/Admin/dashbor', [AdminController::class, 'dashbor'])->name('admin.dash');

});


//Gerant
Route::middleware(['auth','role:gerant'])->group(function(){

Route::get('/Gerant/dashbor', [GerantController::class, 'dashbor'])->name('gerant.dash');

});

//dash
Route::get('/Admin', [AdminController::class, 'index'])->name('commun.dash');

//CATEGORIE
Route::get('Categorie', [CategorieController::class, 'create'])->name('categorie.create');
Route::get('Categorie/index', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('Categorie/ndisponible', [CategorieController::class, 'ndisponible'])->name('categorie.ndisponible');
Route::get('poste/show/{categorie}', [CategorieController::class, 'show'])->name('poste.show');
Route::get('categorie/edit/{categorie}', [CategorieController::class, 'edit'])->name('categorie.edit');
Route::post('/Categorie/store', [CategorieController::class, 'store'])->name('categorie.store');
Route::put('/Categorie/optione/{categorie}', [CategorieController::class, 'optione'])->name('categorie.optione');
Route::put('/Categorie/update/{categorie}', [CategorieController::class, 'update'])->name('categorie.update');





//FOURNISSEUR
Route::get('/Fournisseur', [FournisseurController::class, 'create'])->name('fournisseur.create');
Route::get('/Fournisseur/index', [FournisseurController::class, 'index'])->name('fournisseur.index');
Route::post('/Fournisseur/store', [FournisseurController::class, 'store'])->name('fournisseur.store');
Route::put('Fournisseur/action/{fournisseur}', [FournisseurController::class, 'action'])->name('fournisseur.action');





//PRODUITS
Route::get('/Produits', [ProduitController::class, 'create'])->name('produits.create');
Route::get('/Produits/index', [ProduitController::class, 'index'])->name('produits.index');
Route::get('/Produits/affiche', [ProduitController::class, 'affiche'])->name('produits.affiche');
Route::get('Produits/show/{produit}', [ProduitController::class, 'show'])->name('postes.show');
Route::get('Produits/edit/{produit}', [ProduitController::class, 'edit'])->name('produit.edit');
Route::put('Produits/actione/{produit}', [ProduitController::class, 'actione'])->name('postes.actione');
Route::put('Produits/update/{produit}', [ProduitController::class, 'update'])->name('produit.update');
Route::post('/Produits/store', [ProduitController::class, 'store'])->name('produits.store');

