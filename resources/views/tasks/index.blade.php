@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nouvelle tâche
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- layout nouvelle tâche -->
                    <form action="{{ url('/task') }}" method="POST" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                <!-- création de la tâche -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Nom de tâche</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Date d'échéance</label>

                            <div class="col-sm-6">
                                <input type="date" name="écheance" id="task-echeance" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- ajout tache -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- liste des taches -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <?php

                        echo "Les tâches " ?>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">



                            <!-- Table Body -->
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>

                                    <!-- table de taches -->
                                    <td class="table-text">
                                       <div> <INPUT type="checkbox" name="done">    NOM: {{ $task->name }} </br> ECHEANCE: {{ $task->écheance }} <div>
                                           </div></div>


                                    </td>

                                    <!-- Bouton modifier -->
                                    <td>
                                        <form action="/task/{{ $task->id }}" method="POST">

                                        <div class="text-right">
                                            <button type="submit" id="edit-task-{{ $task->id }}" class="btn btn-info ">
                                                <i class="fa fa-btn fa-edit text"></i>Modifier</a>
                                            </button>
                                        </div>
                                        </form>
                                    </td>

                                    <!-- Bouton supprimer -->
                                    <td>
                                        <form action="/task/{{ $task->id }}" method="POST">
                                            <div class="text-right">
                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger ">
                                                    <i class="fa fa-btn fa-trash text"></i>Supprimer</a>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
