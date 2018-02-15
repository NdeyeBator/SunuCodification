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
                <div class="panel-heading"><strong><center> LISTES DES AGENTS</center></strong></div>

                <div class="panel-body">
                  @if(session('info'))
                  <div class="col-mg-6 alert alert-success"> {{session('info')}}</div>
                  @endif
                  @if(session('info1'))
                  <div class="col-mg-6 alert alert-warning"> {{session('info1')}}</div>
                  @endif
                  @if(session('info2'))
                  <div class="col-mg-6 alert alert-danger"> {{session('info2')}}</div>
                  @endif

                  <table class="table table-striped table-hover ">
                      <thead>
                        <tr>
                          <th>Numero Agent</th>
                          <th>Nom Agent</th>
                          <th>Prenom Agent</th>
                          <th>Email</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $agents as $agent)
                        <tr class="info">
                          <td>{{ $agent->numeroAgent}}</td>
                          <td>{{ $agent->nomAgent}}</td>
                          <td>{{ $agent->prenomAgent}}</td>
                          <td>{{ $agent->email }}t</td>
                          <td>
                          <a class="btn btn-warning" href="{{ route('agents.edit', $agent->numeroAgent)}}"> <i class="glyphicon glyphicon-edit"></i> </a>
                           <a class="btn btn-danger" href="{{ route('agents.destroyForm', $agent->numeroAgent) }}">
                              <i class="glyphicon glyphicon-remove"></i>
                          </a> </td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('agents.create') }}">
                        <i class="glyphicon glyphicon-plus"></i> Add new agent
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
