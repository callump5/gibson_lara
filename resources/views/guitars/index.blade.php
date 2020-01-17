@extends('layout')

@section('content')

    @foreach ($guitars as $guitar)
    <div class="guitar">
        <h2><a href="/guitars/{{ $guitar->id }}">{{$guitar->name}}</a></h2>
        <p class="u-paragraph">{{$guitar->excerpt}}</p>
    </div>
    @endforeach
    
@endsection