@extends('layouts.main')

@section('content')
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
{{Form::open(array('url' => 'edittask'))}}
	<h1>Your Tasks</h1>
	@foreach($user as $task)
		<p>{{$task->title}}</p>
		<a onclick="this.form.submit()" href="edittask">Edit Task</a>
		<a href="deletetask">Delete Task</a>
	@endforeach
	<input type="hidden" name="id" value="{{$task->id}}"/>
	<a href="addtask">add Task</a>
	<a href="signout">sign out</a>
{{Form::close()}}
@stop