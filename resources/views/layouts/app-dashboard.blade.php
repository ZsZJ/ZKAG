<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="crsf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZKAG</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/users/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/users/css/sb-admin.css">
</head>
<body>
<div id="app">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html">Gebruikers paneel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="/dashboard">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="/calendar">
                        <i class="fa fa-fw fa-calendar"></i>
                        <span class="nav-link-text">Kalender</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Instellingen</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="{{ route('employees.index') }}">Werknemers</a>
                        </li>
                    </ul>
                </li>
                {{--</li>--}}
                {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">--}}
                    {{--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">--}}
                        {{--<i class="fa fa-fw fa-sitemap"></i>--}}
                        {{--<span class="nav-link-text">Menu Levels</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidenav-second-level collapse" id="collapseMulti">--}}
                        {{--<li>--}}
                            {{--<a href="#">Second Level Item</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Second Level Item</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Second Level Item</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>--}}
                            {{--<ul class="sidenav-third-level collapse" id="collapseMulti2">--}}
                                {{--<li>--}}
                                    {{--<a href="#">Third Level Item</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Third Level Item</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Third Level Item</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Uitloggen</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © ZKAG 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Weet u zeker dat u wilt uitloggen?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik op "uitloggen" om uw huidige sessie the beeindigen.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuleren</button>
                    <a id="logout" class="btn btn-primary" href="#">Uitloggen</a>
                    {{ Form::open(['route' => 'logout', 'method' => 'post', 'id' => 'logoutform']) }}
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap and necessary plugins -->
<script src="/js/app.js"></script>
<script src="/users/js/sb-admin.min.js"></script>
<script>
    let logoutButton = document.getElementById('logout')
    let logoutForm = document.getElementById('logoutform')
    logoutButton.addEventListener('click', function() {
      logoutForm.submit()
    })
</script>
</body>
</html>