@extends('layouts.main')

@section('content')

{{ Form::open(array('autocomplete' => 'off'))}}
@foreach($errors->all() as $error)
	<p class="error">{{$error}}</p>
@endforeach
<label for="fullname">{{$task->title}}</label>
<input type="text" name="title" placeholder="Task Title"/>
<label for="username">points</label>
<input type="number" name="points" placeholder="Task Points"/>
<label for="fullname">Expiry Date</label>
<input type="text" name="expiry_date" placeholder="Task Title" value="2014-06-18"/>
<label for="priority">Priority</label>
<select name="priority">
	<option value="high">High</option>
	<option value="medium">Medium</option>
	<option value="low">Low</option>
</select>
<label for="assignee">Assign To</label>
<select name="assignee_id">
	<option value="1">Ahmed</option>
	<option value="2">Omar</option>
	<option value="3">Mai</option>
</select>
<input type="submit" value="Add Task"/>
{{ Form::close()}}
@stop