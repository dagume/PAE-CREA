@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
       <div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">
           <h3>Listado de Visitas
                @can('visita.create')
               <a href="visita/create">
                    <button class="btn btn-success">Nuevo</button>
                </a>
                @endcan
                </h3>
           @include('visita.search')
       </div>
   </div>

   <div class= "row">
       <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class= "table-responsive">
                <table class= "table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Supervisor</th>
                        <th>Sede</th>
                        <th>Formulario</th>
                        <th>Estado</th>
                        @can(['visita.edit','visita.destroy'])
                        <th>Opciones</th>
                        @endcan
                    </thead>
                    @foreach ($visitas as $vis)
                    <tr>
                        <td>{{ $vis->idVisita}}</td>
                        <td>{{ $vis->fecha}}</td>
                        <td>{{ $vis->nombre}} {{ $vis->apellidos}}</td>
                        <td>{{ $vis->sede}}</td>
                        <td>{{ $vis->descripcionFormulario}}</td>
                        <td>{{ $vis->estadoVisita}}</td>
                        <td>
                        @can('visita.edit')
                        <a href="{{URL::action('VisitaController@edit',$vis->idVisita)}}"><button class="btn btn-info">Editar</button></a>
                        @endcan
                        @can('visita.destroy')
                        <a href="" data-target="#modal-delete-{{$vis->idVisita}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @endcan
                        </td>
                    </tr>
                    @include('visita.modal')
                    @endforeach

                </table>
           </div>
           {{$visitas->render()}}
       </div>
   </div>
@endsection
