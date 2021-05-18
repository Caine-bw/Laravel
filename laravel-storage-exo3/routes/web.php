<?php

use App\Http\Controllers\CaracteristiqueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
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
//Routes Users
Route::resource('/users', UserController::class);
Route::post('/users/{id}/download', [UserController::class,'download']);

//Routes Portfolios
<<<<<<< HEAD
Route::resource('/portfolios', PortfolioController::class);
Route::post('/portfolios/{id}/download', [PortfolioController::class,'download']);
=======
Route::resource('/portfolios', PortfoliosController::class);
Route::post('/portfolios/{id}/download', [PortfoliosController::class,'download']);


// caracteristique
Route::resource("/caracteristiques", CaracteristiqueController::class);
>>>>>>> 3ef34f15d6956a507f66660aac713ac7a8a8774c
