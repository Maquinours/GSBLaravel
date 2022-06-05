<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\PraticienController;
use App\Http\Controllers\SpecialiteController;
use \App\Http\Controllers\ActiviteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Vues/home');
});

Route::get('/formLogin', [VisiteurController::class, 'getLogin']);

Route::get('/formUpdateSpecialite/{idPraticien}/{idSpecialite}',[SpecialiteController::class,'getUpdatePossederForm']);
Route::get('/formInsertSpecialite/{idPraticien}', [SpecialiteController::class, 'getInsertPossederForm']);
Route::get('/formInsertActivite/{idPraticien}', [ActiviteController::class,'getInsertInviterForm']);
Route::get('/formUpdateActivite/{idPraticien}/{idActivite}', [ActiviteController::class, 'getUpdateInviterForm']);
Route::get('/listePraticien',[PraticienController::class,'getPraticienList']);
Route::get('/specialites/{idPraticien}',[SpecialiteController::class,'getSpecialitesList']);
Route::get('/activites/{idPraticien}',[ActiviteController::class,'getActivitesList']);

Route::post('/SignIn', [VisiteurController::class, 'signIn']);

Route::get('/signOut', [VisiteurController::class, 'signOut']);

Route::get('/updatePassword/{pwd}', [VisiteurController::class, 'updatePassword']);

Route::post('/updatePosseder', [SpecialiteController::class, 'updatePosseder']);