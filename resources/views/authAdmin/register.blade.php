@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h2>Inscription Etudiant</h2></center></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('numeroEtudiant') ? ' has-error' : '' }}">
                          <!--  <label for="name" class="col-md-4 control-label">Name</label>-->
                          <div class="col-md-4"></div>
                            <div class="col-md-6">
                              <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input placeholder="Numero Etudiant" id="numeroEtudiant" type="text" class="form-control" name="numeroEtudiant" value="{{ old('numeroEtudiant') }}" required autofocus>

                                @if ($errors->has('numeroEtudiant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numeroEtudiant') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                              <div class="ui left icon input">
                                <i class="mail icon"></i>
                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('nomEtudiant') ? ' has-error' : '' }}">
                        <!--  <label for="name" class="col-md-4 control-label">Name</label>-->
                        <div class="col-md-4"></div>
                          <div class="col-md-6">
                            <div class="ui left icon input">
                              <i class="user icon"></i>
                              <input placeholder="Nom" id="nomEtudiant" type="text" class="form-control" name="nomEtudiant" value="{{ old('nomEtudiant') }}" required autofocus>

                              @if ($errors->has('nomEtudiant'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nomEtudiant') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('prenomEtudiant') ? ' has-error' : '' }}">
                        <!--  <label for="name" class="col-md-4 control-label">Name</label>-->
                        <div class="col-md-4"></div>
                          <div class="col-md-6">
                            <div class="ui left icon input">
                              <i class="user icon"></i>
                              <input placeholder="Prenom" id="prenomEtudiant" type="text" class="form-control" name="prenomEtudiant" value="{{ old('prenomEtudiant') }}" required autofocus>

                              @if ($errors->has('prenomEtudiant'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('prenomEtudiant') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                        <!--  <label for="name" class="col-md-4 control-label">Name</label>-->
                        <div class="col-md-4"></div>
                          <div class="col-md-6">
                            <div class="ui left icon input">
                              <i class="user icon"></i>
                              <input placeholder="Genre" id="genre" type="text" class="form-control" name="genre" value="{{ old('genre') }}" required autofocus>

                              @if ($errors->has('genre'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('genre') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('nomDepartement') ? ' has-error' : '' }}">
                        <!--  <label for="name" class="col-md-4 control-label">Name</label>-->
                        <div class="col-md-4"></div>
                          <div class="col-md-6">
                            <div class="ui left icon input">
                              <i class="user icon"></i>
                              <input placeholder="Nom Departement" id="nomDepartement" type="text" class="form-control" name="nomDepartement" value="{{ old('nomDepartement') }}" required autofocus>

                              @if ($errors->has('nomDepartement'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nomDepartement') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('codeFormation') ? ' has-error' : '' }}">
                        <!--  <label for="name" class="col-md-4 control-label">Name</label>-->
                        <div class="col-md-4"></div>
                          <div class="col-md-6">
                            <div class="ui left icon input">
                              <i class="user icon"></i>
                              <input placeholder="Code Formation" id="codeFormation" type="text" class="form-control" name="codeFormation" value="{{ old('codeFormation') }}" required autofocus>

                              @if ($errors->has('codeFormation'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('codeFormation') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>
                      </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!--<label for="password" class="col-md-4 control-label">Password</label>-->
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

                        <div class="form-group">
                            <!--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>-->
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                              <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input placeholder="Password-confirm" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Inscription
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
