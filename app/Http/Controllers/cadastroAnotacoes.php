<?php

namespace App\Http\Controllers;
use App\Models\TblAnotacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class cadastroAnotacoes extends Controller
{
    public function cadastroAnotacoes(){
        return view("cadastro.cadastroAnotacoes");
    }
    public function store(Request $request){
        $data =  $request->session()->all();
        $tbl_anotacoes = new TblAnotacoes;
        $tbl_anotacoes->materia = $request->anotacao;
        $tbl_anotacoes->titulo_anotacoes = $request->titulo;
        $tbl_anotacoes->assunto_anotacoes = $request->anotacao;
        $tbl_anotacoes->id_materia = $data["userSession"]["id"];
        $tbl_anotacoes->save();
        return redirect("/logar/login");
    }
}
