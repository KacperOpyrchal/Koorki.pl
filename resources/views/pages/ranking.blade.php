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
    <p class="thick"> Tu będą wisiały rankingi, Kacper porzeba zrobić jakieś podgrupy do tych rankingów, żeby były z poszczególnych
        przedmiotów
        </p>

    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Nick</th>
                <th>Wszystkie Punkty</th>
            </tr>
            <tr>

            </tr>
            <tr>

            </tr>
            <tr>

            </tr>
        </table>
    </div>

    </body>
    </html>


@endsection