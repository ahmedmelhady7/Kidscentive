@extends('layouts.main')

@section('content')

@foreach($errors->all() as $error)
<p class="error">
	{{$error}}
</p>
@endforeach

<h1> Edit page</h1>
{{Form::model($task, array('route'=> array('tasks.update', $task->id)))}}
{{Form::label('title','Title')}}
{{Form::text('title')}}
{{Form::label('points','Points')}}
<input type="number" name="points" value="{{$task->points}}" />
{{Form::label('expiry_date','Expiry Date')}}
<input type="text" name="expiry_date" value="{{$task->expiry_date}}"/>
{{Form::label('priority','Priority')}}
{{Form::select('priority',array('high'=>'High','medium'=>'Medium','low'=>'Low'))}}
{{Form::label('assignee_id','Assign to')}}
{{Form::select('assignee_id',array('1'=>'Ahmed','2'=>'Omar','3'=>'Mai'))}}
<input type="submit" value="Update Task"/>
{{link_to_route('tasks.show','Cancel', $task->id)}}
{{Form::close()}}
@stop
