@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
            <div class="col-md-12">
                    <div class="box box-success box-solid ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Acta de visita programa CREA: Verificacion racion preparada en sitio tipo almuerzo y complemento AM/PM </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        {!!Form::open(array('action' => array('Encabezado1Controller@store'), 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true'))!!}
                        {{Form::token()}}
                        <div class="row">
                        @foreach ($formulario as $for)
                        <div class="box-body">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-6">
                                <div class="form-group">
                                    <label >Visita</label>
                                        <input type="radio" name="Visita"  checked value="1" > No 1
                                        <input type="radio" name="Visita"  value="2" > No 2
                                        <input type="radio" name="Visita"  value="3" > No 3
                                        <input type="radio" name="Visita"  value="4" > No 4

                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-6">
                                <div class="form-group">
                                    <label>Tipo de visita</label><br>

                                        <input type="radio" name="tipoVisita"  checked value="asignada"> Asignada
                                        <input type="radio" name="tipoVisita"  value="apoyo"> Apoyo

                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label >Fecha</label>
                                    <div class = "input-group date" id="divMiCalendario">
                                        <div class = "input-group-addon">
                                            <i class = "fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control " name="fecha" readonly value="{{$for->fecha}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Supervisor</label>
                                    <input type="text" name="supervisor" class="form-control" readonly value="{{$for->nombre}} {{$for->apellidos}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Municipio</label>
                                    <input type="text" name="supervisor" class="form-control" readonly value="{{$for->municipio}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Institucion</label>
                                    <input type="text" name="supervisor" class="form-control" readonly value="{{$for->colegio}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Sede</label>
                                    <input type="text" name="supervisor" class="form-control" readonly value="{{$for->sede}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Nivel de escolaridad</label>
                                    <input type="text" name="supervisor" class="form-control" readonly value="{{$for->nivelEscolaridad}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Zona</label>
                                    <input type="text" name="supervisor" class="form-control" readonly value="{{$for->zona}}">
                                </div>
                            </div>
                            <div>

                            </div>
                            <div class="col-xs-6">
                                    <div class="col-xs-12">
                                            <label >TITULARES  DE  DERECHO  SIMAT    </label>
                                            </div>
                                            <div class="row">

                                                <div class="col-xs-12">
                                                    <label >4 - 8 años</label>
                                                    <input type="text" name="simat4" class="form-control" >
                                                </div>
                                                <div class="col-xs-12">
                                                    <label >9 -13 años</label>
                                                    <input type="text" name="simat9" class="form-control" >
                                                </div>
                                                <div class="col-xs-12">
                                                    <label >14-17 años</label>
                                                    <input type="text" name="simat14" class="form-control" >
                                                </div>
                                            </div>
                            </div>
                            <div class="col-xs-6">
                                    <div class="col-xs-12">
                                            <label >TITULARES DE DERECHO ATENDIDOS</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label >4 - 8 años</label>
                                                <input type="text" name="atendidos4" class="form-control" >
                                            </div>
                                            <div class="col-xs-12">
                                                <label >9 -13 años</label>
                                                <input type="text" name="atendidos9" class="form-control" >
                                            </div>
                                            <div class="col-xs-12">
                                                <label >14-17 años</label>
                                                <input type="text" name="atendidos14" class="form-control" >
                                            </div>
                                        </div>
                            </div>

                            <div class="col-xs-12">
                                    <label >ULTIMA VISITA AUTORIDAD SANITARIA</label>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label >Concepto emitido</label>
                                        <br>
                                        <input type="radio" name="Visitasani" checked value="Favorable" > Favorable
                                        <br>
                                        <input type="radio" name="Visitasani" value="Favorable con requerimientos" > Favorable con requerimientos
                                        <br>
                                        <input type="radio" name="Visitasani" value="Desfavorable" > Desfavorable
                                        <br>
                                        <input type="radio" name="Visitasani" value="Sin soporte" > Sin soporte
                                        <br>
                                        <input type="radio" name="Visitasani" value="Sin visita" > Sin visita

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Fecha visita sanitaria</label>
                                    <div class = "input-group date" id="divMiCalendario">
                                        <div class = "input-group-addon">
                                            <i class = "fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control " name="fechaVisita">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Porcentaje</label>
                                    <input type="number" name="porcentaje" class="form-control">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12">
                            <br>
                            <button id="continuar" class="btn btn-block btn-success" >Continuar</button>

                        </div>
                        </div>
                        {!!Form::close()!!}
                    </div>
                </div>
      <!--Fin-Contenido-->
@endsection
