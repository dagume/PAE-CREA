<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use paeCrea\Municipio;
use Illuminate\Support\Facades\Redirect;
use paeCrea\Http\Requests\MunicipioFormRequest;
use DB;

class MunicipioController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $municipios = DB::table('municipio')->where('nombreMunicipio','LIKE','%'.$query.'%')
            ->where('estadoMunicipio','=','1')
            ->orderBy('idMunicipio','desc')
            ->paginate(7);
            return view('institucion.municipio.index',["municipios"=>$municipios,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("institucion.municipio.create");
    }
    public function store(MunicipioFormRequest $request)
    {
        $municipio = new Municipio;
        $municipio->nombreMunicipio=$request->get('nombreMunicipio');
        $municipio->estadoMunicipio = '1';
        $municipio->save();
        return Redirect::to('institucion/municipio');
    }
    public function show($idMunicipio)
    {
        return view("institucion.municipio.show", ["municipio"=>Municipio::findOrFail($idMunicipio)]);
    }
    public function edit($idMunicipio)
    {
        return view("institucion.municipio.edit", ["municipio"=>Municipio::findOrFail($idMunicipio)]);

    }
    public function update(MunicipioFormRequest $request, $idMunicipio)
    {
        $municipio = Municipio::findOrFail($idMunicipio);
        $municipio->nombreMunicipio = $request->get('nombreMunicipio');
        $municipio->update();
        return Redirect::to('institucion/municipio');
    }
    public function destroy($idMunicipio)
    {
        $municipio = Municipio::findOrFail($idMunicipio);
        $municipio->estadoMunicipio='0';
        $municipio->update();
        return redirect('institucion/municipio');
    }
}
