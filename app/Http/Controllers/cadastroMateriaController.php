<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\tblMateria;
class cadastroMateriaController extends Controller
{
    public function cadastroMateria(){
      //  return redirect("logar/login");
    }
    public function store(Request $request){
      $cadastro = new tblMateria;
      $cadastro->setTable("tbl_materia");
      $cadastro->materia = $request->materia;
      $cadastro->save();
      return redirect("/logar/login");
      dd($cadastro);
    }
}
