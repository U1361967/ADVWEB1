		{!! Form::model($task, ['method' => 'PATCH', 'url' => 'tasks/edit/' . $task->id]) !!}
			<div class="form-group">
				{!! Form::label('task', 'Task') !!}
				{!! Form::text('task', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Update Post', ['class' => 'btn btn-primary form-control']) !!}
			</div>
		{!! Form::close() !!}