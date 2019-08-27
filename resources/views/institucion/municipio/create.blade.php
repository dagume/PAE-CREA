@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo municipio</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            {!!Form::open(array('url'=>'institucion/municipio', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {{Form::token()}}
                <div class="form-group">
                    <label for="nombre">Nombre del municipio</label>
                    <input type="text" name="nombreMunicipio" class="form-control" placeholder="Nombre...">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
