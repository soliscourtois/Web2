<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <link rel="shortcut icon" sizes="114x114" href="/images/logo.png">
  <title>SIGECIG</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

  <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.5.0/css/font-awesome.min.css')}}">
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Muli">
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('adminlte/bootstrap/css/bootstrap.min.css')}}">
  {{-- <link href="/ea/bootstrap.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="/ea/jquery-ui.css"/>

  <!-- Fonts -->
  {{-- <link href='/ea/font' rel='stylesheet' type='text/css'> --}}
     <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('ionicons-2.0.1/css/ionicons.min.css')}}">



  @stack('styles')

  {{--<link rel="stylesheet" href="{{asset('DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">--}}
  <link rel="stylesheet" href="{{asset('DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css') }}">
  {{--<link rel="stylesheet" href="{{asset('DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}">--}}
  <link rel="stylesheet" href="{{asset('DataTables/Buttons-1.5.4/css/buttons.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{asset('DataTables/Responsive-2.2.2/css/responsive.bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{asset('css/alertify.css') }}">
  <link rel="stylesheet" href="{{asset('css/default.css') }}">

  <link rel="stylesheet" href="{{asset('css-loader-master/dist/css-loader.css') }}">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datepicker/datepicker3.css')}}">



  <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-blue.min.css')}}">

  <!-- JSGRID -->
  <link rel="stylesheet" href="{{asset('css/jsgrid.css')}}">
  <link rel="stylesheet" href="{{asset('css/jsgrid-theme.css')}}">

  <!-- SELECT2 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/css/alt/AdminLTE-select2.min.css')}}">


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <link href="/ea/paceflash.css" rel="stylesheet"/>
    <script src="/ea/pace.min.js"></script>
    <script src="/ea/bootbox.min.js"></script>
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>IG</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIGECIG</b></span>

    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">

    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas">
        <span class="sr-only">Toggle navigation</span>
    </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              {{--<img src="{{ auth()->user()->url }}" class="user-image" alt="User Image">--}}
              <span class="fa fa-user"></span>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> {{ auth()->user()->name }} -- {{ optional(auth()->user()->roles->first())->name }} </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                {{--<img src="{{ auth()->user()->url }}" class="img-circle" alt="User Image">--}}
                <span class="fa fa-user"></span>

                <p>
                  {{ auth()->user()->name }} -- Rol : {{ optional(auth()->user()->roles->first())->name }}
                  <small>Desde {{ auth()->user()->created_at->format('d/M/Y') }}</small>
                </p>
              </li>
              <li class="user-footer">
                <button class="btn btn-default btn-flat btn-block" href="#" data-toggle="modal" data-target="#modalResetPassword">Cambiar Contraseña</button>
                <form  method="POST" action=" {{ route('logout') }} ">
                  {{ csrf_field() }}
                  <button class="btn btn-default btn-flat btn-block">Cerrar sesión</button>
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

      <!-- Sidebar Menu -->

      @include('admin.partials.nav')

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: white;">
    <!-- Content Header (Page header) -->

    @yield('header')

    <!-- Main content -->
    <section class="content">
      @include('admin.timbres.modal-reporte-timbres')

      @if(session()->has('flash'))
        <div class="alert alert-success" id="alert-success">{{ session('flash') }}
          <a href="#" class="close" data-dismiss="alert">&times;</a>
        </div>
      @elseif(session()->has('alerta'))
        <div class="alert alert-warning" id="alert-warning">{{ session('alerta') }}
          <a href="#" class="close" data-dismiss="alert">&times;</a>
        </div>
      @endif

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">Colegio de Ingenieros de Guatemala - CIG</a>.</strong> All rights reserved.
  </footer>
 <!-- /.control-sidebar -->

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('adminlte/bootstrap/js/bootstrap.min.js')}}"></script>


{{--<script src="{{asset('fontawesome/js/fontawesome.min.js') }}"></script>
<script src="{{asset('fontawesome/js/all.min.js') }}"></script>--}}

<script src="{{asset('DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('DataTables/DataTables-1.10.18/js/dataTables.bootstrap.min.js') }}"></script>
{{--<script src="{{asset('DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js') }}"></script>--}}
<script src="{{asset('DataTables/Buttons-1.5.4/js/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('DataTables/Responsive-2.2.2/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('DataTables/Buttons-1.5.4/js/buttons.html5.min.js') }}"></script>
<script src="{{asset('DataTables/JSZip-2.5.0/jszip.min.js') }}"></script>
<script src="{{asset('DataTables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
<script src="{{asset('DataTables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>


<script src="{{asset('js/jquery.validate.js') }}"></script>
<script src="{{asset('js/alertify.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- JSGRID -->
{{--<script src="{{asset('js/jsgrid.js')}}"></script>--}}
<script src="{{asset('js/jsgrid.min.js')}}"></script>

<!--jquery ui touch -->
<script src="{{asset('js/jquery.ui.touch-punch.js')}}"></script>

<!-- SELECT2 -->
<script src="{{asset('adminlte/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{ asset('js/timbres/modal-timbres.js') }}"></script>

<script>
    alertify.defaults = {
        // dialogs defaults
        autoReset:true,
        basic:false,
        closable:true,
        closableByDimmer:true,
        frameless:false,
        maintainFocus:true, // <== global default not per instance, applies to all dialogs
        maximizable:true,
        modal:true,
        movable:true,
        moveBounded:false,
        overflow:true,
        padding: true,
        pinnable:true,
        pinned:true,
        preventBodyShift:false, // <== global default not per instance, applies to all dialogs
        resizable:true,
        startMaximized:false,
        transition:'pulse',

        // notifier defaults
        notifier:{
            // auto-dismiss wait time (in seconds)
            delay:5,
            // default position
            position:'bottom-right',
            // adds a close button to notifier messages
            closeButton: false
        },

        // language resources
        glossary:{
            // dialogs default title
            title:'Aviso!',
            // ok button text
            ok: 'OK',
            // cancel button text
            cancel: 'Cancelar'
        },

        // theme settings
        theme:{
            // class name attached to prompt dialog input textbox.
            input:'ajs-input',
            // class name attached to ok button
            ok:'ajs-ok',
            // class name attached to cancel button
            cancel:'ajs-cancel'
        }
    };
</script>

@include('admin.users.resetPassword')

<script type="text/javascript">
  var APP_URL = {!! json_encode(url('/')) !!}
</script>

@stack('scripts')

<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/app.js')}}"></script>



</body>
</html>
