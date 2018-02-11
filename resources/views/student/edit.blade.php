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
                        <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Editar estudiante</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($student,['route' => ['students.update', $student->id], 'method' => 'put']) !!}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            {!! Form::label('first_name', 'Nombre', ['class' => 'control-label']) !!}
                            {!! Form::text('first_name', old('first_name'), ['class' => 'form-control']) !!}
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            {!! Form::label('last_name', 'Apellidos', ['class' => 'control-label']) !!}
                            {!! Form::text('last_name', old('last_name'), ['class' => 'form-control']) !!}
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            {!! Form::label('birthday', 'Fecha de nacimiento', ['class' => 'control-label']) !!}
                            {!! Form::date('birthday', old('birthday', optional($student->birthday)->format('Y-m-d')), ['class' => 'form-control']) !!}
                            @if ($errors->has('birthday'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection