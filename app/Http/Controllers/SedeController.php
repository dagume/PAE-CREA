<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use paeCrea\Sede;
use Illuminate\Support\Facades\Redirect;
use paeCrea\Http\Requests\SedeFormRequest;
use DB;
 
class SedeController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            global $query;
            $query = trim($request->get('searchText'));
            $sedes = DB::table('sede as s')
            ->join('colegio as c','s.Colegio_idColegio','=','c.idColegio')
            ->join('municipio as m','c.Municipio_idMunicipio','=','m.idMunicipio')
            ->join('persona as p','c.Persona_idPersona','=','p.idPersona')
            ->select('s.idSede', 's.nombreSede', 'c.nombreColegio as colegio', 'm.nombreMunicipio as municipio',
            's.nivelEscolaridad','s.zona','s.direccion','s.telefono','s.correo','p.nombre','p.apellidos')
            ->where([
                ['s.estadoSede','1'],
            ])
            ->where(function ($quer) {
                $quer->where(function ($que) {
                    $que->where(function ($que1) {
                        global $query;
                        $que1->where('s.nombreSede','LIKE','%'.$query.'%')
                        ->orwhere('c.nombreColegio','LIKE','%'.$query.'%');
                    })
                    ->orwhere(function ($que2) {
                        global $query;
                        $que2->where('m.nombreMunicipio','LIKE','%'.$query.'%')
                        ->orwhere('s.nivelEscolaridad','LIKE','%'.$query.'%');
                    });
                })
                ->orwhere(function ($que) {
                    $que->where(function ($que3) {
                        global $query;
                        $que3->where('s.zona','LIKE','%'.$query.'%')
                        ->orwhere(function ($que4) {
                            global $query;
                            $que4->where('p.nombre','LIKE','%'.$query.'%')
                            ->orwhere('p.apellidos','LIKE','%'.$query.'%');
                        });
                    });
                });
            })
            ->orderBy('s.idSede','desc')
            ->paginate(20);
            return view('institucion.sede.index',["sedes"=>$sedes,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $colegios = DB::table('colegio')->where('estadoColegio',"=","1")->get();
        return view("institucion.sede.create",["colegios"=>$colegios]);
    }
    public function store(SedeFormRequest $request)
    {
        $sede = new Sede;
        $sede->nombreSede=$request->get('nombreSede');
        $sede->nivelEscolaridad=$request->get('nivelEscolaridad');
        $sede->zona=$request->get('zona');
        $sede->escolarizada=$request->get('escolarizada');
        $sede->direccion=$request->get('direccion');
        $sede->telefono=$request->get('telefono');
        $sede->correo=$request->get('correo');
        $sede->estadoSede='1';
        $sede->Colegio_idColegio=$request->get('Colegio_idColegio');
        $sede->save();
        return Redirect::to('institucion/sede');
    }
    public function show($idSede)
    {
        return view("institucion.sede.show", ["sede"=>Sede::findOrFail($idSede)]);
    }
    public function edit($idSede)
    {
        $sede = Sede::findOrFail($idSede);
        $colegios = DB::table('colegio')->where('estadoColegio',"=","1")->get();
        return view("institucion.sede.edit", ["sede"=>$sede,"colegios"=>$colegios]);

    }
    public function update(SedeFormRequest $request, $idSede)
    {
        $sede = Sede::findOrFail($idSede);
        $sede->nombreSede=$request->get('nombreSede');
        $sede->nivelEscolaridad=$request->get('nivelEscolaridad');
        $sede->zona=$request->get('zona');
        $sede->escolarizada=$request->get('escolarizada');
        $sede->direccion=$request->get('direccion');
        $sede->telefono=$request->get('telefono');
        $sede->correo=$request->get('correo');
        $sede->Colegio_idColegio=$request->get('Colegio_idColegio');
        $sede->update();
        return Redirect::to('institucion/sede');
    }
    public function destroy($idSede)
    {
        $sede = Sede::findOrFail($idSede);
        $sede->estadoSede='0';
        $sede->update();
        return redirect('institucion/sede');
    }
}
