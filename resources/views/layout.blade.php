<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/public.css" rel="stylesheet">
    @yield('style')
</head>

@php
    $section = !empty($admin['section']) ? $admin['section'] : '';
@endphp

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo" img src='logo.jpg'></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Navbar Link</a></li>
            </ul>
        
            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    @yield('content')
    <footer class="page-footer teal">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Mas información</h5>
              <p class="grey-text text-lighten-4"></p>
    
    
            </div>
            <div class="col l3 s12">
              <h5 class="white-text"></h5>
            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Contacto</h5>
              <ul>
                <li><a class="white-text" href="#!">CPi salud</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          Made by <a class="brown-text text-lighten-3" href="https://nomadspro.com/">Nomads</a>
          </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @yield('script')
    <script>
        $(document).ready(function(){
        });
    </script>
</body>
</html>