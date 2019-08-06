<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use paeCrea\Visita;
use paeCrea\Criterio_evaluacion;
use paeCrea\Formulario;
use Illuminate\Support\Facades\Redirect;

use DB;

class FormularioController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            $criterios = Criterio_evaluacion::
            select('descripcionCritEva', 'estadoCriterio','Tipo_Formulario_idTipo_Formulario')
            ->where('estadoCriterio','=','1')->get();
            return view('formulario.index',["criterios"=>$criterios]);
        }
    }
    public function create()
    {

    }
    public function store()
    {

    }
    public function show($idMunicipio)
    {

    }
    public function edit($idMunicipio)
    {


    }
    public function update( )
    {

    }
    public function destroy($idMunicipio)
    {

    }
}