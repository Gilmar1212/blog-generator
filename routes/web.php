<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastroAnotacoes;

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

Route::prefix("/")->group(function () {
    Route::get("/", [\App\Http\Controllers\loginController::class, "login"])->name("index");    
});
Route::post("/auth",[\App\Http\Controllers\loginController::class, "autenticaLogin"])->name("auth");
// Route::get("/api-dados", [\App\Http\Controllers\apiDadosBasicos::class, "index"]);
// Route::get("/testa-api", [\App\Http\Controllers\testaApi::class, "consomeAPI"])
//     ->name("login.consome-api")
//     ->middleware(\App\Http\Middleware\CorsMiddleware::class);

Route::get("/cadastro-usuario", [\App\Http\Controllers\cadastroUsuarioController::class, "cadastro"])->name("cadastro.cadastrar");
Route::post("/cadastro-usuario", [\App\Http\Controllers\cadastroUsuarioController::class, "store"]);
Route::prefix("/cadastro")->group(function () {
    Route::get("/cadastro-anotacoes/{id}", [\App\Http\Controllers\cadastroAnotacoes::class, "mostraAnotacoes"])->name("cadastro.anotacoes");
    Route::get("/cadastro-anotacoes", [\App\Http\Controllers\cadastroAnotacoes::class, "store"])->name("cadastro.store");
});
Route::get("/cadastro-materia", [\App\Http\Controllers\cadastroMateriaController::class, "cadastroMateria"])->name("cadastro.materia");
Route::post("/cadastro-materia", [\App\Http\Controllers\cadastroMateriaController::class, "store"]);
Route::prefix("/delete")->group(function () {
    Route::get("/deleta-anotacoes", [\App\Http\Controllers\deleteAnotacoes::class, "deleteAnotacoes"])->name("delete.deleteAnotacoes");
    Route::delete("/deleta-anotacoes", [\App\Http\Controllers\deleteAnotacoes::class, "destroy"]);
});
