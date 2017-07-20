@extends('main')



@section('title', '| Strona główna')

@section('stylesheets')

    <link rel="stylesheet" href="{{asset('css/toWelcome.css')}}" />

@endsection

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

            <div class="col-md-20 col-md-offset-4">

                <h1>Market</h1>

            </div>

            <div class="panel panel-primary filterable table table-responsive">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span
                                    class="glyphicon glyphicon-filter"></span> Filter
                        </button>
                    </div>
                </div>

                <div style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th>nick  </th>
                            <th>poziom   </th>
                            <th>kategoria </th>
                            <th>rodzaj  </th>
                            <th>treść </th>
                            <th>cena</th>
                            <th>kolejka  </th>
                            <th>data ważności  </th>
                            <th>dodatkowe informacje  </th>
                            <th>  zgłoś się </th>
                        </tr>
                        <tr>
                            <td>KarolSzawlis</td>
                            <td>liceum</td>
                            <td>matematyka</td>
                            <td>zadanie</td>
                            <td> <button> pokaż treść </button></td>
                            <td>50</td>
                            <td>todo</td>
                            <td>22/12/2017</td>
                            <td>matura rozszerzona</td>
                            <td> <button> zgłoś się </button></td>
                        </tr>
                        <tr>
                            <td>KacperOpyrchał</td>
                            <td>gimnazjum</td>
                            <td>język angielsi</td>
                            <td>korepetycje</td>
                            <td>------------------</td>
                            <td>40</td>
                            <td>todo</td>
                            <td>01/09/2017</td>
                            <td>odmiana to be</td>
                            <td> <button> zgłoś się </button></td>
                        </tr>
                        <tr>
                            <td>ZbigniewNajder</td>
                            <td>studia licencjackie</td>
                            <td>informatyka</td>
                            <td>projekt</td>
                            <td> <button> pokaż treść </button></td>
                            <td>120</td>
                            <td>todo</td>
                            <td>12/02/2018</td>
                            <td>programowanie w c++</td>
                            <td> <button> zgłoś się </button></td>
                        </tr>
                        <tr>
                            <td>DorotaNowak</td>
                            <td>studia magisterkie</td>
                            <td>matematyka</td>
                            <td>zadanie</td>
                            <td> <button> pokaż treść </button></td>
                            <td>80</td>
                            <td>todo</td>
                            <td>11/07/2020</td>
                            <td>mnożenie względem dodawania</td>
                            <td> <button> zgłoś się </button></td>
                        </tr>


                    </table>
                </div>

@endsection