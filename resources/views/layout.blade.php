<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alata|Nanum+Gothic&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>

    <!-- Header -->
        <header id="header">
            <div class="inner">
                <a href="index.html" class="logo">Guitar Catelog</a>
                <nav id="nav">
                    <a href="/">Home</a>
                    <a href="/guitars">Guitars</a>
                    <a href="/guitars/create">Add Guitar</a>
                </nav>
                <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
            </div>
        </header>

        
        @yield('content')

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <div class="flex">
                    <div class="copyright">
                        &copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
                    </div>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
                        <li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
                        <li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    
        </div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

    </body>
</html>
