<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\tblMateria;

class deleteAnotacoes extends Controller
{
    public function deleteAnotacoes()
    {
        $materia = tblMateria::all();               
        return view("delete.deleteAnotacoes", ["materia"=>$materia]);
    }
    public function destroy(Request $request)
    {        
        $materia = tblMateria::all();
       
        
        foreach($materia as $index => $info){
            if($request->id_materia == $info["id_materia"]){                
                $select = DB::table("tbl_materia")->where("id_materia",$request->id_materia)->delete();            
            }
            
        }
        
        
    }
}
