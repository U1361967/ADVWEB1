@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You have sucessfully logged in!
                </div>
            </div>
            <div class="panel panel-default">
                    <div class="panel-heading">To-Do List:</div>
                   
                    @foreach ($find as $task)
                    <div class="panel-body">• {{ $task->task}}
                    <div style="float:right;"><a href="#">Edit</a>
                    <a href="#">Delete</a></div>
                    </div>
                @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
