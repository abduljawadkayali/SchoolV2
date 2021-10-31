<!DOCTYPE html>
<html  dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@lang("Future Generation Private Schools")</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
@include('include.css')


<!-- bootstrap rtl -->
    <link rel="stylesheet" href="/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/dist/css/custom-style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" >
    <!-- Navbar -->
    @include('sweetalert::alert')
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom" style="margin-left: 0px!important;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/home" class="nav-link">@lang("Home")</a>
            </li>

        </ul>
    <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">



            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                    <a style="text-align:center;" class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>     @lang("logout")
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>





        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style=" position: fixed!important; height: 100%!important;"  >
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <span style="text-align: center!important;" class="brand-text font-weight-light">@lang("Future Generation Private Schools")</span>


        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <img src="{{ URL::to('/') }}/images/{{ auth()->user()->image }}" class="img-circle elevation-2" alt="">


                    <div class="info">
                        <a href="/profile" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item">
                                <a href="/lock" class="nav-link">
                                    <i class="fas fa-key"></i>
                                    <p>@lang("lock")</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/statment" class="nav-link">
                                    <i class="fas fa-newspaper"></i>
                                    <p>@lang("statment")</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/acount" class="nav-link">
                                    <i class="fas fa-dollar-sign"></i>
                                    <p>@lang("acount")</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/region" class="nav-link">
                                    <i class="fas fa-place-of-worship"></i>
                                    <p>@lang("region")</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/disacount" class="nav-link">
                                    <i class="fas fa-person-booth"></i>
                                    <p>@lang("disacount")</p>
                                </a>
                            </li>

                        </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
    </aside>
</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-left: 0px!important;">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('header')</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
        @yield('content')

        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>@lang("Copyright") &copy; 2014-2019 <a href="/">@lang("KAYALI Technology")</a>.</strong>
    @lang("All rights reserved.")
    <div class="float-right d-none d-sm-inline-block">
        <b>@lang("Version")</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- ./wrapper -->
@include('include.script')
</body>
</html>
