<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sunu Codification') }}</title>

    <!--script-->
    <link rel="stylesheet" type="text/css" href="semantic/out/components/reset.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/site.css">

<link rel="stylesheet" type="text/css" href="semantic/out/components/container.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/grid.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/header.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/image.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/menu.css">

<link rel="stylesheet" type="text/css" href="semantic/out/components/divider.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/segment.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/form.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/input.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/button.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/list.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/message.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/icon.css">
<link rel="stylesheet" type="text/css" href="semantic/out/components/checkbox.css">



<script src="assets/library/jquery.min.js"></script>
<script src="semantic/out/components/form.js"></script>
<script src="semantic/out/components/transition.js"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
  body {
    background-color: #DADADA;
  }
  body > .grid {
    height: 30%;
  }
  .image {
    margin-top: -100px;
  }
  .column {
    max-width: 450px;
  }
</style>
</head>
<body>
    <div id="app">
       <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
              <!--  <div class="ui middle aligned center aligned grid">
                  <div class="column">-->


                    <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                <!--    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>-->

                    <a class="navbar-brand" href="#">
                        <strong>Sunu Codification</strong>
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                   <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Deconnexion <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>



                    </ul>
                  </nav>


                  </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mise a jour</div>
                <div class="panel-body">

                    @foreach( $agents as $agent)
                    <form  class="form-horizontal" method="PUT" action="{{ route('agents.update','$agent->numeroAgent' ) }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input id="nomAgent" type="text" class="form-control" name="nomAgent" value="{{ $agent->nomAgent }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $agent->email }}" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Agent changes
                                </button>
                            </div>
                        </div>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
