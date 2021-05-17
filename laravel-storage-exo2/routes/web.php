<?php

use App\Http\Controllers\UserController;
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
// Route::get("/user",[UserController::class,"index"])->name("user");
// Route::get("/user/create",[UserController::class,"create"]);
// Route::post("/user/store",[UserController::class,"store"]);
// Route::post("/user/{id}/delete",[UserController::class,"destroy"]);
// Route::get("/user/{id}/edit",[UserController::class,"edit"]);
// Route::post("/user/{id}/update",[UserController::class,"update"]);
Route::resource("/users", PhotoController::class);
Route::post('/user/{id}/download', [UserController::class,'download']);
