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

Route::get('/bilan', [BilanController::class, 'afficherBilan']);

Route::get('/etatfinance', [EtatfinanceController::class, 'afficheretataf']);

Route::get('/etatflux', [EtatfluxController::class, 'afficheretatflux']);

Route::get('/fonds', [FondController::class, 'affichefonds']);

Route::get('/notesbilan', [NotesbilanController::class, 'affichenotebilan']);

Route::get('/noteseaf', [NoteseafController::class, 'afficheeaf']);
