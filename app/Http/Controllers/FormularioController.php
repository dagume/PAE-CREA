<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use paeCrea\Encabezado1;
use paeCrea\Evaluacion1;
use paeCrea\Visita;

class FormularioController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {

    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        foreach($request->input('observacion') as $key=>$observacion) {
            Evaluacion1::create([
                'evaluacion' => $request->evaluacion[$key],
                'observacion' => $request->observacion[$key],
                'manipuladoras' => $request->manipuladoras,
                'Formulario_idFormulario'=> (int) Encabezado1::max('Formulario_idFormulario'),
                'Item_idItem'=> $key,
            ]);
        Visita::where('idVisita', Encabezado1::max('Formulario_idFormulario'))
        ->update(['estadoVisita'=>'finalizada']);
        }
        return redirect("visita");
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
