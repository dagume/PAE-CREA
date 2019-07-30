<?php

namespace paeCrea\Http\Controllers;

use Illuminate\Http\Request;
use paeCrea\Visita;
use Illuminate\Support\Facades\Redirect;

use DB;

class FormularioController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        return view('formulario.index');
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
