<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\GaleriaArtistaController;
use App\Http\Controllers\ComentaioController;


Route::get('/', [WelcomeController::class, 'index']);


Route::get('/dashboard', [WelcomeController::class, 'index'])
    ->middleware(['auth', 'verified', 'cliente'])
    ->name('dashboard');

Route::get('/dashboard', [WelcomeController::class, 'index'])
    ->middleware(['auth', 'verified', 'artista'])
    ->name('dashboard');

Route::get('/super-admin/dashboard', function () {
    return view('super-admin.dashboard');
})->middleware(['auth', 'verified', 'super-admin'])->name('super-admin.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::resource('clientes', UsersController::class);
Route::resource('artistas', ArtistasController::class);
Route::resource('citas', CitasController::class);
Route::resource('categorias', CategoriasController::class)->middleware(['auth', 'verified', 'super-admin']);
Route::resource('galerias', GaleriaArtistaController::class);
Route::resource('welcome1', WelcomeController::class);

Route::post('/comentarios', [ComentaioController::class, 'store'])->name('comentarios.store');

Route::get('artistas', [ArtistasController::class, 'index'])
    ->name('artistas.index')
    ->middleware(['auth', 'verified', 'super-admin']);

