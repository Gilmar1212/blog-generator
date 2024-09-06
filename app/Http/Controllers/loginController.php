<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller

{
    private $request;
    private $user_consult;
    
    public function login(){        
        return view("index");
    }
    public function autenticaLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password' => 'required'
        ],
        ['email.required'=>"Email obrigatório",
          'password.required'=>"Senha obrigatória"  
        ]
            
        );
        if(Auth::attempt(['email'=> $request->email,'password'=> $request->password])){
            return view("dashboard");
        }else{
            return dd("não logou");
        }
        // $this->request = $request;
        // $this->user_consult = DB::table('users')->where("email", $this->request->input("email"))->first();                       
        
        // $materia_table = TblMateria::all();
        // $anotacoes_table = TblAnotacoes::all();
        // var_dump($this->request->input("email"));
        // if($this->request->input("email") == NULL ){
        //     return view("index",["error"=>"Email não existe"]);
        // }else{

        //     if ($this->request->input("email") ==  $this->user_consult->email && 
        //     Hash::check($this->request->input("password"), $this->user_consult->password)) {
        //         $this->request->session()->put("userSession", ["user" => $this->user_consult->name, "id_user" => $this->user_consult->id,"materia"=>$materia_table,"anotacoes"=>$anotacoes_table]);            
                
        //         $request_content = $this->request->session()->all();        
        //         return view("user-area");
        //         $this->request->session()->flush();
        //     }
            
        //     if ($this->user_consult->email == null) {
        //         echo '<script>alert("Nome de usuário ou senha não existem"); window.location.href = "/"</script>';
        //     } else {
        //         echo '<script>alert("Nome de usuário ou senha não existem"); window.location.href = "/"</script>';
        //     }
        // }
    }
    
}
