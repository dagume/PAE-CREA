@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Colegio {{ $colegio->nombreColegio}}</h3>
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
    {!!Form::model($colegio,['method'=>'patch','route'=>['colegio.update', $colegio->idColegio],'files'=>'true'])!!}
    {{Form::token()}}

            <div class="form-group">
                <label for="nombre">Nombre Colegio</label>
            <input type="text" name="nombreColegio" required value="{{$colegio->nombreColegio}}" class="form-control">
            </div>
        <div class="form-group">
            <label>Municipio</label>
            <select name="Municipio_idMunicipio" class="form-control">
                    <option value="" disabled>seleccione el municipio</option>
                @foreach ($municipios as $mun)
                    @if ($mun->idMunicipio==$colegio->Municipio_idMunicipio)
                        <option value="{{$mun->idMunicipio}}" selected>{{$mun->nombreMunicipio}}</option>
                    @else
                    <option value="{{$mun->idMunicipio}}">{{$mun->nombreMunicipio}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Asignar Supervisor</label>
            <select name="Persona_idPersona" class="form-control">
                    <option value="" disabled selected>seleccione el supervisor</option>
                @foreach ($personas as $per)
                    @if ($per->idPersona==$colegio->Persona_idPersona)
                        <option value="{{$per->idPersona}}" selected>{{$per->nombre}} {{$per->apellidos}}</option>
                    @else
                        <option value="{{$per->idPersona}}">{{$per->nombre}} {{$per->apellidos}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    {!!Form::close()!!}
@endsection
