<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\tblMateria;
class cadastroMateriaController extends Controller
{
    public function cadastroMateria(){
       return redirect("/user-area");
    }
    public function store(Request $request){
      $cadastro = new tblMateria;
      $user = Users::all();
      $session_req = $request->session()->all();      
      $cadastro->setTable("tbl_materia");
      $cadastro->materia = $request->materia;
      $cadastro->id_user = $session_req["userSession"]["id_user"];      
      $cadastro->save();
      return redirect("/user-area");      
    }
}
