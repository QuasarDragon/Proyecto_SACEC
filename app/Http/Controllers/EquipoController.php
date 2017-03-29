<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\equipos;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //$equipo= DB::table('equipos')->where('fk_id_ambiente', $id);

        $equipo = DB::table('equipos')
                     ->select(DB::raw('*'))
                     ->where('fk_id_ambiente', '=', $id)
                     ->get();
        return view ('Eliminar', compact('equipo'));
    }



public function Guardar (Request $request)
    {
        $id =  $request->input('fk_id_ambiente');
        $data=Request()->all();
        equipos::create($data);
        echo "Equipo guardado correctamente";
        return view('Equipos', ['id'=>$id]);
    }

public function cargaequipos($id)
    {
    return view('Equipos',['id'=>$id]);
       
    }

public function eliminarequipo($id)
    {

            echo $id;
            $equipo = equipos::findOrFail($id);         
            $equipo->delete();
            //return redirect()->route('Ambientes');
    }  




    /** para mostrar la vista de consultar **/  

    public function consultarequipo()
    {

        return view('consultar');    
    }  



///////////////////////////////////////////////////////

         public function consultaractivo(Request $request)
    {
        $dato=Request()->get('activo');

        $activo = DB::table('equipos')
                     ->select(DB::raw('*'))
                     ->where('Codigo_del_cpu', '=', $dato)
                     ->get();
        return view ('consultar', compact('activo'));
    }

}
