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
                   
                    @foreach ($find as $task)
                    <div class="panel-body">• {{ $task->task}}
                    <div style="float:right;">
                        <a href="#"><button style="float: left;" type="button" class="btn btn-success">Edit</button></a>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}
                     {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                     {!! Form::close() !!}

                    </div>
                @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
