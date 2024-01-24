<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\tblMateria;
use App\Models\tblAnotacoes;

class deleteAnotacoes extends Controller
{
    public function deleteAnotacoes()
    {
        $materia = tblMateria::all();               
        $anotacoes = tblAnotacoes::all();        
        return view("delete.deleteAnotacoes", ["materia"=>$materia],["anotacoes"=>$anotacoes]);
    }
    public function destroy(Request $request)
    {        
        $anotacoes = tblAnotacoes::all();    
        foreach($anotacoes as $index => $info){
            if($request->id_materia == $info["id_materia"]){                
                DB::table("tbl_anotacoes")->where("id_materia",$request->id_materia)->delete();            
            }
            
        }
        
        
    }
}
