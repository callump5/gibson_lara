@extends('layout')

@section('content')
<div class="u-container">
    <div class="u-page-container">
        <h1>Create Guitar Listing</h1>

        <form method="POST" action="/guitars">
           @csrf
            <div class="field">
                <label for="name">name</label>
                <input name="name" id="name" type="text">
            </div>
            <div class="field">
                <label for="type">Type</label>
                <input name="type" id="type" type="text">
            </div>
            <div class="field">
                <label for="excerpt">Excerpt</label>
                <input name="excerpt" id="excerpt" type="text">
            </div>
            <div class="field">
                <label for="body">Body</label>
                <input name="body" id="body" type="text">
            </div>

            <div class="submit-field">
                <button type="submit">Submit</button>
            </div>


        </form>
    </div>
</div>
    
@endsection