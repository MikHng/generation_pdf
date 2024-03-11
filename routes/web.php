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

//Route::get('/', function () {
   // return view('login');

//});
//routes pour les vues du web
//Route::get('/', [BilanController::class, 'afficherBilan'])->middleware('auth');

Route::get('/bilan', [BilanController::class, 'afficherBilan'])->middleware('auth');


Route::get('/etatfinance', [EtatfinanceController::class, 'afficheretataf'])->middleware('auth');


Route::get('/etatflux', [EtatfluxController::class, 'afficheretatflux'])->middleware('auth');


Route::get('/fonds', [FondController::class, 'affichefonds'])->middleware('auth');


Route::get('/notesbilan', [NotesbilanController::class, 'affichenotebilan'])->middleware('auth');


Route::get('/noteseaf', [NoteseafController::class, 'afficheeaf'])->middleware('auth');


//routes pour les vues de téléchargements
Route::get('/bilanpdf', [BilanController::class, 'afficherBilanPdf'])->middleware('auth');


Route::get('/etatfinancepdf', [EtatfinanceController::class, 'afficheretatafPdf'])->middleware('auth');


Route::get('/etatfluxpdf', [EtatfluxController::class, 'afficheretatfluxPdf'])->middleware('auth');


Route::get('/fondspdf', [FondController::class, 'affichefondsPdf'])->middleware('auth');


Route::get('/notesbilanpdf', [NotesbilanController::class, 'affichenotebilanPdf'])->middleware('auth');


Route::get('/noteseafpdf', [NoteseafController::class, 'afficheeafPdf'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


