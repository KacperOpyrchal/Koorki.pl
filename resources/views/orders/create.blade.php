@extends('main')

@section('title', 'Dodaj')

@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Dodaj nowe zlecenie</h1>

            {!! Form::open(['route' => 'orders.store']) !!}
                {{ Form::label('title', 'Tytuł:')  }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}

                {{ Form::label('body', 'Treść: ') }}
                {{ Form::textarea('body', null, array('class' => 'form-control') ) }}

                {{Form::submit('Opublikuj zadanie', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top: 10px' )) }}
            {!! Form::close() !!}

        </div>

    </div>

@endsection