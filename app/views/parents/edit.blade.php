@foreach($errors->all() as $error)
<p class="error">
	{{$error}}
</p>
@endforeach
<h1> Edit Parent Profile</h1>
{{Form::model($user, array('route'=> array('parents.update', $user->id)))}}
{{Form::label('fullname','Full Name')}}
{{Form::text('fullname')}}
{{Form::label('username','Username')}}
{{Form::text('username')}}
{{Form::label('email','Email')}}
{{Form::text('email')}}
{{Form::label('role','Role')}}
{{Form::select('role',array('father'=>'Father','mother'=>'Mother'))}}
<input type="submit" value="Update your Profile"/>
{{link_to_route('home','Cancel')}}
{{Form::close()}}