<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{--  meta  --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
        <title>Mon Propre Crud | Laravel 7</title>

        {{--  styles  --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    </head>
    <body>
        <!-- menu principal -->
            <div class="container-fluid mb-5">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="image logo" style="width:50px; height:50px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
                        aria-controls="navbarColor03" aria-expanded="false" aria-label="Basculer la navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarColor03">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link"href="{{ route('index') }}">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Accueil </font>
                                    </font><span class="sr-only">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">(courant)</font>
                                        </font>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('internaute.index') }}">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Liste</font>
                                    </font>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('internaute.create') }}">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ajout</font>
                                    </font>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">À propos de</font>
                                    </font>
                                </a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Chercher">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Chercher</font>
                                </font>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        <!-- / -->



        <div class="container mb-5">
            
            @yield('content')

        </div>
        <footer class="container-fluid bg-primary mt-5">
            <div class="row p-5">
                <div class="col-6 text-white">
                    Simple Application de Crud Lorem ipsum dolor sit amet, consectetur adipisicing.
                    Simple Application de Crud Lorem ipsum dolor sit amet, consectetur adipisicing.
                    Simple Application de Crud Lorem ipsum dolor sit amet, consectetur adipisicing.
                </div>
                <div class="col-6 text-center">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item bg-danger">
                            <a class="nav-link active" href="{{ route('internaute.index') }}">Liste</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-danger" href="{{ route('internaute.create') }}">Ajout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ route('index') }}">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
           
        </footer>
        <!-- cripts -->
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/myScript.js')}}"></script>
    </body>
</html>