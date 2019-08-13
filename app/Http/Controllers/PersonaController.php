<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use paeCrea\Persona;
use Illuminate\Support\Facades\Redirect;
use paeCrea\Http\Requests\PersonaFormRequest;
use DB;

class PersonaController extends Controller
{

    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            global $query;
            $query = trim($request->get('searchText'));
            $personas = DB::table('persona') ->where('estadoPersona','=','1')
            ->where('tipoUsuario','=','supervisor')
            ->where(function ($que) {
                global $query;
                $que->where('nombre','LIKE','%' .$query.'%')
                ->orwhere('apellidos','LIKE','%'.$query.'%');
            })
            ->orwhere('identificacion','LIKE','%'.$query.'%')
            ->where('estadoPersona','=','1')
            ->where('tipoUsuario','=','supervisor')
            ->orderBy('idPersona','desc')
            ->paginate(50);
            return view('usuario.supervisor.index',["personas"=>$personas,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("usuario.supervisor.create");
    }
    public function store(PersonaFormRequest $request)
    {
        $persona = new Persona();
        $persona->nombre=$request->get('nombre');
        $persona->apellidos=$request->get('apellidos');
        $persona->email=$request->get('email');
        $persona->usuario=$request->get('usuario');
        $persona->identificacion=$request->get('identificacion');
        $persona->celular=$request->get('celular');
        $persona->estadoPersona = '1';
        $persona->tipoUsuario='supervisor';
        $persona->save();
        return Redirect::to('usuario/supervisor');
    }
    public function show($idPersona)
    {
        return view("usuario.supervisor.show", ["persona"=>Persona::findOrFail($idPersona)]);
    }
    public function edit($idPersona)
    {
        return view("usuario.supervisor.edit", ["persona"=>Persona::findOrFail($idPersona)]);

    }
    public function update(PersonaFormRequest $request, $idPersona)
    {
        $persona = Persona::findOrFail($idPersona);
        $persona->nombre = $request->get('nombre');
        $persona->apellidos=$request->get('apellidos');
        $persona->email=$request->get('email');
        $persona->usuario=$request->get('usuario');
        $persona->identificacion=$request->get('identificacion');
        $persona->celular=$request->get('celular');
        $persona->update();
        return Redirect::to('usuario/supervisor');
    }
    public function destroy($idPersona)
    {
        $persona = Persona::findOrFail($idPersona);
        $persona->estadoPersona='0';
        $persona->update();
        return redirect('usuario/supervisor');
    }
}
