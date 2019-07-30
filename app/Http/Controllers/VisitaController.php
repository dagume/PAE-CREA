<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use paeCrea\Visita;
use Illuminate\Support\Facades\Redirect;
use paeCrea\Http\Requests\VisitaFormRequest;
use DB;


class VisitaController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        global $query;
        if (auth()->user()->hasRole('supervisor')) {
            if ($request) {
                $supervisor = auth()->user()->name;
                $query = trim($request->get('searchText'));
                $visitas = DB::table('visita as v')
                ->join('persona as p','v.Persona_idPersona','=','p.idPersona')
                ->join('tipo_formulario as t','v.Tipo_Formulario_idTipo_Formulario','=','t.idTipo_Formulario')
                ->join('sede as s','v.Sede_idSede','=','s.idSede')
                ->select('v.idVisita', 'v.fecha','p.nombre','p.apellidos', 't.descripcionFormulario', 's.nombreSede as sede', 'v.estadoVisita')
                ->where([
                    ['p.usuario',$supervisor],
                ])
                ->where(function ($quer) {
                    $quer->where(function ($que) {
                        $que->where(function ($que1) {
                            global $query;
                            $que1->where('p.nombre','LIKE','%'.$query.'%')
                            ->orwhere('p.apellidos','LIKE','%'.$query.'%');
                        })
                        ->orwhere(function ($que2) {
                            global $query;
                            $que2->where('s.nombreSede','LIKE','%'.$query.'%')
                            ->orwhere('t.descripcionFormulario','LIKE','%'.$query.'%');
                        });
                    });
                })
                ->orderBy('v.idVisita','desc')
                ->paginate(20);
            }
        }else{
            if ($request) {
                $query = trim($request->get('searchText'));
                $visitas = DB::table('visita as v')
                ->join('persona as p','v.Persona_idPersona','=','p.idPersona')
                ->join('tipo_formulario as t','v.Tipo_Formulario_idTipo_Formulario','=','t.idTipo_Formulario')
                ->join('sede as s','v.Sede_idSede','=','s.idSede')
                ->select('v.idVisita', 'v.fecha','p.nombre','p.apellidos', 't.descripcionFormulario', 's.nombreSede as sede', 'v.estadoVisita')
                ->where([
                    ['v.estadoVisita','finalizada'],
                ])
                ->where(function ($quer) {
                    $quer->where(function ($que) {
                        $que->where(function ($que1) {
                            global $query;
                            $que1->where('p.nombre','LIKE','%'.$query.'%')
                            ->orwhere('p.apellidos','LIKE','%'.$query.'%');
                        })
                        ->orwhere(function ($que2) {
                            global $query;
                            $que2->where('s.nombreSede','LIKE','%'.$query.'%');
                        });
                    });
                })
                ->orderBy('v.idVisita','desc')
                ->paginate(20);
            }
        }
        return view('visita.index',["visitas"=>$visitas,"searchText"=>$query]);
    }
    public function create()
    {
        $persona = DB::table('persona')->where('usuario',"=",auth()->user()->name)->get();
        $tipos_formulario = DB::table('tipo_formulario')->get();
        $sedes = DB::table('sede as s')
        ->join('colegio as c','s.Colegio_idColegio','=','c.idColegio')
        ->join('persona as p','c.Persona_idPersona','=','p.idPersona')
        ->select('s.idSede', 'c.nombreColegio', 'nombreSede','p.usuario','p.apellidos')
        ->where('s.estadosede',"=","1")
        ->where('p.usuario','=',auth()->user()->name)->get();
        $sedesApoyo = DB::table('sede as s')
        ->join('colegio as c','s.Colegio_idColegio','=','c.idColegio')
        ->join('persona as p','c.Persona_idPersona','=','p.idPersona')
        ->select('s.idSede', 'c.nombreColegio', 'nombreSede','p.usuario','p.apellidos')
        ->where('s.estadosede',"=","1")->get();
        return view("visita.create",["persona"=>$persona, "tipos_formulario"=>$tipos_formulario, "sedes"=>$sedes, "sedesApoyo"=>$sedesApoyo]);
    }
    public function store(VisitaFormRequest $request)
    {
        $visita = new Visita;
        $visita->fecha=$request->get('fecha');
        $visita->estadoVisita = 'cancelada';
        $visita->Persona_idPersona=$request->get('Persona_idPersona');
        $visita->Tipo_Formulario_idTipo_Formulario=$request->get('Tipo_Formulario_idTipo_Formulario');
        $visita->Sede_idSede=$request->get('Sede_idSede');
        $visita->save();
        if($request->get('Tipo_Formulario_idTipo_Formulario') == 1){
            return Redirect::to('formulario');
        }
        return Redirect::to('formulario2');

    }
    public function show($idVisita)
    {
        return view("visita.show", ["visita"=>Visita::findOrFail($idVisita)]);
    }
    public function edit($idVisita)
    {
        $visita = Visita::findOrFail($idVisita);
        $persona = DB::table('persona')->where('usuario',"=",auth()->user()->name)->get();
        $tipos_formulario = DB::table('tipo_formulario')->get();
        $sedes = DB::table('sede as s')
        ->join('colegio as c','s.Colegio_idColegio','=','c.idColegio')
        ->join('persona as p','c.Persona_idPersona','=','p.idPersona')
        ->select('s.idSede', 'c.nombreColegio', 'nombreSede','p.usuario','p.apellidos')
        ->where('s.estadosede',"=","1")
        ->where('p.usuario','=',auth()->user()->name)->get();
        $sedesApoyo = DB::table('sede as s')
        ->join('colegio as c','s.Colegio_idColegio','=','c.idColegio')
        ->join('persona as p','c.Persona_idPersona','=','p.idPersona')
        ->select('s.idSede', 'c.nombreColegio', 'nombreSede','p.usuario','p.apellidos')
        ->where('s.estadosede',"=","1")->get();
        return view("visita.edit",["visita"=>$visita,"persona"=>$persona, "tipos_formulario"=>$tipos_formulario, "sedes"=>$sedes, "sedesApoyo"=>$sedesApoyo]);


    }
    public function update(VisitaFormRequest $request, $idVisita)
    {
        $visita = Visita::findOrFail($idVisita);
        $visita->fecha=$request->get('fecha');
        $visita->estadoVisita = 'cancelada';
        $visita->Persona_idPersona=$request->get('Persona_idPersona');
        $visita->Tipo_Formulario_idTipo_Formulario=$request->get('Tipo_Formulario_idTipo_Formulario');
        $visita->Sede_idSede=$request->get('Sede_idSede');
        $visita->update();
        if($request->get('Tipo_Formulario_idTipo_Formulario') == 1){
            return Redirect::to('visita/formulario1');
        }
        return Redirect::to('visita/formulario2');
    }
    public function destroy($idVisita)
    {
        $visita = Visita::findOrFail($idVisita);
        $visita->estadoVisita='cancelada';
        $visita->update();
        return redirect('visita');
    }
}
