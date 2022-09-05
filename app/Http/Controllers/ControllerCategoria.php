<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class ControllerCategoria extends Controller
{
    public function getCategoria() {
        return response()->json(categoria::all(), 200);
    }

    public function getCategoriaId($id) {
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(["Message" => "Categoria Not Found"], 404);
        }
        return response()->json($categoria, 200);
    }

    public function postCategoria(Request $request) {
        $categoria = categoria::create($request->all());
        return response($categoria, 201);
    }

    public function updateCategoria(Request $request, $id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(["Message" => "Categoria Not Found"], 404);
        }
        $categoria->update($request->all());
        return response($categoria, 200);
    }

    public function deleteCategoria($id) {
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(["Message" => "Categoria Not Found"], 404);
        }
        $categoria->delete();
        return response()->json(["Message" => "Categoria Delete Successfully"], 200);
    }
}
