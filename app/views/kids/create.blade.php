@foreach($errors->all() as $error)
<p class="error">
	{{$error}}
</p>
@endforeach

{{Form::open(array('route'=>'kids.store'))}}
<label for="title">Full Name</label>
<input type="text" name="fullname" placeholder="Kid Full Name"/>
<label for="points">points</label>
<input type="number" name="points" placeholder="Kid initial Points"/>
<label for="username">Kid Username</label>
<input type="text" name="username" placeholder="Kid Username"/>
<label for="password">Kid Account Password</label>
<input type="password" name="password" placeholder="Kid Password"/>
<input type="submit" value="Add Kid"/>
{{ Form::close()}}
