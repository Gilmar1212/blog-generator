<?php

namespace App\Http\Controllers;

use App\Models\cadastroModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class cadastroUsuarioController extends Controller
{
    public function cadastro(){
    //    $cadastro = Users::all();
    //    return view("cadastro.cadastrarUsuario", ['cadastro'=>$cadastro]);
    return view("cadastro.cadastrarUsuario");
    }
    public function store(Request $request){
        
        $cadastro = new Users;
        $cadastro->name = $request->name;
        $cadastro->password  = password_hash($request->password,PASSWORD_BCRYPT);
        $cadastro->email  = $request->email;
        $cadastro->save();
        
        return redirect("/");
    }
}
