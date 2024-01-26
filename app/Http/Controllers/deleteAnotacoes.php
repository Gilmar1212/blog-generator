<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\tblMateria;
use App\Models\tblAnotacoes;

class deleteAnotacoes extends Controller
{
    public function deleteAnotacoes(Request $request)
    {
        $id_materia_get = $request->query("id_materia");
        $materia = tblMateria::all();               
        $anotacoes = tblAnotacoes::all();        
        return view("delete.deleteAnotacoes",["materia"=>$materia],["anotacoes"=>$anotacoes],["id_materia_get"=>$id_materia_get]);
    }
    public function destroy(Request $request)
    {        
        $anotacoes = tblAnotacoes::all();    
        foreach($anotacoes as $index => $info){
            if($request->id_anotacoes == $info["id_anotacoes"]){                                
                DB::table("tbl_anotacoes")->where("id_anotacoes",$request->id_anotacoes)->delete();            
            }
            
        }
        
        
    }
}
