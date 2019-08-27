@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Supervisor {{ $persona->nombre}}</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            {!!Form::model($persona,['method'=>'patch','route'=>['supervisor.update', $persona->idPersona]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control" placeholder="nombre...">
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" required value="{{$persona->apellidos}}" class="form-control" placeholder="apellidos...">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" readonly required value="{{$persona->email}}" class="form-control" placeholder="e-mail...">
            </div>

            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" readonly required value="{{$persona->usuario}}" class="form-control" placeholder= "usuario...">
            </div>

            <div class="form-group">
                <label for="identificacion">Identificacion</label>
                <input type="tel" name="identificacion" required value="{{$persona->identificacion}}" class="form-control" placeholder="identificacion...">
            </div>

            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="tel" name="celular" value="{{$persona->celular}}" class="form-control" placeholder="celular...">
            </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
