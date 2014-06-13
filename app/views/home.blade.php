@extends('layouts.main')

@section('content')
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
	<h1>Your Tasks</h1>
	@foreach($user as $task)
		<p>{{$task->title}}</p>
		<a href="edittask">Edit Task</a>
		<a href="deletetask">Delete Task</a>
	@endforeach
	<a href="addtask">add Task</a>
	<a href="signout">sign out</a>
@stop