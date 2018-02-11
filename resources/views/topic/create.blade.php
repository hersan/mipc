@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-offset-3">
                @include('layouts.alerts')
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Crear Materia</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'topics.store', 'method' => 'post']) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection