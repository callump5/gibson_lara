@extends('layout')

@section('content')

<section id="banner">
    <h1>Welcome to Theory</h1>
    <p>A free responsive HTML5 website template by TEMPLATED.</p>
</section>
<div class="u-container">
    <div class="u-page-container">
        <h1>Edit Guitar Listing</h1>

        <form method="POST" action="/guitars/{{$guitar->id}}">
           @csrf
           @method('PUT')
            <div class="field">
                <label for="name">name</label>
                <input name="name" id="name" type="text" value="{{$guitar->name}}">
            </div>
            <div class="field">
                <label for="type">Type</label>
                <input name="type" id="type" type="text" value="{{$guitar->type}}">
            </div>
            <div class="field">
                <label for="excerpt">Excerpt</label>
                <input name="excerpt" id="excerpt" type="text" value="{{$guitar->excerpt}}">
            </div>
            <div class="field">
                <label for="body">Body</label>
                <input name="body" id="body" type="text" value="{{$guitar->body}}">
            </div>

            <div class="submit-field">
                <button type="submit">Submit</button>
            </div>


        </form>
    </div>
</div>
    
@endsection