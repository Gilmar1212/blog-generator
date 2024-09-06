<?php

namespace App\Http\Controllers;

use App\Models\TblAnotacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Exception;

class cadastroAnotacoes extends Controller
{
    public $anotacoes;
    public function mostraAnotacoes($id)
    {        
        
            $this->anotacoes = DB::table('tbl_anotacoes')->where("id_materia", $id)->first();
            return view("cadastro.cadastroAnotacoes", ["anotacoes" => $this->anotacoes]);
        
    }
    public function store(Request $request)
    {           
        try{            
            $tbl_anotacoes = new TblAnotacoes;            
            $tbl_anotacoes->materia = $request->anotacao;
            $tbl_anotacoes->titulo_anotacoes = $request->titulo;
            $tbl_anotacoes->assunto_anotacoes = $request->anotacao;
            $tbl_anotacoes->id_materia = $request->id_materia;
            $tbl_anotacoes->save();
            return view("user-area");
        }catch(Exception $e){
            return $e->getMessage("Deu ruim :/");
        }
    }
}
