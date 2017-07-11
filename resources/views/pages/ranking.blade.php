@extends('main')

@section('title', '| Ranking')

@section('content')
        <!DOCTYPE html>
<html>
<head>
    <style>
        p.normal {
            font-weight: normal;
        }

        p.light {
            font-weight: lighter;
        }

        p.thick {
            font-weight: bold;
        }

        p.thicker {
            font-weight: 900;
        }
    </style>
</head>
<body>




</body>
</html>


<h1>Główny Ranking</h1>
<h6>http://fantasychallenge.euroleague.net/rankings.php wejdz kacper sobie tutaj moje konto pasy Karol97 to login hasło heat o czyms takim mysle o takim panelu </h6>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: center;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #31708f}
        </style>
    </head>
    <body>

    <table class="table table-striped table-inverse">
        <thead>
        <tr>
            <th>#</th>
            <th>Nick</th>
            <th>Ilość Punktów</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>KarolSzawlis</td>
            <td>123</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>KacperOpyrchał</td>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>ZbigniewNajder</td>
            <td>92</td>
        </tr>
        </tbody>
    </table>

    </body>
    </html>


@endsection