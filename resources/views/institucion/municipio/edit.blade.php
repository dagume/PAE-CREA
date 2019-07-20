@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Municipio {{ $municipio->nombreMunicipio}}</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            {!!Form::model($municipio,['method'=>'patch','route'=>['municipio.update', $municipio->idMunicipio]])!!}
            {{Form::token()}}
                <div class="form-group">
                    <label for="nombre">Nombre del municipio</label>
                <input type="text" name="nombreMunicipio" class="form-control" value="{{$municipio->nombreMunicipio}}" placeholder="Nombre del municipio...">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>

                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
