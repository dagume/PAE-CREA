@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar cuenta {{ $usuario->name}}</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            {!!Form::model($usuario,['method'=>'patch','route'=>['cuenta.update', $usuario->id]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="name">Nombre</label>
            <input type="text" name="name" required value="{{$usuario->name}}" class="form-control" placeholder="nombre...">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" required value="{{$usuario->email}}" class="form-control" placeholder="e-mail...">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" name="password" required value="{{$usuario->password}}" class="form-control" placeholder= "contraseña...">
            </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>

                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
