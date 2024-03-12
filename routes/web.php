<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BilanController;
use App\Http\Controllers\EtatfinanceController;
use App\Http\Controllers\EtatfluxController;
use App\Http\Controllers\FondController;
use App\Http\Controllers\NotesbilanController;
use App\Http\Controllers\NoteseafController;

//routes pour les vues sécurisées et nommées
Route::get('/bilan', [BilanController::class, 'afficherBilan'])->middleware('auth')->name('bilan');


Route::get('/etatfinance', [EtatfinanceController::class, 'afficheretataf'])->middleware('auth')->name('etatfinance');


Route::get('/etatflux', [EtatfluxController::class, 'afficheretatflux'])->middleware('auth')->name('etatflux');


Route::get('/fonds', [FondController::class, 'affichefonds'])->middleware('auth')->name('fonds');


Route::get('/notesbilan', [NotesbilanController::class, 'affichenotebilan'])->middleware('auth')->name('notesbilan');


Route::get('/noteseaf', [NoteseafController::class, 'afficheeaf'])->middleware('auth')->name('noteseaf');


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

Route::get('/bilanexcel', [BilanController::class, 'export']);

