@extends('layout')

@section('content')

    <section id="banner">
        <h1>Welcome to Theory</h1>
        <p>A free responsive HTML5 website template by TEMPLATED.</p>
    </section>

<div class="u-container">
    <div class="u-page-container">
        @foreach ($guitars as $guitar)
        <div class="guitar">
            <h2><a href="/guitars/{{ $guitar->id }}">{{$guitar->name}}</a></h2>
            <p class="u-paragraph">{{$guitar->excerpt}}</p>
        </div>
        @endforeach
    </div>
</div>

    
@endsection