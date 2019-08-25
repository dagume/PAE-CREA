<?php

namespace paeCrea\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use paeCrea\User;
use Illuminate\Support\Facades\Redirect;
use paeCrea\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Hash;
use DB;
class UserController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            global $query;
            $query = trim($request->get('searchText'));
            $users = DB::table('users')
            ->where(function ($que) {
                global $query;
            $que->where('name','LIKE','%' .$query.'%')
                ->orwhere('email','LIKE','%'.$query.'%');
            })
            ->orderBy('id','desc')
            ->paginate(20);
            return view('usuario.cuenta.index',["usuarios"=>$users,"searchText"=>$query]);
        }
    }
    //public function create()
    //{
    //    $usuario =  DB::table('persona as p')
    //    ->select('p.nombre', 'p.apellidos', 'p.email','p.identificacion')
    //    ->orderBy('p.idPersona','desc')
    //    ->limit(1)->get();
    //    return view("usuario.cuenta.create", ["usuario"=>$usuario]);
    //}
    public function store(UserFormRequest $request)
    {
        dd($request);
        $usuario = new User();
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $hashed = Hash::make($request->get('password'));
        $usuario->password= $hashed;
        $usuario->save();
        //$user =  DB::table('users')
        //->orderBy('user_id','desc')
        //->limit(1)->get();
        //$user->assignRoles('supervisor');
        return Redirect::to('usuario/supervisor');
    }
    public function show($id)
    {
        return view("usuario.cuenta.show", ["usuario"=>User::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("usuario.cuenta.edit", ["usuario"=>User::findOrFail($id)]);

    }
    public function update(UserFormRequest $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $hashed = $request->get('password');
        $usuario->password= $hashed;
        $usuario->update();
        return Redirect::to('usuario/cuenta');
    }

}
