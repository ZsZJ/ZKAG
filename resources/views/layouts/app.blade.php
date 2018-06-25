<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="crsf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="login-status" content="{{ Auth::check() }}">
        <title>ZKAG</title>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>

        <div id="app">

            <navbar-component></navbar-component>

            @yield('content')

            <footer-component></footer-component>

        </div>

        <script src="js/app.js"></script>

    </body>
</html>