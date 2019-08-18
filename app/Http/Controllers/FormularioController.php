<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use paeCrea\Encabezado1;
use paeCrea\Formulario;

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
        $encabezado1 = new Encabezado1;
        $encabezado1->visitaNum = $request->get('Visita');
        $encabezado1->tipoVisita = $request->get('tipoVisita');
        $encabezado1->simatCuatro = $request->get('simat4');
        $encabezado1->simatNueve = $request->get('simat9');
        $encabezado1->simatCatorce = $request->get('simat14');
        $encabezado1->atendidosCuatro = $request->get('atendidos4');
        $encabezado1->atendidosNueve = $request->get('atendidos9');
        $encabezado1->atendidosCatorce = $request->get('atendidos14');
        $encabezado1->concepVisitaSanitaria = $request->get('Visitasani');
        $encabezado1->fechaVisitaSanitaria = $request->get('fechaVisita');
        $encabezado1->porcentajeVisitaSanitaria = $request->get('porcentaje');
        $encabezado1->Formulario_idFormulario = (int) Formulario::max('idFormulario');
        $encabezado1->save();
        return Redirect::to('formulario/create');
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
