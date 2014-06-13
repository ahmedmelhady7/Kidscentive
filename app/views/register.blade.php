@extends('layouts.main')

@section('content')

{{ Form::open(array('autocomplete' => 'off'))}}
@foreach($errors->all() as $error)
	<p class="error">{{$error}}</p>
@endforeach
<label for="fullname">FullName</label>
<input type="text" name="fullname" placeholder="Full Name"/>
<label for="username">username</label>
<input type="text" name="username" placeholder="Username"/>
<label for="email">email</label>
<input type="email" name="email" placeholder="Email"/>
<label for="password">Password</label>
<input type="password" name="password" placeholder="Password" />
<label for="Role">Role</label>
<select name="role">
	<option value="father">Father</option>
	<option value="mother">Mother</option>
</select>
<input type="submit" value="Register"/>
{{ Form::close()}}
<a href="login">Sign in</a>
@stop
