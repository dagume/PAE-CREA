<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PAE - CREA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <!-- Scrip de mostrar y ocultar el div de Tipo de visita -->
    <script type="text/javascript">
        function showContent() {
            element = document.getElementById("asignada");
            element2 = document.getElementById("apoyo");
            check = document.getElementById("tipoVisita");
            if (check.checked) {
                element.style.display='block';
                element2.style.display='none';
            }
            else {
                element.style.display='none';
                element2.style.display='block';
            }
        }
    </script>


  </head>
  <body class="hold-transition skin-blue sidebar-mini" >

    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CR</b>EA</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>PAE - CREA</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <small class="bg-green">En linea</small>
                    {{ Auth::user()->name }}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- Menu Footer-->
                  <li class="list-group-item">
                        <!-- linea 66 donde esta el # { { route('logout') } } -->
                        <a class="btn btn-outline-secondary" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesion') }}
                        </a>
                        <!-- linea 72 donde esta el #  { { route('logout') } } -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Visitas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @can('visita.create')
                    <li><a href="{{url('visita/create')}}"><i class="fa fa-circle-o"></i> Nueva Visita</a></li>
                    @endcan
                    @can('visita.index')
                    <li><a href="{{url('visita')}}"><i class="fa fa-circle-o"></i> visitas</a></li>
                    @endcan
                </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-mortar-board"></i>
                <span>Institución</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                @can('municipio.index')
                <li><a href="{{url('institucion/municipio')}}"><i class="fa fa-circle-o"></i> Municipios</a></li>
                @endcan
                @can('colegio.index')
                <li><a href="{{url('institucion/colegio')}}"><i class="fa fa-circle-o"></i> Colegios</a></li>
                @endcan
                @can('sede.index')
                <li><a href="{{url('institucion/sede')}}"><i class="fa fa-circle-o"></i> Sedes</a></li>
                @endcan
              </ul>
            </li>

            <li class="treeview">
                <a href="#">
                  <i class="fa fa-user"></i>
                  <span>Usuarios</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                @can('supervisor.index')
                  <li><a href="{{url('usuario/supervisor')}}"><i class="fa fa-circle-o"></i>Supervisores</a></li>
                @endcan
                @can('cuenta.index')
                    <li><a href="{{url('usuario/cuenta')}}"><i class="fa fa-circle-o"></i>Cuentas</a></li>
                    @endcan
                </ul>
              </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Exportar</span>
                <small class="label pull-right bg-green">Excel</small>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Sistema de supervision</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                          <div class="row">
                              <div class="col-md-12">
                                      <!--Contenido-->
                                  @yield('contenido')
                                      <!--Fin Contenido-->
                            </div>
                        </div>
                    </div>
                          </div><!-- /.row -->
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </section><!-- /.content -->
          </div><!-- /.content-wrapper -->
          <!--Fin-Contenido-->



      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2019 <a href="https://crea.boyaca.gov.co/">PAE - CREA</a>. </strong> Todos los derechos reservados.
      </footer>


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>

  </body>
</html>
