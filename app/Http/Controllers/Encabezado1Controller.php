<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use paeCrea\Encabezado1;
use paeCrea\Formulario;
use paeCrea\Criterio_evaluacion;
use paeCrea\Item;
use paeCrea\Http\Requests\Encabezado1FormRequest;

class Encabezado1Controller extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            $formulario =  DB::table('formulario as f')
                ->join('visita as v','f.Visita_idVisita','=','v.idVisita')
                ->join('persona as p','v.Persona_idPersona','=','p.idPersona')
                ->join('sede as s','v.Sede_idSede','=','s.idSede')
                ->join('Colegio as c','s.Colegio_idColegio','=','c.idColegio')
                ->join('Municipio as m','c.Municipio_idMunicipio','=','m.idMunicipio')
                ->select('v.fecha', 'p.nombre', 'p.apellidos', 's.nombreSede as sede', 'c.nombreColegio as colegio', 'm.nombreMunicipio as municipio', 's.zona', 's.nivelEscolaridad')
                ->orderBy('f.idFormulario','desc')
                ->limit(1)->get();
            return view('encabezado1.index',["formulario"=>$formulario]);
        }
    }
    public function create()
    {

    }
    public function store(Encabezado1FormRequest $request)
    {
        $encabezado1 = new Encabezado1;
        $encabezado1->visitaNum = $request->get('Visita');
        $encabezado1->tipoVisita = $request->get('tipoVisita');
        $encabezado1->simatCuatro = $request->get('simatCuatro');
        $encabezado1->simatNueve = $request->get('simatNueve');
        $encabezado1->simatCatorce = $request->get('simatCatorce');
        $encabezado1->atendidosCuatro = $request->get('atendidosCuatro');
        $encabezado1->atendidosNueve = $request->get('atendidosNueve');
        $encabezado1->atendidosCatorce = $request->get('atendidosCatorce');
        $encabezado1->concepVisitaSanitaria = $request->get('concepVisitaSanitaria');
        $encabezado1->fechaVisitaSanitaria = $request->get('fechaVisitaSanitaria');
        $encabezado1->porcentajeVisitaSanitaria = $request->get('porcentajeVisitaSanitaria');
        $encabezado1->Formulario_idFormulario = (int) Formulario::max('idFormulario');
        $encabezado1->save();
        if ($request) {
            $criterios = Criterio_evaluacion::
            select('idCriterio_Evaluacion', 'descripcionCritEva', 'estadoCriterio','Tipo_Formulario_idTipo_Formulario')
            ->where('estadoCriterio','=','1')->get();
            $items = Item::
            select('idItem','itemTexto', 'estadoItem','Criterio_Evaluacion_idCriterio_Evaluacion')
            ->where('estadoItem','=','1')->get();
            $formulario =  DB::table('formulario as f')
                ->join('visita as v','f.Visita_idVisita','=','v.idVisita')
                ->join('persona as p','v.Persona_idPersona','=','p.idPersona')
                ->join('sede as s','v.Sede_idSede','=','s.idSede')
                ->join('Colegio as c','s.Colegio_idColegio','=','c.idColegio')
                ->join('Municipio as m','c.Municipio_idMunicipio','=','m.idMunicipio')
                ->select('v.fecha', 'p.nombre', 'p.apellidos', 's.nombreSede as sede', 'c.nombreColegio as colegio', 'm.nombreMunicipio as municipio', 's.zona', 's.nivelEscolaridad')
                ->orderBy('f.idFormulario','desc')
                ->limit(1)->get();
            $encabezado =  DB::table('encabezado1 as e')
                ->select('e.visitaNum', 'e.tipoVisita', 'e.simatCuatro', 'e.simatNueve', 'e.simatCatorce', 'e.atendidosCuatro', 'e.atendidosNueve', 'e.atendidosCatorce','e.concepVisitaSanitaria','e.fechaVisitaSanitaria','e.porcentajeVisitaSanitaria')
                ->orderBy('e.idEncabezado1','desc')
                ->limit(1)->get();
            //$maxItem = (int) Item::max('idItem');
            //Hacer consulta de encabezado
            return view('formulario.index',["criterios"=>$criterios, "items"=>$items, "formulario"=>$formulario, "encabezado"=>$encabezado]);
        }
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
