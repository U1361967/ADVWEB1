@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading"><center>Create A Task:</center></div>
                    <div class="panel-body">
                        <!-- Create A New Task With Text Entered And Store Under Current User ID -->
                        {!! Form::open(['method' => 'POST', 'route'=>['tasks.store']]) !!}
                        <div class="form-group">
                            {!! Form::label('task', 'Task:', ['class' => 'control-label']) !!}
                            {!! Form::text('task', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
