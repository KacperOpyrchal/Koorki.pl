@extends('main')

@section('title', 'Dodaj')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection


@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Dodaj nowe zlecenie</h1>

            {!! Form::open(['route' => 'orders.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('title', 'Tytuł:')  }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('body', 'Treść: ') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'require' => '') ) }}

                {{Form::submit('Opublikuj zadanie', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top: 10px' )) }}
            {!! Form::close() !!}

        </div>

    </div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection