@extends('main')

@section('title', 'Dodaj')

@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Dodaj nowe zlecenie</h1>

            {!! Form::open(['url' => 'foo/bar']) !!}
                {{ Form::label('title', 'Tytuł:')  }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}

                {{ Form::label('content', 'Treść:') }}
                {{ Form::textarea('content', null, array('class' => 'form-control') ) }}

                {{Form::submit('Opublikuj zadanie', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top: 10px' )) }}
            {!! Form::close() !!}

        </div>

    </div>

@endsection