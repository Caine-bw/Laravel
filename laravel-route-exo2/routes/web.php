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


// Route::get('/{a}/{b}', function ($a, $b) {
//     return view('welcome', compact('a', 'b'));
// });

Route::get('about/{nrv}', function ($nrv){
    return view('pages.about', compact('nrv'));
});

Route::get('contact/{a}/{b}/{c}', function ($a, $b, $c){
    return view('pages.contact', compact('a', 'b', 'c'));
});

