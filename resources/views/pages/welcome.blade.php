@extends('main')



@section('title', '| Strona główna')

@section('stylesheets')
	<link rel="stylesheet" href="{{asset('css/orders.css')}}" />
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

    <div class="container row orders">        
       	   <h1>MARKET</h1>
           @foreach($orders as $order)
			<div class="order row">
                <div class="row equal">
                    <div class="col-sm-4 center category">{{$order->category}}, {{$order->school}}, {{$order->type}}</div>
                </div>
                <div class="row equal">
                    <div class="col-sm-12 center info-left">
                        Metody programowania
                    </div>
                </div>
                <div class="row equal">
                    <div class="col-sm-12 center task"><p>{{$order->body}}
                        {{Html::link('orders/'.$order->id,'...więcej')}}
                    </div>
                </div>
                <div class="row def equal">
                    <div class="col-xs-6 center info-left">{{$order->created_at}}</div>
                    <div class="col-xs-6 center info-right">{{$order->price}}$
                        <button class="report btn btn-success">zgłoś się</button>
                    </div>
                </div>
			</div>
        @endforeach
	</div>
  @endsection