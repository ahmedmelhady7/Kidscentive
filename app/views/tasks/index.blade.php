@extends('layouts.main')

@section('content')
<h1>All Tasks</h1>
<p> {{link_to_route('tasks.create', 'Add new Task')}}</p>
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
@if($tasks->count())
		@foreach($tasks as $task)
			<p>{{$task->title}}</p>
			<p>{{link_to_route('tasks.show', 'Show', array($task->id))}}</p>
			<p> {{link_to_route('tasks.edit', 'Edit', array($task->id))}}</p>
			{{Form::open(array('method'=>'delete', 'route'=>array('tasks.destroy', $task->id)))}}
				{{Form::submit('Delete')}}
			{{Form::close()}}
			@if(!$task->done)
				{{Form::open(array('route'=>array('tasks.approve', $task->id)))}}
					{{Form::submit('Approve Points')}}
				{{Form::close()}}
			@endif
		@endforeach
@else
	There are no tasks
@endif
@stop