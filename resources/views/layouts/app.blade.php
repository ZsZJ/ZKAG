<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ZKAG</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- Top Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white py-3">
    <a class="navbar-brand main" href="#"> <strong> ZKAG I Zorgkantoor <span class="secondary">Alternatieve Geneeswijze</span> </strong> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-uppercase small" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Nieuws</a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('therapeuten') }}">Afspraak maken</a>
            </li>
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--Diensten--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item" href="#">Agenda Beheer</a>--}}
                    {{--<a class="dropdown-item" href="#">Telefoon Dienst</a>--}}
                    {{--<a class="dropdown-item" href="#">Web Beheer</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            @auth
            <li class="nav-item divider">
                <a class="nav-link" href="{{ route('agenda') }}">
                    <span class="fa fa-user"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="fa fa-user"></span>
                    Logout
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endauth
            @guest
            <li class="nav-item divider">
                <a class="nav-link" href="login">
                    <span class="fa fa-user"></span>
                    Login
                </a>
            </li>
            @endguest
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                    {{--<span class="fa fa-search"></span>--}}
                    {{--Zoeken--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</nav>

@yield('content')

<footer class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4><strong>ZKAG</strong></h4>
                <p class="text-muted">
                    De grootste onafhankelijke zorgkantoor voor alternatieve geneeswijze van Nederland
                </p>
            </div>
            <div class="col">
                <h4><strong>Quick Links</strong></h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="btn btn-underline">Changelog</a></li>
                    <li><a href="#" class="btn btn-underline">Updates</a></li>
                    <li><a href="#" class="btn btn-underline">News</a></li>
                    <li><a href="#" class="btn btn-underline">Contact us</a></li>
                    <li><a href="#" class="btn btn-underline">Bootstrap4 Beta</a></li>
                </ul>
            </div>
            <div class="col">
                <h4><strong>Over ons</strong></h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="btn btn-underline">Changelog</a></li>
                    <li><a href="#" class="btn btn-underline">Updates</a></li>
                    <li><a href="#" class="btn btn-underline">News</a></li>
                    <li><a href="#" class="btn btn-underline">Contact us</a></li>
                    <li><a href="#" class="btn btn-underline">Bootstrap4 Beta</a></li>
                </ul>
            </div>
            <div class="col">
                <h4><strong>Nieuwsbrief</strong></h4>
                <form>
                    <div class="form-group">
                        <label for="subscribe">Abonneer op onze nieuwsbrief</label>
                        <input type="email" class="form-control" placeholder="Email" id="subscribe">
                        <button type="submit" class="btn-newsletter"><i class="fa fa-paper-plane-o"></i></button>
                    </div>
                </form>
                <span class="text-muted">© Copyright 2017. ZKAG</span>
            </div>
        </div>
    </div>
</footer>

<script src="../js/app.js"></script>

@yield('scripts')

</body>
</html>