@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Visita</h3>
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
    {!!Form::open(array('url'=>'visita', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true'))!!}
        {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Tipo de visita</label><br>
                <form action="">
                    <input type="radio" name="tipoVisita" id="tipoVisita" checked value="asignada" onchange="javascript:showContent()"> Asignada
                    <input type="radio" name="tipoVisita" id="tipoVisita" value="apoyo" onchange="javascript:showContent()"> Apoyo
                </form>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <div class = "input-group date" id="divMiCalendario">
                    <div class = "input-group-addon">
                        <i class = "fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control " name="fecha" required value="{{old('fecha')}}"  >
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="Persona_idPersona">Supervisor</label>
            @foreach ($persona as $per)
            <input type="text" name="Persona_idPersona" value="{{$per->idPersona}}" readonly class="form-control" >
            <input type="text" name="nombre" value="{{$per->nombre}} {{$per->apellidos}}" disabled class="form-control" >
            @endforeach
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="apoyo" style="display: none;">
            <div class="form-group">
                <label for="sede">Sede de apoyo</label>
                <select name="Sede_idSede" class="form-control">
                    <option selected disabled>Seleccione la sede de apoyo</option>
                    @foreach ($sedesApoyo as $sedApo)
                    <option value="{{$sedApo->idSede}}">{{$sedApo->nombreSede}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="asignada">
                <div class="form-group">
                    <label for="sede">Sede</label>
                    <select name="Sede_idSede" class="form-control">
                        <option selected disabled>Seleccione la sede</option>
                        @foreach ($sedes as $sed)
                        <option value="{{$sed->idSede}}">{{$sed->nombreSede}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Tipo de Formulario</label>
                    <select name="Tipo_Formulario_idTipo_Formulario" class="form-control">
                        <option selected disabled>Seleccione el tipo de formulario</option>
                        @foreach ($tipos_formulario as $tip)
                            <option value="{{$tip->idTipo_Formulario}}">{{$tip->descripcionFormulario}}</option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
        {!!Form::close()!!}

@endsection
