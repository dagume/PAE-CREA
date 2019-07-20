@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
       <div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">
           <h3>Listado de Supervisores
                @can('supervisor.create')
                <a href="supervisor/create">
                    <button class="btn btn-success">Nuevo</button>
                </a>
                @endcan
            </h3>
           @include('usuario.supervisor.search')
       </div>
   </div>

   <div class= "row">
       <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class= "table-responsive">
                <table class= "table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Identidicacion</th>
                        <th>Celular</th>
                        @can(['supervisor.edit','supervisor.destroy'])
                        <th>opciones</th>
                        @endcan
                    </thead>
                    @foreach ($personas as $per)
                    <tr>
                        <td>{{ $per->idPersona}}</td>
                        <td>{{ $per->nombre}}</td>
                        <td>{{ $per->apellidos}}</td>
                        <td>{{ $per->email}}</td>
                        <td>{{ $per->usuario}}</td>
                        <td>{{ $per->identificacion}}</td>
                        <td>{{ $per->celular}}</td>
                        <td>
                        @can('supervisor.edit')
                        <a href="{{URL::action('PersonaController@edit',$per->idPersona)}}"><button class="btn btn-info">Editar</button></a>
                        @endcan
                        @can('supervisor.destroy')
                        <a href="" data-target="#modal-delete-{{$per->idPersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @endcan
                        </td>
                    </tr>
                    @include('usuario.supervisor.modal')
                    @endforeach

                </table>
           </div>
           {{$personas->render()}}
       </div>
   </div>
@endsection
