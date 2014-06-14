@extends('layouts.main')

@section('content')
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
	<h1>Hello, {{$user->fullname}}</h1>	
	<p> {{link_to_route('tasks.index', 'Tasks')}}</p>
	<p> {{link_to_route('kids.index', 'Kids')}}</p>
	<a href="signout">sign out</a>
@stop