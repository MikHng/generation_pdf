<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BilanController;
use App\Http\Controllers\EtatfinanceController;
use App\Http\Controllers\EtatfluxController;
use App\Http\Controllers\FondController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\NotesbilanController;
use App\Http\Controllers\NoteseafController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware;

//routes pour les vues sécurisées et nommées
Route::get('/bilan', [BilanController::class, 'afficherBilan'])->middleware('auth')->name('bilan');


Route::get('/etatfinance', [EtatfinanceController::class, 'afficheretataf'])->middleware('auth')->name('etatfinance');


Route::get('/etatflux', [EtatfluxController::class, 'afficheretatflux'])->middleware('auth')->name('etatflux');


Route::get('/fonds', [FondController::class, 'affichefonds'])->middleware('auth')->name('fonds');


Route::get('/notesbilan', [NotesbilanController::class, 'affichenotebilan'])->middleware('auth')->name('notesbilan');


Route::get('/noteseaf', [NoteseafController::class, 'afficheeaf'])->middleware('auth')->name('noteseaf');

Route::get('/doc', [DocController::class, 'affichedoc'])->middleware('auth')->name('documentation');

//routes pour les vues de téléchargements
Route::get('/bilanpdf', [BilanController::class, 'afficherBilanPdf'])->middleware('auth')->name('bilanpdf');


Route::get('/etatfinancepdf', [EtatfinanceController::class, 'afficheretatafPdf'])->middleware('auth')->name('etatfinancepdf');


Route::get('/etatfluxpdf', [EtatfluxController::class, 'afficheretatfluxPdf'])->middleware('auth')->name('etatfluxpdf');


Route::get('/fondspdf', [FondController::class, 'affichefondsPdf'])->middleware('auth')->name('fondspdf');


Route::get('/notesbilanpdf', [NotesbilanController::class, 'affichenotebilanPdf'])->middleware('auth')->name('notesbilanpdf');


Route::get('/noteseafpdf', [NoteseafController::class, 'afficheeafPdf'])->middleware('auth')->name('noteseafpdf');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/bilanexcel', [BilanController::class, 'export'])->middleware('auth')->name('bilanexcel');
Route::get('/etatfinanceexcel', [EtatfinanceController::class, 'export'])->middleware('auth')->name('etatfinanceexcel');
Route::get('/etatfluxexcel', [EtatfluxController::class, 'export'])->middleware('auth')->name('etatfluxexcel');
Route::get('/fondexcel', [FondController::class, 'export'])->middleware('auth')->name('fondexcel');
Route::get('/notesbilanexcel', [NotesbilanController::class, 'export'])->middleware('auth')->name('notesbilanexcel');
Route::get('/noteseafexcel', [NoteseafController::class, 'export'])->middleware('auth')->name('noteseafexcel');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('verifyUserAccess')->name('register');

/*Route::middleware(['auth'])->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
});*/

Route::post('/register', [RegisterController::class, 'register']);
