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
                        <h3 class="panel-title"> <span class="glyphicon glyphicon-list-alt"></span> Listado de Materias</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{route('topics.create')}}" class="btn btn-primary text-right"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
                        <hr>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Controles</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($topics as $topic)
                                <tr>
                                    <td>{{$topic->code}}</td>
                                    <td>{{$topic->name}}</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li><a href="{{route('topics.show', ['topic' => $topic->id])}}" data-toggle="tooltip" data-placement="bottom" title="Ver detalles"><span class="glyphicon glyphicon-eye-open"></span></a></li>
                                            <li><a href="{{route('topics.edit',['topic' => $topic->id])}}" data-toggle="tooltip" data-placement="bottom" title="Editar materia"><span class="glyphicon glyphicon-pencil"></span></a></li>
                                            <li><a href="{{route('topics.destroy', ['topic' => $topic->id])}}" data-toggle="tooltip" data-placement="bottom" title="Borrar"><span class="glyphicon glyphicon-trash"></span></a></li>
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