@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Visita {{$visita->idVisita}}</h3>
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
    {!!Form::model($visita,['method'=>'patch','route'=>['visita.update', $visita->idVisita],'files'=>'true'])!!}

    {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <div class = "input-group date" id="divMiCalendario">
                    <div class = "input-group-addon">
                        <i class = "fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control " name="fecha" value="{{$visita->fecha}}"  >
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="Persona_idPersona">Supervisor</label>
                <input type="text" name="Persona_idPersona" value="{{$visita->Persona_idPersona}}" readonly class="form-control" >
                @foreach ($persona as $per)
                <input type="text" name="nombre" value="{{$per->nombre}} {{$per->apellidos}}" disabled class="form-control" >
                @endforeach
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                <div class="form-group">
                    <label for="sede">Sede</label>
                    <select name="Sede_idSede" class="form-control">
                        <option selected disabled>Seleccione la sede</option>
                        @foreach ($sedesApoyo as $sed)
                            @if ($sed->idSede == $visita->Sede_idSede)
                                <option value="{{$sed->idSede}}" selected>{{$sed->nombreSede}}</option>
                            @else
                                <option value="{{$sed->idSede}}">{{$sed->nombreSede}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Tipo de Formulario</label>
                    <select name="Tipo_Formulario_idTipo_Formulario" readonly class="form-control">
                        @foreach ($tipos_formulario as $tip)
                            @if ($tip->idTipo_Formulario == $visita->Tipo_Formulario_idTipo_Formulario)
                                <option value="{{$tip->idTipo_Formulario}}" selected>{{$tip->descripcionFormulario}}</option>
                            @else
                                <option value="{{$tip->idTipo_Formulario}}">{{$tip->descripcionFormulario}}</option>
                            @endif
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
