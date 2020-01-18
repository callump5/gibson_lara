@extends('layout')

@section('content')


    <section id="banner">
        <h1>Welcome to Theory</h1>
        <p>A free responsive HTML5 website template by TEMPLATED.</p>
    </section>

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