@extends('main')

@section('title', 'Dodaj')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection


@section('content')

    <div class="row" xmlns="http://www.w3.org/1999/html">

        <div class="col-md-8 col-md-offset-2">

            <h1>Dodaj nowe zlecenie</h1>
                <h3>poziom:</h3>
            <select>
                <option value="null"> </option>
                <option value="basic">Szkoła Podstawowa(1-4)</option>
                <option value="semi">Szkoła Podstawowa(5-8)</option>
                <option value="semihard">Liceum</option>
                <option value="studiesA">Studia Licencjackie</option>
                <option values="studiesB">Studia Magisterkie</option>
            </select>

            <h3>kategoria:</h3>
            <select>
                <option value="null"> </option>
            <option value="biology">Biologia</option>
            <option value="chemistry">Chemia</option>
            <option value="physics">Fizyka</option>
            <option value="history">Historia</option>
            <option value="mathematics">Matematyka</option>
                <option value="computer sience">Informatyka</option>
            <option value="english">Język Angielski</option>
                <option value="french">Język Francuski</option>
                <option value="spanish">Język Hiszpański</option>
            <option value="german">Język Niemecki</option>
            <option value="polish">Język Polski</option>
            <option value="russian">Język Rosyjski</option>
                <option value="knowledge about society">Wiedza o Społeczeństwie</option>
                <option value="other">Inne</option>
            </select>

            <h3>rodzaj:</h3>
            <select>
                <option value="nulle"> </option>
                <option value="lessons">Korepetycje</option>
                <option value="projects">Projekt</option>
                <option value="exerices">Zadania</option>
                <option value="others">Inne</option>


            </select>
        </div>
    </div>


    {!! Form::open(['route' => 'orders.store', 'data-parsley-validate' => '']) !!}


    {{ Form::label('title', 'Tytuł:')  }}
    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}

    {{ Form::label('body', 'Treść: ') }}
    {{ Form::textarea('body', null, array('class' => 'form-control', 'require' => '') ) }}


    {{Form::submit('Opublikuj zadanie', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top: 10px' )) }}
    {!! Form::close() !!}

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection