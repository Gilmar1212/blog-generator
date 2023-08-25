<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\TblAnotacoes;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
    public function login(Request $request){
        $data =  $request->session()->all();              
        $anotacoes_table = TblAnotacoes::all();        
        return view("login",["user"=>$data["userSession"]["user"],"data"=>$data["userSession"]["id"],"anotacoes"=>$anotacoes_table]);               
        
    }
    public function verify(Request $request){
        $req = $request;
        $user_table = DB::table('users')->get();
        $anotacoes_table = TblAnotacoes::all();
        foreach ($user_table as $key => $table_content) {       
            if($req->input("email") == $table_content->email){
                $req->session()->put("userSession",["user"=>$table_content->email,"id"=>$table_content->id]);
                $data =  $request->session()->all();                      
                return view("login",["user"=>$data["userSession"]["user"],"data"=>$data["userSession"]["id"],"anotacoes"=>$anotacoes_table]);               
                $request->session()->flush();
            }                                       
        }
        
       

    }

}
