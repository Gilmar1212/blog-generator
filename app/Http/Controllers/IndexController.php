<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblAnotacoes;
class IndexController extends Controller
{
    public function index(){
        $anotacoes = TblAnotacoes::all();
        return view("index", ['anotacoes'=>$anotacoes]);
    }
}
