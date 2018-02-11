@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                @include('layouts.alerts')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <span class="glyphicon glyphicon-eye-open"></span> Detalle</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <h1 class="text-center">{{$student->first_name}} {{$student->last_name}}</h1>
                            <h3 class="text-center text-muted">Nacimiento: {{$student->birthday->format('Y-m-d')}}</h3>
                            <p class="text-center">
                               <strong> Materias</strong>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Nombre</th>
                                    <th>Calificación</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($student->topics as $topic)
                                    <tr>
                                        <td>{{$topic->code}}</td>
                                        <td>{{$topic->name}}</td>
                                        <td>{{$topic->pivot->mark}}</td>
                                        <td>
                                            <ul class="list-inline">
                                                <li><a href="{{route('marks.edit', ['student' => $student->id, 'topic' => $topic->id])}}" data-toggle="tooltip" data-placement="bottom" title="Calificación "><span class="glyphicon glyphicon-copy"></span></a></li>
                                                <li><a href="{{route('subscribe.unsubscribe', ['student' => $student->id, 'topic' => $topic->id])}}" data-toggle="tooltip" data-placement="bottom" title="Baja"><span class="glyphicon glyphicon-trash"></span></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection