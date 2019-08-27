@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Sede</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    {!!Form::open(array('url'=>'institucion/sede', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true'))!!}
        {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombreColegio">Nombre Sede</label>
                <input type="text" name="nombreSede" required value="{{old('nombreSede')}}" class="form-control" placeholder="nombre...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nivelEscolaridad">Nivel de escolaridad</label>
                <select name="nivelEscolaridad" class="form-control">
                    <option  selected disabled>Seleccione nivel de escolaridad</option>
                    <option value="primaria">Primaria</option>
                    <option value="secundaria">Secundaria</option>
                    <option value="ambas">Ambas</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="zona">Zona</label>
                <select name="zona" class="form-control">
                    <option selected disabled>Seleccione la Zona</option>
                    <option value="urbana">Urbana</option>
                    <option value="rural">Rural</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                    <label for="escolarizada">Escolarizada</label>
                    <select name="escolarizada" class="form-control">
                        <option selected disabled>Seleccione el estado de la sede</option>
                        <option value="escolarizada">Escolarizada</option>
                        <option value="desescolarizada">Desescolarizada</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="direccion...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="telefono...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="correo">Email</label>
                <input type="correo" name="correo" value="{{old('correo')}}" class="form-control" placeholder="email...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Colegio</label>
                <select name="Colegio_idColegio" class="form-control">
                    <option selected disabled>Seleccione el colegio</option>
                    @foreach ($colegios as $col)
                        <option value="{{$col->idColegio}}">{{$col->nombreColegio}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
        {!!Form::close()!!}

@endsection
