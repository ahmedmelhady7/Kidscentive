
@extends('layouts.main')

@section('content')

@foreach($errors->all() as $error)
<p class="error">
	{{$error}}
</p>
@endforeach
<h1> Edit Kid Profile</h1>
{{Form::model($kid, array('route'=> array('kids.update', $kid->id)))}}
{{Form::label('fullname','Full Name')}}
{{Form::text('fullname')}}
{{Form::label('points','Points')}}
<input type="number" name="points" value="{{$kid->points}}" />
{{Form::label('username','Username')}}
{{Form::text('username')}}
<input type="submit" value="Update kid Profile"/>
{{link_to_route('kids.show','Cancel', $kid->id)}}

{{Form::close()}}
@stop