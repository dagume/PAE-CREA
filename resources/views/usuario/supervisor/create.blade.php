@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Supervisor</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            {!!Form::open(array('url'=>'usuario/supervisor', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {{Form::token()}}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="nombre...">
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" required value="{{old('apellidos')}}" class="form-control" placeholder="apellidos...">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" required value="{{old('email')}}" class="form-control" placeholder="e-mail...">
                    </div>

                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" required value="{{old('usuario')}}" class="form-control" placeholder= "usuario...">
                    </div>

                    <div class="form-group">
                        <label for="identificacion">Identificacion</label>
                        <input type="tel" name="identificacion" required value="{{old('identificacion')}}" class="form-control" placeholder="identificacion...">
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="tel" name="celular" value="{{old('celular')}}" class="form-control" placeholder="celular...">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>

            {!!Form::close()!!}
        </div>
    </div>
@endsection
