<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudController extends Controller
{
    public function Listar(){

        $Crud = crud::all();
        return $Crud;

    }

    public function Buscar($id){

        $Crud = crud::find($id);
        return $Crud;

    }

    public function Eliminar(Request $request){

        $Json = $request -> input('json', null);

        $ParamArray = json_decode($Json, true);

        $Crud = $this -> Buscar($ParamArray['id_crud']);

        $Crud -> delete();

    }

    public function Modificar(Request $request){

        $Json = $request -> input('json', null);

        $ParamArray = json_decode($Json, true);

        $Crud = $this -> Buscar($ParamArray['id_crud']);

        $Validacion = \Validator::make($ParamArray,[
            'nombre'       =>       'required',
            'email'        =>       'required|email',
            'area'         =>       'required',
            'Curriculum'   =>       'required'
        ]);

        if($Validacion -> fails()){

            $Response = array(
                'status'        =>   'error',
                'code'          =>   '500',
                'message'       =>   'Error de validacion',
                'errors'        =>   $Validacion -> errors()
            );

        } else {

            $Crud = new crud();

            $Crud -> nombre = $ParamArray['nombre'];
            $Crud -> email  = $ParamArray['email'];
            $Crud -> area = $ParamArray['area'];
            $Crud -> Curriculum = $ParamArray['Curriculum'];

            $Crud -> save();

        }


    }

    public function Agregar(Request $request){

        $Json = $request -> input('json', null);

        $ParamArray = json_decode($Json, true);

        $Validacion = \Validator::make($ParamArray,[
            'nombre'       =>       'required',
            'email'        =>       'required|email',
            'area'         =>       'required',
            'Curriculum'   =>       'required'
        ]);

        if($Validacion -> fails()){

            $Response = array(
                'status'        =>   'error',
                'code'          =>   '500',
                'message'       =>   'Error de validacion',
                'errors'        =>   $Validacion -> errors()
            );

        } else {

            $Crud = new crud();

            $Crud -> nombre = $ParamArray['nombre'];
            $Crud -> email  = $ParamArray['email'];
            $Crud -> area = $ParamArray['area'];
            $Crud -> Curriculum = $ParamArray['Curriculum'];

            $Crud -> save();

        }

    }
}
