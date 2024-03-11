<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BilanController;
use App\Http\Controllers\EtatfinanceController;
use App\Http\Controllers\EtatfluxController;
use App\Http\Controllers\FondController;
use App\Http\Controllers\NotesbilanController;
use App\Http\Controllers\NoteseafController;


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
    return view('choix');
});
//routes pour les vues du web
Route::get('/bilan', [BilanController::class, 'afficherBilan']);

Route::get('/etatfinance', [EtatfinanceController::class, 'afficheretataf']);

Route::get('/etatflux', [EtatfluxController::class, 'afficheretatflux']);

Route::get('/fonds', [FondController::class, 'affichefonds']);

Route::get('/notesbilan', [NotesbilanController::class, 'affichenotebilan']);

Route::get('/noteseaf', [NoteseafController::class, 'afficheeaf']);

//routes pour les vues de téléchargements
Route::get('/bilanpdf', [BilanController::class, 'afficherBilanPdf']);

Route::get('/etatfinancepdf', [EtatfinanceController::class, 'afficheretatafPdf']);

Route::get('/etatfluxpdf', [EtatfluxController::class, 'afficheretatfluxPdf']);

Route::get('/fondspdf', [FondController::class, 'affichefondsPdf']);

Route::get('/notesbilanpdf', [NotesbilanController::class, 'affichenotebilanPdf']);

Route::get('/noteseafpdf', [NoteseafController::class, 'afficheeafPdf']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
