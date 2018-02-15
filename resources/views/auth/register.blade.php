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

                         <select class="form-control" id="" name="departement_id" >
                               <option  value="1" > Genie Informatique</option>
                               <option value="2" > Genie Civil </option>
                               <option value="3" > Genie Mecanique </option>
                               <option value="4" > Genie Electrique </option>
                               <option value="5" > Genie Chimique </option>
                               <option value="6"> Gestion </option>
                        </select>
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('codeFormation') ? ' has-error' : '' }}">
                        <!--  <label for="name" class="col-md-4 control-label">Name</label>-->
                        <div class="col-md-4"></div>

                        <div class="col-md-6">

                         <select class="form-control" id="" name="formation_id">
                               <option  value="1" > DIC1 Informatique</option>
                               <option  value="2" > DIC2 Informatique</option>
                               <option  value="3" > DIC3 Informatique</option>
                               <option  value="4" > DIC1 Civil</option>
                               <option  value="5" > DIC2 Civil</option>
                               <option  value="6" > DIC3 Civil</option>
                               <option  value="7" > DIC1 Mecanique</option>
                               <option  value="8" > DIC2 Mecanique</option>
                               <option  value="9" > DIC3 Mecanique</option>
                               <option  value="10" > DIC1 Electrique</option>
                               <option  value="11" > DIC2 Electrique</option>
                               <option  value="10" > DIC3 Electrique</option>
                        </select>
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
                          <div class="col-md-4"></div>
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
