<!--
  * CoreUI - Open Source Bootstrap Admin Template
  * @version v1.0.1
  * @link http://coreui.io
  * Copyright (c) 2017 creativeLabs Łukasz Holeczek
  * @license MIT
  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ZKAG - Zorgkantoor Alternatieve Geneeswijze</title>
    <link rel="stylesheet" href="/css/premium.css">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">&#9776;</button>
    <h3 class="ml-5 mt-2" href="#"><strong>ZKAG</strong></h3>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">&#9776;</button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="d-md-down-none">Praktijk Ying</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profiel</a>
                <div class="divider"></div>
                <a class="dropdown-item" href="logout"><i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler" type="button">&#9776;</button>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('premium.index') }}"><i class="icon-speedometer"></i> Dashboard </a>
                </li>
                <li class="nav-title">
                    Diensten
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('agenda') }}"><i class="icon-calendar"></i> Agenda </a>
                </li>
                <li class="divider"></li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <div id="app" class="w-100">
        @yield('content')
    </div>

    {{-- Check if there are js vars available --}}
    @if( isset($javaScriptVars) )
    <script> window.javaScriptVars = {!! json_encode($javaScriptVars) !!};</script>
    @endif

    <!-- Bootstrap and necessary plugins -->
    <script src="/js/app.js"></script>
    <script src="/premium/js/app.js"></script>
    <script src="/premium/js/views/charts.js"></script>
    <script src="/datepair/dist/datepair.min.js"></script>
    <script src="/datepair/dist/jquery.datepair.min.js"></script>
    <script src="/premium/js/views/main.js"></script>

    @yield('scripts')

</body>
</html>



</body>
</html>
