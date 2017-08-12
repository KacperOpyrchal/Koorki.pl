@extends('main')

@section('title', 'Dodaj')

@section('stylesheets')
    {!! Html::style('css/orders_create.css') !!}
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="container">
        {!! Form::open(['route' => 'orders.store','files' => true, 'data-parsley-validate' => '']) !!}

        {{ Form::label('cateogry','Kategoria: ') }}

        {{ Form::select('category',
        ['Biologia' => 'Biologia',
        'Chemia' => 'Chemia',
        'Fizyka' => 'Chemia',
        'Historia' => 'Historia',
        'Matematyka' => 'Matematyka',
        'Informatyka' => 'Informatyka',
        'Język Angielski' => 'Język Angielski',
        'Język Francuski' => 'Język Francuski',
        'Język Hiszpański' => 'Język Hiszpański',
        'Język Niemiecki' => 'Język Niemiecki',
        'Język Polski' => 'Język Polski',
        'Inne' => 'Inne'], null, array('class' => 'form-control','required' => '')) }}

        {{ Form::label('school','Poziom: ')}}

        {{ Form::select('school',
        ['Szkoła Podstawowa(1-4)' => 'Szkoła Podstawowa(1-4)',
        'Szkoła Podstawowa(5-8)' => 'Szkoła Podstawowa(5-8)',
        'Liceum' => 'Liceum',
        'Studia Licencjackie' => 'Studia Licencjackie',
        'Studia Magisterkie' => 'Studia Magisterkie'], null, array('class' => 'form-control','required' => '')) }}

        {{ Form::label('type', 'Rodzaj: ') }}

        {{ Form::select('type',
        ['Korepetycje' => 'Korepetycje',
        'Projekt' => 'Projekt',
        'Zadania' => 'Zadania',
        'Inne' => 'Inne'], null, array('class' => 'form-control','required' => '')) }}

        {{ Form::label('title', 'Tytuł: ')  }}
        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}
        {{ Form::label('body', 'Treść: ') }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '') ) }}
        {{ Form::label('price','Cena: ')}}
        {{ Form::text('price',null,array('class'=>'form-control', 'required'=>''))}}

        {{ Form::label('file','Załączniki: ') }}
        {{ Form::file('file',array('id'=>'fileInput','form'=>'file')) }}

        <div class="row" id="loading-bar">
            <div class="col-xs-12" id="progress"></div>
        </div>

        {{ Form::label('Lista: ') }}

        <div class="form-control" id="files"></div>

        {{ Form::submit('Opublikuj zadanie', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top: 10px' )) }}

        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    {{Html::script('js/orders_create.js')}}
    {{Html::script('js/parsley.min.js')}}
@endsection