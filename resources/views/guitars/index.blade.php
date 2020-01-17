@extends('layout')

@section('content')

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