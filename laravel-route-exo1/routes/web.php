<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/feynbien', function () {
//     return 'Bonjour chers utilisateurs';
// });

// Route::get('/{JeanMichel}', function () {
//     return 'Bienvenue sur mon site';
// });

// Route::get('/{JeanMichel}', function ($JeanMichel) {
//     return "Hello $JeanMichel";
// });

// Route::get('/welcome', function (){
//     return view('welcome');
// });

Route::get('/about', function (){
    return view('about');
})->name("page");

Route::get('/welcome', function () {
    $nom = "Said Maktabi";
    return view('welcome', compact('nom'));
});