<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblMateria;
use App\Models\tblAnotacoes;
use GuzzleHttp\Client;

class apiDadosBasicos extends Controller
{
    public function index()
    {
        $materia = tblMateria::all();
        return response()->json($materia);
    }
    public function show($id)
    {
        return response()->json(tblMateria::findOrFail($id));
    }
}
