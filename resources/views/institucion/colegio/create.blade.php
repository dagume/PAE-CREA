@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Colegio</h3>
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
    {!!Form::open(array('url'=>'institucion/colegio', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true'))!!}
        {{Form::token()}}
         <div class="form-group">
            <label for="nombreColegio">Nombre Colegio</label>
            <input type="text" name="nombreColegio" required value="{{old('nombreColegio')}}" class="form-control" placeholder="nombre...">
        </div>
        <div class="form-group">
            <label>Municipio</label>
            <select name="Municipio_idMunicipio" class="form-control">
                @foreach ($municipios as $mun)
                    <option value="{{$mun->idMunicipio}}">{{$mun->nombreMunicipio}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Asignar Supervisor</label>
            <select name="Persona_idPersona" class="form-control">
                @foreach ($personas as $per)
                    <option value="{{$per->idPersona}}">{{$per->nombre}} {{$per->apellidos}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
        {!!Form::close()!!}

@endsection
