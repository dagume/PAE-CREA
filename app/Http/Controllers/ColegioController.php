<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use paeCrea\Colegio;
use Illuminate\Support\Facades\Redirect;
use paeCrea\Http\Requests\ColegioFormRequest;
use DB;

class ColegioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:colegio.create')->only(['create','store']);
        $this->middleware('can:colegio.index')->only('index');
        $this->middleware('can:colegio.edit')->only(['edit','update']);
        $this->middleware('can:colegio.show')->only('show');
        $this->middleware('can:colegio.destroy')->only('destroy');

    }
    public function index(Request $request)
    {
        if ($request) {
            global $query;
            $query = trim($request->get('searchText'));
            $colegios = DB::table('colegio as c')
            ->join('municipio as m','c.Municipio_idMunicipio','=','m.idMunicipio')
            ->join('persona as p','c.Persona_idPersona','=','p.idPersona')
            ->select('c.idColegio', 'c.nombreColegio', 'm.nombreMunicipio as municipio', 'p.nombre','p.apellidos','p.identificacion')
            ->where('c.estadoColegio','=','1')
            ->where(function ($que) {
                global $query;
                $que->where('c.nombreColegio','LIKE','%'.$query.'%')
                ->orwhere('p.nombre','LIKE','%'.$query.'%');
            })
            ->orderBy('c.idColegio','desc')
            ->paginate(20);
            return view('institucion.colegio.index',["colegios"=>$colegios,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $personas = DB::table('persona')->where('estadoPersona',"=","1")->get();
        $municipios = DB::table('municipio')->where('estadoMunicipio',"=","1")->get();
        return view("institucion.colegio.create",["personas"=>$personas,"municipios"=>$municipios]);
    }
    public function store(ColegioFormRequest $request)
    {
        $colegio = new Colegio;
        $colegio->nombreColegio=$request->get('nombreColegio');
        $colegio->estadoColegio='1';
        $colegio->Persona_idPersona=$request->get('Persona_idPersona');
        $colegio->Municipio_idMunicipio=$request->get('Municipio_idMunicipio');
        $colegio->save();
        return Redirect::to('institucion/colegio');
    }
    public function show($idColegio)
    {
        return view("institucion.colegio.show", ["colegio"=>Colegio::findOrFail($idColegio)]);
    }
    public function edit($idColegio)
    {
        $colegio = Colegio::findOrFail($idColegio);
        $personas = DB::table('persona')->where('estadoPersona',"=","1")->get();
        $municipios = DB::table('municipio')->where('estadoMunicipio',"=","1")->get();
        return view("institucion.colegio.edit", ["colegio"=>$colegio,"personas"=>$personas,"municipios"=>$municipios]);

    }
    public function update(ColegioFormRequest $request, $idColegio)
    {
        $colegio = Colegio::findOrFail($idColegio);
        $colegio->nombreColegio=$request->get('nombreColegio');
        $colegio->Persona_idPersona=$request->get('Persona_idPersona');
        $colegio->Municipio_idMunicipio=$request->get('Municipio_idMunicipio');
        $colegio->update();
        return Redirect::to('institucion/colegio');
    }
    public function destroy($idColegio)
    {
        $colegio = Colegio::findOrFail($idColegio);
        $colegio->estadoColegio='0';
        $colegio->update();
        return redirect('institucion/colegio');
    }
}
