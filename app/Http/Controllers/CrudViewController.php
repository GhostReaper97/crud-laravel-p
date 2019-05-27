<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudViewController extends Controller
{

    public function Principal(){

        $Crud = Crud::all();

        return view('crud',['cruds' => $Crud]);

    }

    public function FormularioCrud(){

        return view('formcrud',['nuevo' => true]);


    }

    public function Modificar(Request $request){

        $Crud = Crud::find($request -> id_crud);

        $Crud -> nombre = $request -> nombre;
        $Crud -> email = $request -> email;
        $Crud -> area = $request -> area;
        $Crud -> Curriculum = $request -> Curriculum;

        $Crud -> save();

        return redirect('/');

    }

    public function FormularioEditar($id_crud){

        $Crud = Crud::find($id_crud);

        return view('formcrud',['crud' => $Crud, 'nuevo' => false]);


    }

    public function Guardar(Request $request){

        $CrudNuevo = new Crud();

        $CrudNuevo -> nombre = $request -> nombre;
        $CrudNuevo -> email = $request -> email;
        $CrudNuevo -> area = $request -> area;
        $CrudNuevo -> Curriculum = $request -> Curriculum;

        $CrudNuevo -> save();


        $Crud = Crud::all();

        return redirect('/');

    }

    public function Eliminar(Request $request){
        
        $Crud = Crud::find($request -> id_crud);

        $Crud -> delete();

        return redirect('/');

    }
    
}
