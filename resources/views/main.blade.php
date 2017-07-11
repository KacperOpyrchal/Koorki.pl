<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koorki @yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('stylesheets')

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Koorki.pl</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Strona główna <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Kategorie</a></li>
                <li><a href="/ranking">Rankingi</a></li>
                <li><a href="/HowItWorks">Jak działa?</a></li>
                <li><a href="/contact">Kontakt</a></li>
                <li><a href="/about">O nas</a></li>

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Szukaj</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/register">Załóż konto</a></li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Konto <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Moje zlecenia</a></li>
                        <li><a href="#">Portfel</a></li>
                        <li><a href="#">O mnie</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/login">Zaloguj się</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="cotainer">

    @yield('content')

    <hr>
    <p class="text-center">Wszystkie prawa zastrzeżone </p>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

@yield('scripts')

</body>
</html>