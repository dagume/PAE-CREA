@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Sede {{$sede->nombreSede}}</h3>
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
    {!!Form::model($sede,['method'=>'patch','route'=>['sede.update', $sede->idSede],'files'=>'true'])!!}
    {{Form::token()}}
    <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nombreColegio">Nombre Sede</label>
                    <input type="text" name="nombreSede" required value="{{$sede->nombreSede}}" class="form-control" placeholder="nombre...">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nivelEscolaridad">Nivel de escolaridad</label>
                    <select name="nivelEscolaridad" class="form-control">
                        <option  disabled>Seleccione nivel de escolaridad</option>
                        @if($sede->nivelEscolaridad == 'primaria')
                            <option selected value="primaria">Primaria</option>
                            <option value="secundaria">Secundaria</option>
                            <option value="ambas">Ambas</option>
                        @else
                            @if($sede->nivelEscolaridad == 'secundaria')
                                <option value="primaria">Primaria</option>
                                <option selected value="secundaria">Secundaria</option>
                                <option value="ambas">Ambas</option>
                            @else
                                <option value="primaria">Primaria</option>
                                <option value="secundaria">Secundaria</option>
                                <option selected value="ambas">Ambas</option>
                            @endif
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="zona">Zona</label>
                    <select name="zona" class="form-control">
                        <option selected disabled>Seleccione la Zona</option>
                        @if($sede->zona == 'urbana')
                            <option selected value="urbana">Urbana</option>
                            <option value="rural">Rural</option>
                        @else
                            <option value="urbana">Urbana</option>
                            <option selected value="rural">Rural</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="escolarizada">Escolarizada</label>
                    <select name="escolarizada" class="form-control">
                        <option selected disabled>Seleccione el estado de la sede</option>
                        @if($sede->escolarizada == 'escolarizada')
                            <option selected value="escolarizada">Escolarizada</option>
                            <option value="desescolarizada">Desescolarizada</option>
                        @else
                            <option value="escolarizada">Escolarizada</option>
                            <option selected value="desescolarizada">Desescolarizada</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" value="{{$sede->direccion}}" class="form-control" placeholder="direccion...">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="tel" name="telefono" value="{{$sede->telefono}}" class="form-control" placeholder="telefono...">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="correo" name="correo" value="{{$sede->correo}}" class="form-control" placeholder="email...">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Colegio</label>
                    <select name="Colegio_idColegio" class="form-control">
                        <option disabled>Seleccione el colegio</option>
                        @foreach ($colegios as $col)
                             @if ($col->idColegio==$sede->Colegio_idColegio)
                                <option value="{{$col->idColegio}}" selected>{{$col->nombreColegio}}</option>
                            @else
                                <option value="{{$col->idColegio}}">{{$col->nombreColegio}}</option>
                            @endif
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
