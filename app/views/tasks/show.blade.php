@extends('layouts.main')

@section('content')
<h1>All Tasks</h1>
<p> {{link_to_route('tasks.create', 'Add new Task')}}</p>
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
{{$task->title}}
@stop