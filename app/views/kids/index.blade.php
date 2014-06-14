@extends('layouts.main')

@section('content')
<h1>All kids</h1>
<p> {{link_to_route('kids.create', 'Add new kid')}}</p>
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
@if($kids->count())
		@foreach($kids as $kid)
			<p>{{$kid->fullname}}</p>
			<p>{{link_to_route('kids.show', 'Show', array($kid->id))}}</p>
			<p> {{link_to_route('kids.edit', 'Edit', array($kid->id))}}</p>
			{{Form::open(array('route'=>array('kids.destroy'), 'method' => 'delete'))}}
				{{Form::hidden('id', $kid->id)}}
				{{Form::submit('Delete')}}
			{{Form::close()}}
		@endforeach
@else
	There are no kids
@endif
@stop