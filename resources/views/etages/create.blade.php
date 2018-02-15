<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sunu Codification</title>

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

  <nav class="navbar navbar-default">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar bar1"></span>
                  <span class="icon-bar bar2"></span>
                  <span class="icon-bar bar3"></span>
              </button>
              <a class="navbar-brand" href="#"><i>ESP | Campus Social</i> </a>
          </div>

      </div>
  </nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><center> CREATION DES ETAGES</center></strong></div>

                <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="{{ route('etages.store') }}">
                      {{ csrf_field() }}
											<div class="form-group">
                      <div class="col-md-4"></div>
                     <div class="col-md-6">
                       <div class="ui left icon input">
                         <i class="write icon"></i>
                         <input placeholder="Enter numero" id="numeroEtage" type="text" class="form-control" name="numeroEtage" value="{{ old('numeroEtage') }}" required autofocus>
                         </div>
                     </div>
                   </div>

                      <div class="form-group">
                      <div class="col-md-4"></div>
                     <div class="col-md-6">
											 <label for="sel1">Select batiment</label>
											 <select class="form-control" id="" name="batiment_id">

												 @foreach($batiments as $batiment)
    												 <option  value="{{ $batiment->id }}" >

                               {{ $batiment->nomBatiment }}
                             </option>
												 @endforeach


								      </select>
                     </div>
                   </div>


                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-info ">
                                  Creer
                              </button>
                          </div>
                      </div>
                  </form>

                </div>
            </div>

            <a class="btn btn-danger  btn btn-lg" href="{{route('etages.index')}}" type="button"> Back</a>

            @if($errors->has(0))
              <ul class="aler alert-danger">
                @foreach($errors->all as $error)
                  <li>{{ $error}}</li>
                @endforeach
              </ul>
            @endif

        </div>
    </div>
</div>
</div>
</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
