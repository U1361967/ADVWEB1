@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading"><center>Edit A Task:</center></div>
                    <div class="panel-body">
		{!! Form::model($task, ['method' => 'PATCH', 'url' => 'tasks/edit/' . $task->id]) !!}
			<div class="form-group">
				{!! Form::label('task', 'Task Name:') !!}
				{!! Form::text('task', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Update Task', ['class' => 'btn btn-primary form-control']) !!}
			</div>
		{!! Form::close() !!}
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection