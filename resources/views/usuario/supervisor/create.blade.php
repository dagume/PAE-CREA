@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                        <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="nombre...">
                    </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" required value="{{old('apellidos')}}" class="form-control" placeholder="apellidos...">
                    </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" required value="{{old('usuario')}}" class="form-control" placeholder= "usuario...">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" required value="{{old('email')}}" class="form-control" placeholder="e-mail...">
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="tel" name="password" required value="{{old('password')}}" class="form-control" placeholder="Contraseña...">
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="identificacion">Identificacion</label>
                        <input type="tel" name="identificacion" required value="{{old('identificacion')}}" class="form-control" placeholder="identificacion...">
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="tel" name="celular" value="{{old('celular')}}" class="form-control" placeholder="celular...">
                    </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <button  type="submit" href="cuenta/create" class="btn btn-primary">Guardar</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
