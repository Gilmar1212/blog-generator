<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblMateria;
use App\Models\tblAnotacoes;
class IndexController extends Controller
{
    public function index(){
        $materia = tblMateria::all();        
        return view("index", ['materia'=>$materia]);
    }
}
