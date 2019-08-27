@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
       <div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">
           <h3>Listado de cuentas
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
                    </thead>
                    @foreach ($usuarios as $usu)
                    <tr>
                        <td>{{ $usu->name}}</td>
                        <td>{{ $usu->email}}</td>
                        <td>{{ $usu->password}}</td>
                        <td>
                        </td>
                    </tr>
                    @endforeach

                </table>
           </div>
           {{$usuarios->render()}}
       </div>
   </div>
@endsection
