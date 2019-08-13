@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
            <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Acta de visita programa CREA: Verificacion racion preparada en sitio tipo almuerzo y complemento AM/PM </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        {!!Form::open(array('action' => array('FormularioController@store'), 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true'))!!}
                        {{Form::token()}}
                        @foreach ($formulario as $for)
                        <div class="box-body">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Visita</label>
                                    <form action="">
                                            <input type="radio" name="Visita" id="Visita" checked value="1" > No 1
                                            <input type="radio" name="Visita" id="Visita" value="2" > No 2
                                            <input type="radio" name="Visita" id="Visita" value="3" > No 3
                                            <input type="radio" name="Visita" id="Visita" value="4" > No 4
                                        </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
                                                    <input type="text" name="supervisor" class="form-control" >
                                                </div>
                                                <div class="col-xs-12">
                                                    <label >9 -13 años</label>
                                                    <input type="text" name="supervisor" class="form-control" >
                                                </div>
                                                <div class="col-xs-12">
                                                    <label >14-17 años</label>
                                                    <input type="text" name="supervisor" class="form-control" >
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
                                                <input type="text" name="supervisor" class="form-control" >
                                            </div>
                                            <div class="col-xs-12">
                                                <label >9 -13 años</label>
                                                <input type="text" name="supervisor" class="form-control" >
                                            </div>
                                            <div class="col-xs-12">
                                                <label >14-17 años</label>
                                                <input type="text" name="supervisor" class="form-control" >
                                            </div>
                                        </div>
                            </div>

                            <div class="col-xs-12">
                                    <label >ULTIMA VISITA AUTORIDAD SANITARIA</label>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label >Concepto emitido</label>
                                    <form action="">

                                        <input type="radio" name="Visita" id="Visita" checked value="favorable" > Favorable
                                        <br>
                                        <input type="radio" name="Visita" id="Visita" value="favorable con requerimientos" > Favorable con requerimientos
                                        <br>
                                        <input type="radio" name="Visita" id="Visita" value="desfavorable" > Desfavorable
                                        <br>
                                        <input type="radio" name="Visita" id="Visita" value="sin soporte" > Sin soporte
                                        <br>
                                        <input type="radio" name="Visita" id="Visita" value="sin visita" > Sin visita
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="form-group">
                                    <label >Fecha visita sanitaria</label>
                                    <div class = "input-group date" id="divMiCalendario">
                                        <div class = "input-group-addon">
                                            <i class = "fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control " name="fecha">
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
                            <button type="submit" class="btn btn-block btn-success">Continuar</button>

                        </div>
                        {!!Form::close()!!}
                    </div>
                </div>
        @foreach ($criterios as $crit)

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <br>
                <br>
                <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$crit->descripcionCritEva}}</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @foreach ($items as $ite)
                        @if ($crit->idCriterio_Evaluacion == $ite->Criterio_Evaluacion_idCriterio_Evaluacion )
                            <label >{{$ite->itemTexto}}</label>
                            <form action="">
                                <input type="radio" name="evaluacion" id="evaluacion" checked value="Cumple" > Cumple
                                <input type="radio" name="evaluacion" id="evaluacion" value="No cumple" > No cumple
                                <input type="radio" name="evaluacion" id="evaluacion" value="No observado" > No observado
                                <input type="radio" name="evaluacion" id="evaluacion" value="No aplica" > No aplica
                            </form>
                            <div class="col-md-12">
                                <label >Observaciones</label>
                                <textarea class="form-control" name="observacion" rows="2" placeholder="Observacion ..." ></textarea>
                            </div>
                            <br>
                        @endif
                    @endforeach
                </div>
                @if ($crit->idCriterio_Evaluacion == 5)
                    <div class= "table-responsive">
                            <table class= "table-bordered table-condensed">
                                <thead>
                                    <th>1-75 Raciones</th>
                                    <th>76-150 Raciones</th>
                                    <th>151-300 Raciones</th>
                                    <th>301-500 Raciones</th>
                                    <th>501-750 Raciones</th>
                                    <th>751-1000 Raciones</th>
                                    <th>1001-1500 Raciones</th>
                                </thead>
                                <tr>
                                    <td>1 manipuladora</td>
                                    <td>2 manipuladoras</td>
                                    <td>3 manipuladoras</td>
                                    <td>4 manipuladoras</td>
                                    <td>5 manipuladoras</td>
                                    <td>6 manipuladoras</td>
                                    <td>7 manipuladoras</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="manipuladoras" id="manipuladoras" checked value="1"></td>
                                    <td><input type="radio" name="manipuladoras" id="manipuladoras" checked value="2"></td>
                                    <td><input type="radio" name="manipuladoras" id="manipuladoras" checked value="3"></td>
                                    <td><input type="radio" name="manipuladoras" id="manipuladoras" checked value="4"></td>
                                    <td><input type="radio" name="manipuladoras" id="manipuladoras" checked value="5"></td>
                                    <td><input type="radio" name="manipuladoras" id="manipuladoras" checked value="6"></td>
                                    <td><input type="radio" name="manipuladoras" id="manipuladoras" checked value="7"></td>
                                </tr>
                            </table>
                       </div>
                    @endif
            </div>
        </div>
        @endforeach
    </div>
      <!--Fin-Contenido-->
@endsection
