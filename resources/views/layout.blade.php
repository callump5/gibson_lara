<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alata|Nanum+Gothic&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>

        <header class="navbar">
            <div class="u-container">
                <h1 class="navbar__logo">Guitar NFO</h1>

                <nav class="navbar__nav">
                    <a class="navbar__nav--link" href="/">Home</a>
                    <a class="navbar__nav--link" href="/guitars">Guitars</a>
                    <a class="navbar__nav--link" href="/guitars/add">Add Guitar</a>
                    <a class="navbar__nav--link" href="/contact">Contact</a>
                </nav>
            </div> 
        </header>
        
        @yield('content')
        
        </div>

    </body>
</html>
