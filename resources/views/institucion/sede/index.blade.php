@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
       <div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">
           <h3>Listado de sedes
                @can('sede.create')
               <a href="sede/create">
                    <button class="btn btn-success">Nuevo</button>
                </a>
                @endcan
                </h3>
           @include('institucion.sede.search')
       </div>
   </div>

   <div class= "row">
       <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class= "table-responsive">
                <table class= "table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Sede</th>
                        <th>Colegio</th>
                        <th>Municipio</th>
                        <th>Nivel de escolaridad</th>
                        <th>Zona</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Supervisor asignado</th>
                        @can(['sede.edit','sede.destroy'])
                        <th>Opciones</th>
                        @endcan
                    </thead>
                    @foreach ($sedes as $sed)
                    <tr>
                        <td>{{ $sed->idSede}}</td>
                        <td>{{ $sed->nombreSede}}</td>
                        <td>{{ $sed->colegio}}</td>
                        <td>{{ $sed->municipio}}</td>
                        <td>{{ $sed->nivelEscolaridad}}</td>
                        <td>{{ $sed->zona}}</td>
                        <td>{{ $sed->direccion}}</td>
                        <td>{{ $sed->telefono}}</td>
                        <td>{{ $sed->correo}}</td>
                        <td>{{ $sed->nombre}} {{ $sed->apellidos}}</td>
                        <td>

                        @can('sede.edit')
                        <a href="{{URL::action('SedeController@edit',$sed->idSede)}}"><button class="btn btn-info">Editar</button></a>
                        @endcan
                        @can('sede.destroy')
                        <a href="" data-target="#modal-delete-{{$sed->idSede}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @endcan
                        </td>
                    </tr>
                    @include('institucion.sede.modal')
                    @endforeach

                </table>
           </div>
           {{$sedes->render()}}
       </div>
   </div>
@endsection
