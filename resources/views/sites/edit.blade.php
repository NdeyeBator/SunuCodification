<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Sunu Codification</title>

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
                  <div class="panel-heading"><strong><center> Edit Site</center></strong></div>

                  <div class="panel-body">
                    @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                    @endif
                    <form  class="form-horizontal" method="PUT" action="{{ route('sites.update', $site->id ) }}">



                        <div class="form-group">
                          @if($errors->get('localisation')) : has-eror @endif
                        <div class="col-md-4"></div>
                       <div class="col-md-6">
                         <div class="ui left icon input">
                           <i class="write icon"></i>
                           <input placeholder="Enter location" id="localisation" type="text" class="form-control" name="localisation" value="{{ $site->localisation }}" required autofocus>
                           </div>
                       </div>
                       @if($errors->has('localisation'))
                        <p class="help-block"> {{ $errors->first('localisation')}} </p>
                      @endif
                     </div>
                     <div class="form-group">
                         <div class="col-md-8 col-md-offset-4">
                             <button type="submit" class="btn btn-info">
                                 Save site changes
                             </button>
                         </div>
                     </div>


                    </form>

                  </div>
              </div>
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
