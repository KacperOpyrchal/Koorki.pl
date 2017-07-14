@extends('main')



@section('title', '| Strona główna')



@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="jumbotron">

                <h1> Witamy na Koorki.pl! :) </h1>

                <p> Korki koreczki </p>

                <p><a class="btn btn-primary btn-lg" href="#" role="button">Dowiedz się więcej</a></p>

            </div>

        </div>



        <div class="col-md-2">

            <div class="sp2">

            </div>

        </div>

    </div>



    <div class="container">

        <div class="row">

            <div class = "col-md-20 col-md-offset-4">

                <h1>Market</h1>

            </div>





            <div class="panel panel-primary filterable">

                <div class="panel-heading">

                    <h3 class="panel-title">Users</h3>

                    <div class="pull-right">

                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>

                    </div>

                </div>

                <table class="table">

                    <thead>

                    <tr class="filters">

                        <th><input type="text" class="form-control" placeholder="kategoria" disabled></th>

                        <th><input type="text" class="form-control" placeholder="poziom" disabled></th>

                        <th><input type="text" class="form-control" placeholder="nick" disabled></th>

                        <th><input type="text" class="form-control" placeholder="rodzaj" disabled></th>

                        <th><input type="text" class="form-control" placeholder="treść" disabled></th>

                        <th><input type="text" class="form-control" placeholder="kwota" disabled></th>

                        <th><input type="text" class="form-control" placeholder="kolejka" disabled></th>

                        <th><input type="text" class="form-control" placeholder="data ważności" disabled></th>

                        <th><input type="text" class="form-control" placeholder="dodatkowe informacje" disabled></th>





                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td>biologia</td>

                        <td>rozszerzony</td>

                        <td>KarolSzawlis</td>

                        <td>korepetycje</td>

                        <td>---</td>

                        <td>35</td>

                        <td>todo</td>

                        <td>28/10/2017</td>

                        <td>matura</td>

                    </tr>

                    <tr>

                        <td>matematyka</td>

                        <td>rozszerzony</td>

                        <td>KacperOpyrchał</td>

                        <td>projekt/zadanie</td>

                        <td>tu będzię wychodzić guzik z załącznikiem</td>

                        <td>20</td>

                        <td>todo</td>

                        <td>21/08/2017</td>

                        <td>studia</td>

                    </tr>

                    <tr>

                        <td>informatyka</td>

                        <td>rozszerzony</td>

                        <td>ZbigniewNajder</td>

                        <td>projekt/zadanie</td>

                        <td>tu będzie wychodzić guzik z załącznikiem</td>

                        <td>70</td>

                        <td>todo</td>

                        <td>12/09/2017</td>

                        <td>studia</td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection