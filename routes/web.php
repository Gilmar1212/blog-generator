<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [\App\Http\Controllers\indexController::class,"index"])->name("index");
Route::prefix("/logar")->group(function(){
    Route::get("/login", [\App\Http\Controllers\loginController::class,"login"])->name("logar.login");
    Route::post("/login", [\App\Http\Controllers\loginController::class,"verify"]);
});
Route::get("/cadastro-usuario", [\App\Http\Controllers\cadastroUsuarioController::class,"cadastro"])->name("cadastro.cadastrar");
Route::post("/cadastro-usuario", [\App\Http\Controllers\cadastroUsuarioController::class,"store"]);

Route::get("/cadastro-anotacoes",[\App\Http\Controllers\cadastroAnotacoes::class,"cadastroAnotacoes"])->name("cadastro.anotacoes");
Route::post("/cadastro-anotacoes",[\App\Http\Controllers\cadastroAnotacoes::class,"store"]);

Route::get("/cadastro-materia",[\App\Http\Controllers\cadastroMateriaController::class,"cadastroMateria"])->name("cadastro.materia");
Route::post("/cadastro-materia",[\App\Http\Controllers\cadastroMateriaController::class,"store"]);
Route::get("/deleta-anotacoes",[\App\Http\Controllers\deleteAnotacoes::class,"destroy"])->name("delete.deleteAnotacoes");
Route::delete("/deleta-anotacoes",[\App\Http\Controllers\deleteAnotacoes::class,"destroy"]);