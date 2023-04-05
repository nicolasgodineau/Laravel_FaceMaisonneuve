<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

FONCTIONNEMENT D'UNE ROUTE:
Route::get('1', [ 2::class, '3'])->name('4');
1 = nom du dossier.nom du fichier (ex dossier etudiant fichier create donne etudiant.create)
2 = nom du controllers qui va faire l'action
3 = la méthode dans ce controller
4 = le nom d'appel dans la page blade.php (idealement le meme nom que le 1)
*/

Route::get('/', function () {return view('welcome'); });

Route::get('etudiant.index', [EtudiantController::class, 'index'])->name('etudiant.index')->middleware('auth');
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show')->middleware('auth');

Route::get('etudiant.index/DESC', [EtudiantController::class, 'sortDESC'])->name('etudiant.sortDESC');
Route::get('etudiant.index/ASC', [EtudiantController::class, 'sortASC'])->name('etudiant.sortASC');

Route::get('etudiant.create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('etudiant-store', [EtudiantController::class , 'store'])->name('etudiant.store');

Route::get('etudiant-edit/{etudiant}', [EtudiantController::class,'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class , 'update'])->name('etudiant.update');

Route::delete('etudiant-edit/{etudiant}', [EtudiantController::class,'destroy'])->name('etudiant.delete');

Route::get('etudiant.filtre', [EtudiantController::class , 'filtre'])->name('etudiant.filtre');


// route qui va dans le controller CustomAuth, dans la méthode "create", puis retourne la vue de création de compte
Route::get('auth.create', [CustomAuthController::class, 'create'])->name('auth.create');
Route::get('auth.login', [CustomAuthController::class, 'login'])->name('auth.login');
Route::post('user.store', [UserController::class, 'store'])->name('user.store');
Route::put('auth.login', [CustomAuthController::class, 'authentication']);

Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');

// article

Route::get('article.index', [ArticleController::class, 'index'])->name('article.index')->middleware('auth');

Route::get('article.create', [ArticleController::class, 'create'])->name('article.create');
Route::post('article-store', [ArticleController::class , 'store'])->name('article.store');
Route::get('article/{article}', [ArticleController::class, 'show'])->name('article.show')->middleware('auth');
Route::get('article_user', [ArticleController::class, 'article_user'])->name('article.article_user')->middleware('auth');
Route::get('article-edit/{article}', [ArticleController::class,'edit'])->name('article.edit')->middleware('auth');
Route::put('article-edit/{article}', [ArticleController::class , 'update'])->name('article.update')->middleware('auth');
Route::delete('article-edit/{article}', [ArticleController::class,'destroy'])->name('article.delete')->middleware('auth');




Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');
