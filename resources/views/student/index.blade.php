@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @include('layouts.alerts')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <span class="glyphicon glyphicon-list-alt"></span> Listado de Alumnos</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{route('students.create')}}" class="btn btn-primary text-right"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
                        <hr>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Controles</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->first_name}}</td>
                                        <td>{{$student->last_name}}</td>
                                        <td>{{$student->birthday->format('Y-m-d')}}</td>
                                        <td>
                                            <ul class="list-inline">
                                                <li><a href="{{route('students.show', ['student' => $student->id])}}" data-toggle="tooltip" data-placement="bottom" title="Ver detalles"><span class="glyphicon glyphicon-eye-open"></span></a></li>
                                                <li><a href="{{route('subscribe.subscribe', ['student' => $student->id])}}" data-toggle="tooltip" data-placement="bottom" title="Inscribir"><span class="glyphicon glyphicon-plus-sign"></span></a></li>
                                                <li><a href="{{route('students.edit',['student' => $student->id])}}" data-toggle="tooltip" data-placement="bottom" title="Editar Estudiante"><span class="glyphicon glyphicon-pencil"></span></a></li>
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

@endsection