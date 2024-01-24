<?php

namespace App\Http\Controllers;

use App\Models\TblAnotacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class cadastroAnotacoes extends Controller
{
    public $anotacoes;
    public function cadastroAnotacoes(Request $request)
    {
        $this->anotacoes = DB::table('tbl_anotacoes')->where("id_materia", $request->query("id_materia"))->first();                
        return view("cadastro.cadastroAnotacoes", ["anotacoes"=>$this->anotacoes]);
    }
    public function store(Request $request)
    {
        $data =  $request->session()->all();
        $tbl_anotacoes = new TblAnotacoes;
        $tbl_anotacoes->materia = $request->anotacao;
        $tbl_anotacoes->titulo_anotacoes = $request->titulo;
        $tbl_anotacoes->assunto_anotacoes = $request->anotacao;
        $tbl_anotacoes->id_materia = $request->id_materia;
        $tbl_anotacoes->save();
    }
}
