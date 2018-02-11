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
                            <h1 class="text-center">{{$topic->name}}</h1>
                            <h2 class="text-center text-muted">Code: {{$topic->code}}</h2>
                            <p class="text-center">
                                <strong>Alumnos Inscritos</strong>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de Nacimiento</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($topic->students as $student)
                                    <tr>
                                        <td>{{$student->code}}</td>
                                        <td>{{$student->first_name}}</td>
                                        <td>{{$student->last_name}}</td>
                                        <td>{{$student->birthday->format('Y-m-d')}}</td>
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