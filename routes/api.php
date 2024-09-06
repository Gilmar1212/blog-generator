<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("/api-dados", \App\Http\Controllers\apiDadosBasicos::class);