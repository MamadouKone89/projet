<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        @section('styles')
            {!! Html::style('css/HoldOn.min.css') !!}


            <link rel="stylesheet" href="{!! url('/css/adminlte.css') !!}">
            <link rel="stylesheet" href="{!! url('/css/select2.min.css') !!}">

            <link rel="stylesheet" href="{!! url('/css/ionicons.min.css') !!}">
            <link rel="stylesheet" href="{!! url('/css/_all-skins.min.css') !!}">
            <link rel="stylesheet" href="{!! url('/css/sweetalert.min.css') !!}">
            <link rel="stylesheet" href="{!! url('/css/daterangepicker.css') !!}">
            {!! Html::style('plugins/dark-tooltip/darktooltip.css') !!}
            <link rel="stylesheet" href="{!! url('/css/custom.css') !!}">
            <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

         <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">



            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        @show
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('partials.header')
            @include('partials.aside-left')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">@yield('main-title')</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="{!! url('/') !!}">Accueil</a>
                                    </li>
                                    @yield('breadcrumb')
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">

                        @yield('content')

                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer" style="background-color: f73f0d;text-align:center;" >
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">

                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2020 <a href="https://www.justice.gov.bf">DSI Ministère de la Justice</a>.</strong> Tous droits réservés.
            </footer>
        </div>
        @section('scripts')
        <script src="{{ asset('assets/users/user.js') }}"></script>
<script src="{{ asset('assets/roles/role.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
<script src="{{asset('js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-toggle.min.js')}}" type="text/javascript"></script>

            <script>var ajaxFormHandlerSuccessCallback = null;</script>
            <script src="{{asset('js/select2.min.js')}}" type="text/javascript"></script>
            {!! Html::script('plugins/jquery/jquery.min.js') !!}
            {!! Html::script('plugins/jquery-ui/jquery-ui.min.js') !!}
            {!! Html::script('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
            {!! Html::script('js/sweetalert2.all.min.js') !!}
            {!! Html::script('js/HoldOn.min.js') !!}
            {!! Html::script('js/deleteHandler.js') !!}
            {!! Html::script('js/ajaxFormHandler.js') !!}
            {!! Html::script('js/adminlte.min.js') !!}
            {!! Html::script('plugins/dark-tooltip/jquery.darktooltip.js') !!}

        @show()
    </body>
</html>
