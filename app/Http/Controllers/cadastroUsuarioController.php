<?php

namespace App\Http\Controllers;

use App\Models\cadastroModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class cadastroUsuarioController extends Controller
{
    private $req;
    private $token;
    public function cadastro(){
    return view("cadastro.cadastrarUsuario");
    }
    public function store(Request $request){
        $this->req = $request;
        $this->token = bin2hex(random_bytes(320));        
        $tolken_generated = hash("sha256",$this->token);        

        $cadastro = new Users;
        $cadastro->name = $this->req->name;
        $cadastro->password  = password_hash($this->req->password,PASSWORD_BCRYPT);
        $cadastro->email  = $this->req->email;
        $cadastro->remember_token = $tolken_generated;
        
        $cadastro->save();
        
        return redirect("/");
    }
}
