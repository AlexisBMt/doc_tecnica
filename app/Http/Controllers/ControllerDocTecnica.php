<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerDocTecnica extends Controller
{
    //Este controlador no traera un modelo porque no se esta migrando la tabla
    public function getDocTecnica() {
        $documentacion = DB::table('doc_tecnica')->get();
        return response()->json($documentacion, 200);
    }

    public function getDocTecnicaId($id) {
        $documentacion = DB::table('doc_tecnica')->where('id', $id)->get();
        if( count($documentacion) == 0){
            return response()->json(["Message" => "File Not Found"], 404);
        }
        return response()->json($documentacion, 200);
    }

    public function postDocTecnica(Request $request) {
        $documentacion = DB::table('doc_tecnica')->insert(
            ['fecha_recibido' => $request->fecha_recibido, 'zona' => $request->zona, 'proyecto' => $request->proyecto,
                'constratista' => $request->contratista, 'subcontrata' => $request->subcontrata,
                'documento' => $request->documento, 'estatus' => $request->estatus,
                'dias_contados' => $request->dias_contados
            ]    
        );
        return response()->json(["Message" => "File Created Successfully", "Body" => $documentacion], 201);
    }

    public function putDocTecnicaId(Request $request, $id) {
        $documentacion = DB::table('doc_tecnica')->where('id', $id)->get();
        if(count($documentacion) == 0){
            return response()->json(["Message" => "File Not Found"], 404);
        }
        $documentacion = DB::table('doc_tecnica')->where('id', $id)->update(
            ['fecha_recibido' => $request->fecha_recibido, 'zona' => $request->zona, 'proyecto' => $request->proyecto,
                'constratista' => $request->contratista, 'subcontrata' => $request->subcontrata,
                'documento' => $request->documento, 'estatus' => $request->estatus,
                'dias_contados' => $request->dias_contados
            ]
        );
        $documentacion = DB::table('doc_tecnica')->where('id', $id)->get();
        return response()->json($documentacion, 200);
    }
    
    public function deleteDocTecnicaId($id) {
        $documentacion = DB::table('doc_tecnica')->where('id', $id)->get();
        if(count($documentacion) == 0){
            return response()->json(["Message" => "File Not Found"], 404);
        }
        $documentacion = DB::table('doc_tecnica')->where('id', $id)->delete();
        return response()->json(["Message" => "File Delete Successfully"], 200);
    }
}
