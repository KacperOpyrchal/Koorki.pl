@extends('main')

@section('title','Zobacz zadanie')

@section('stylesheet')
    {!! Html::style('css/orders_show.css') !!}
@endsection

@section('content')
    <div class="container order">
        @foreach($orders as $order)
            <h2>{{$order->category}}</h2>
            <h3>{{$order->school}}</h3>
            <h3>{{$order->type}}</h3>

            <p>{{$order->body}}</p>

            <div class="row"></div>
            @foreach($images as $image)
                <div class="row">
                    <div class="col-xs-12">
                        {{Html::image('/img/'.$image->path,$image->id,array('class'=>'img-responsive'))}}
                    </div>
                </div>
            @endforeach

            @foreach($attachments as $attachment)
                <span>{{Html::link('/img'.$attachment->path,$attachment->path,array('download'=>''))}}</span><br>
            @endforeach

        @endforeach
    </div>
@endsection
