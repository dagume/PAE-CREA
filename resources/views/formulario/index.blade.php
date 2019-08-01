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
                        <div class="box-body">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Visita</label>
                                    <form action="">
                                            <input type="radio" name="Visita" id="Visita" checked value="1" > No 1
                                            <input type="radio" name="Visita" id="Visita" value="2" > No 2
                                            <input type="radio" name="Visita" id="Visita" value="3" > No 3
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
                                        <input type="date" class="form-control " name="fecha" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Supervisor</label>
                                    <input type="text" name="supervisor" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Municipio</label>
                                    <input type="text" name="supervisor" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Institucion educativa</label>
                                    <input type="text" name="supervisor" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Sede</label>
                                    <input type="text" name="supervisor" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Nivel de escolaridad</label>
                                    <input type="text" name="supervisor" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Zona</label>
                                    <input type="text" name="supervisor" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12">
                            <label >TITULARES DE DERECHO SIMAT</label>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <label >4 - 8 años</label>
                                    <input type="text" name="supervisor" class="form-control" >
                                </div>
                                <div class="col-xs-4">
                                    <label >9 - 13 años</label>
                                    <input type="text" name="supervisor" class="form-control" >
                                </div>
                                <div class="col-xs-5">
                                    <label >14 - 17</label>
                                    <input type="text" name="supervisor" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label >TITULARES DE DERECHO ATENDIDOS</label>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <label >4 - 8 años</label>
                                    <input type="text" name="supervisor" class="form-control" >
                                </div>
                                <div class="col-xs-4">
                                    <label >9 - 13 años</label>
                                    <input type="text" name="supervisor" class="form-control" >
                                </div>
                                <div class="col-xs-5">
                                    <label >14 - 17</label>
                                    <input type="text" name="supervisor" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-12">
                                    <label >ULTIMA VISITA AUTORIDAD SANITARIA</label>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label >Concepto emitido</label>
                                    <form action="">
                                        <input type="radio" name="Visita" id="Visita" checked value="favorable" > Favorable
                                        <input type="radio" name="Visita" id="Visita" value="favorable con requerimientos" > Favorable con requerimientos
                                        <input type="radio" name="Visita" id="Visita" value="desfavorable" > Desfavorable
                                        <input type="radio" name="Visita" id="Visita" value="sin soporte" > Sin soporte
                                        <input type="radio" name="Visita" id="Visita" value="sin visita" > Sin visita
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Porcentaje</label>
                                    <input type="number" name="porcentaje" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="col-md-6">
            @foreach ($collection as $item)
                <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Formulario</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-6">
                @foreach ($collection as $item)
                <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Formulario</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                    <div class="form-group">
                        <label >Color</label>
                        <input type="text" name="colo" class="form-control" placeholder="color...">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
      <!--Fin-Contenido-->
@endsection
