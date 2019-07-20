@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
       <div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">
           <h3>Listado de cuentas
                @can('cuenta.create')
                <a href="cuenta/create">
                    <button class="btn btn-success">Nuevo</button>
                </a>
                @endcan
            </h3>
           @include('usuario.cuenta.search')
       </div>
   </div>

   <div class= "row">
       <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class= "table-responsive">
                <table class= "table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        @can(['cuenta.edit','cuenta.destroy'])
                        <th>opciones</th>
                        @endcan
                    </thead>
                    @foreach ($usuarios as $usu)
                    <tr>
                        <td>{{ $usu->name}}</td>
                        <td>{{ $usu->email}}</td>
                        <td>{{ $usu->password}}</td>
                        <td>
                        @can('cuenta.edit')
                        <a href="{{URL::action('UserController@edit',$usu->id)}}"><button class="btn btn-info">Editar</button></a>
                        @endcan
                        </td>
                    </tr>

                    @endforeach

                </table>
           </div>
           {{$usuarios->render()}}
       </div>
   </div>
@endsection
