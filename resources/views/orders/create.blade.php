@extends('main')

@section('title', 'Dodaj')

@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Dodaj nowe zlecenie</h1>

            {!! Form::open(['url' => 'foo/bar']) !!}
                {{ Form::label('title', 'Title:')  }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}
            {!! Form::close() !!}

        </div>

    </div>

@endsection