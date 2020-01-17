@extends('layout')

@section('content')

    <div class="u-container">
        <div class="u-page-container">

            <div class="guitar">
                <h2>{{$guitar->name}}</h2>
                <hr>

                <h3>TYPE: {{$guitar->type}}</h3>
                <p class="u-paragraph">{{$guitar->body}}</p>

            </div>

        </div>
    </div>
@endsection