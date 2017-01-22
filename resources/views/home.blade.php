@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<!--             <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You have sucessfully logged in!
                </div>
            </div> -->
            <div class="panel panel-default">
                    <div class="panel-heading"><center>To-Do List:</center></div>
                <!-- Display Each Task Saved Under Current Users ID -->
                @foreach ($find as $task)
                <div class="panel-body">
                    <h4>{{ $task->task }}</h4>
                    <a href="{{ url('tasks/edit/'.$task->id) }}" class="btn btn-primary">Edit Task</a>

                    <div class="pull-right">
                    {!! Form::open(['method' => 'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}
                     {!! Form::submit('Delete This Task', ['class' => 'btn btn-danger']) !!}
                     {!! Form::close() !!}
                    </div>
                </div>
                @endforeach
                <hr>
                   <center><a href="{{ url('/create') }}" class="btn btn-success">Create A Task</a></center>
                   <br>
                </div>
        </div>
    </div>
</div>
@endsection
