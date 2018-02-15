@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h2>Connexion Admin</h2></center></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <!--  <label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
                             <div class="col-md-4"></div>
                            <div class="col-md-6">
                              <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input placeholder="Mail Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <!--  <label for="password" class="col-md-4 control-label">Password</label>-->
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                              <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>

                      <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary  ">
                                    Connexion
                                </button>


                            </div>
                        </div>
                        <div class="form-group">
                          <!--  <div class="col-md-2 "></div>-->
                          <div class="col-md-2 col-md-offset-4 ">
                            <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                Mot de passe oublie ?
                            </a>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
