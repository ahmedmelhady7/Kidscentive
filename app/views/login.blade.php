@extends('layouts.main')

@section('content')

{{ Form::open(array('autocomplete' => 'off'))}}
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
@foreach($errors->all() as $error)
	<p class="error">{{$error}}</p>
@endforeach
<input type="text" name="username" placeholder="Username"/>
<input type="password" name="password" placeholder="Password" />
<input type="submit" value="Sign in"/>
{{ Form::close()}}
<a href="register">Register</a>
@stop
