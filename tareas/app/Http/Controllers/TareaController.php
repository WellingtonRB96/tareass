<?php

namespace App\Http\Controllers;

use App\DataTables\TareasDataTable;
use App\Models\Tarea;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class TareaController extends Controller
{
    public function index(TareasDataTable $dataTable)
    {
        $datos = Tarea::where([])->orderByDesc('orden')->get();
        //dd($datos);
        return view('home')->with(['datos'=>$datos]);
    }
    public function index2(TareasDataTable $dataTable)
    {
        $datos = Tarea::where([])->orderByDesc('orden')->get();
        //dd($datos);
        return view('fase2')->with(['datos'=>'']);
    }
    public function eliminar($id)
    {
        $datos = Tarea::where([
            ['id','=',$id]
        ])->first();

        $datos->delete();

        $datos = Tarea::where([])->orderByDesc('orden')->get();
        return view('home')->with(['datos'=>$datos]);
    }

    public function agregar(Request $request)
    {

        $datonuevo = new Tarea;

        $datonuevo->titulo = $request->tarea;
        $datonuevo->orden = $request->orden;
        $datonuevo->estado = 1;
        $datonuevo->save();

        $datos = Tarea::where([])->orderByDesc('orden')->get();

        return view('home')->with(['datos'=>$datos]);
    }

    public function filtrar(Request $request)
    {
        if($request->titulo != ""){
            $datos = Tarea::where([
                ['titulo','LIKE',"%{$request->titulo}%"],
            ])->orderByDesc('orden')->get();
        }else{
            $datos = Tarea::where([
            ])->orderByDesc('orden')->get();
        }


        return view('home')->with(['datos'=>$datos]);
    }
    public function filtrarOrden(Request $request)
    {
        if($request->orden != ""){
            $datos = Tarea::where([
                ['orden','=',$request->orden],
            ])->orderByDesc('orden')->get();
        }else{
            $datos = Tarea::where([
            ])->orderByDesc('orden')->get();
        }


        return view('home')->with(['datos'=>$datos]);
    }
    public function cantar(Request $request)
    {
        if($request->sonido == 'brr'){
            $resultado = 'fiu, cric-cric, brrah!';
        }else if($request->sonido == 'birip'){
            $resultado = 'trri-trri, croac!';
        }else if($request->sonido == 'plop'){
            $resultado = 'cric-cric, brrah';
        }else{
            $resultado = '';
        }


        return view('fase2')->with(['datos'=>$resultado]);
    }
}
