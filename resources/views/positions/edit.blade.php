@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier une position</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('positions.update'), $position->numeroPosition) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero Position</label>
                            <div class="col-md-6">
                                <input id="numeroPosition" type="text" class="form-control" name="numeroPosition" value="{{ $position->numeroPosition }}" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
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


<!--
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier une position</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('positions.update', $position->numeroPosition) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero Position</label>
                            <div class="col-md-6">
                                <input id="numeroPosition" type="text" class="form-control" name="numeroPosition" value="{{ $position->numeroPosition }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection-->
