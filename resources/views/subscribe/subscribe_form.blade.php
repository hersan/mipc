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
                        <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Inscribir</h3>
                    </div>
                    <div class="panel-body">
                        <h2>{{$student->first_name}} {{$student->last_name}}</h2>
                        <hr>

                        {!! Form::open(['route' => ['subscribe.subscribe', $student->id], 'method' => 'post']) !!}

                        <div class="form-group{{ $errors->has('topic') ? ' has-error' : '' }}">
                            {!! Form::label('topic', 'Materia', ['class' => 'control-label']) !!}
                            {!! Form::select('topic[]', $topics,old('topic'), ['class' => 'form-control', 'multiple' => true]) !!}
                            @if ($errors->has('topic'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('topic') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Inscribir', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection