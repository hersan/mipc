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
                        <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Agregar/Editar Calificación</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>{{$topic->name}}</strong></p>

                        {!! Form::model($topic,['route' => ['marks.edit', $student->id, $topic->id], 'method' => 'put']) !!}

                        <div class="form-group{{ $errors->has('mark') ? ' has-error' : '' }}">
                            {!! Form::label('mark', 'Calificación', ['class' => 'control-label']) !!}
                            {!! Form::text('mark', old('mark', $mark), ['class' => 'form-control']) !!}
                            @if ($errors->has('mark'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('mark') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection