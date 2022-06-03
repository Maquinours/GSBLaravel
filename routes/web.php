<?php

use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/formLogin', [VisiteurController::class, 'getLogin']);

Route::get('/formSpecialite',[VisiteurController::class,'getFormSpecialite']);
Route::get('/formActivite',[VisiteurController::class,'getFormActivite']);
Route::get('/listePraticien',[VisiteurController::class,'getListePraticien']);
Route::get('/listeSpecialite',[VisiteurController::class,'getListeSpecialite']);
Route::get('/listeActivite',[VisiteurController::class,'getListeActivite']);

Route::post('/login', [VisiteurController::class, 'signIn']);

Route::get('/getLogout', [VisiteurController::class, 'signOut']);

Route::get('/updatePassword/{pwd}', [VisiteurController::class, 'updatePassword']);
