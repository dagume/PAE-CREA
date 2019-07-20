@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
       <div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">
           <h3>Listado de Municipios
                @can('municipio.create')
                <a href="municipio/create">
                    <button class="btn btn-success">Nuevo</button>
                </a>
                @endcan
            </h3>
           @include('institucion.municipio.search')
       </div>
   </div>

   <div class= "row">
       <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class= "table-responsive">
                <table class= "table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>id</th>
                        <th>Municipio</th>
                        @can(['municipio.edit','municipio.destroy'])
                        <th>opciones</th>
                        @endcan
                    </thead>
                    @foreach ($municipios as $mun)
                    <tr>
                        <td>{{ $mun->idMunicipio}}</td>
                        <td>{{ $mun->nombreMunicipio}}</td>
                        <td>
                        @can('municipio.edit')
                        <a href="{{URL::action('MunicipioController@edit',$mun->idMunicipio)}}"><button class="btn btn-info">Editar</button></a>
                        @endcan
                        @can('municipio.destroy')
                        <a href="" data-target="#modal-delete-{{$mun->idMunicipio}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @endcan
                        </td>
                    </tr>
                    @include('institucion.municipio.modal')
                    @endforeach

                </table>
           </div>
           {{$municipios->render()}}
       </div>
   </div>
@endsection
