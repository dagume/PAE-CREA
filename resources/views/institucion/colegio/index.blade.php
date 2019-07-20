@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
       <div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">
           <h3>Listado de Colegios
                @can('colegio.create')
                <a href="colegio/create">
                    <button class="btn btn-success">Nuevo</button>
                </a>
                @endcan
            </h3>
           @include('institucion.colegio.search')
       </div>
   </div>

   <div class= "row">
       <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class= "table-responsive">
                <table class= "table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Colegio</th>
                        <th>Municipio</th>
                        <th>Supervisor asignado</th>
                        <th>Identificacion</th>
                        @can(['colegio.edit','colegio.destroy'])
                        <th>Opciones</th>
                        @endcan
                    </thead>
                    @foreach ($colegios as $col)
                    <tr>
                        <td>{{ $col->idColegio}}</td>
                        <td>{{ $col->nombreColegio}}</td>
                        <td>{{ $col->municipio}}</td>
                        <td>{{ $col->nombre}} {{ $col->apellidos}}</td>
                        <td>{{ $col->identificacion}}</td>
                        <td>
                        @can('colegio.edit')
                        <a href="{{URL::action('ColegioController@edit',$col->idColegio)}}"><button class="btn btn-info">Editar</button></a>
                        @endcan
                        @can('colegio.destroy')
                        <a href="" data-target="#modal-delete-{{$col->idColegio}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @endcan
                        </td>
                    </tr>
                    @include('institucion.colegio.modal')
                    @endforeach

                </table>
           </div>
           {{$colegios->render()}}
       </div>
   </div>
@endsection
