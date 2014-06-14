@extends('layouts.main')

@section('content')
@foreach($errors->all() as $error)
<p class="error">
	{{$error}}
</p>
@endforeach

{{Form::open(array('route'=>'tasks.store'))}}
<label for="title">Title</label>
<input type="text" name="title" placeholder="Task Title"/>
<label for="points">points</label>
<input type="number" name="points" placeholder="Task Points"/>
<label for="expiry_date">Expiry Date</label>
<input type="text" name="expiry_date" placeholder="Task Title" value="2014-06-18"/>
<label for="priority">Priority</label>
<select name="priority">
	<option value="high">High</option>
	<option value="medium">Medium</option>
	<option value="low">Low</option>
</select>
<label for="assignee_id">Assign To</label>
<select name="assignee_id">
	@foreach($kids as $kid)
	<option value="{{$kid->id}}">{{$kid->fullname}}</option>
	@endforeach
</select>
<input type="submit" value="Add Task"/>
{{ Form::close()}}

@stop
