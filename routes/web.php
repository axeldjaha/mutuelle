<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SexeController;
use App\Http\Controllers\TestController;
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

Route::get('/', [HomeController::class, "home"]);

Route::get("test/", [TestController::class, "test"]);

Route::resource("sexe", SexeController::class);

/*Route::get("sexe/index", [SexeController::class, "index"])->name("sexe.index");
Route::get("sexe/create", [SexeController::class, "create"])->name("sexe.create");
Route::post("sexe/create", [SexeController::class, "store"])->name("sexe.store");
Route::get("sexe/{id}", [SexeController::class, "show"])->name("sexe.show");
Route::get("sexe/edit/{id}", [SexeController::class, "edit"])->name("sexe.edit");
Route::put("sexe/edit/{id}", [SexeController::class, "update"])->name("sexe.update");*/

Route::put("sexe/statut/{id}", [SexeController::class, "statut"])->name("sexe.statut");
