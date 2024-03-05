<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/bilan', [Controller::class, 'afficherBilan']);

Route::get('/etatfinance', [Controller::class, 'afficheretataf']);

Route::get('/etatflux', [Controller::class, 'afficheretatflux']);

Route::get('/fonds', [Controller::class, 'affichefonds']);

Route::get('/notesbilan', [Controller::class, 'affichenotebilan']);

Route::get('/noteseaf', [Controller::class, 'afficheeaf']);
