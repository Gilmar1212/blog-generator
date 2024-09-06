<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\tblMateria;
use App\Models\tblAnotacoes;
use Exception;

class deleteAnotacoes extends Controller
{
    public function deleteAnotacoes(Request $request)
    {
        $id_materia_get = $request->query("id_materia");
        $materia = tblMateria::all();
        $anotacoes = tblAnotacoes::all();
        return view("delete.deleteAnotacoes", ["materia" => $materia], ["anotacoes" => $anotacoes], ["id_materia_get" => $id_materia_get]);
    }
    public function destroy(Request $request)
    {
        try {
            $rowsDeleted = DB::table("tbl_anotacoes")->where("id_anotacoes", $request->id_anotacoes)->delete();
    
            if ($rowsDeleted > 0) {
                return redirect()->route('delete.deleteAnotacoes')->with('success', 'Registro apagado com sucesso!');
            } else {
                return "Nenhum registro foi excluído.";
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with("error", 'Erro ao excluir registros: ' . $e->getMessage());
        }
    }
}
