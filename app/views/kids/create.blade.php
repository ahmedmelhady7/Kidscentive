
@extends('layouts.main')

@section('content')

@foreach($errors->all() as $error)
<p class="error">
	{{$error}}
</p>
@endforeach

<aside class="right-side down">
	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-6">
				<h1>Add Kid</h1>
				{{Form::open(array('route'=>'kids.store'))}}
				 <div class="box-body">
						<div class="form-group">
				        <label for="title">Full Name</label>
								<input type="text" name="fullname" placeholder="Kid Full Name" class="form-control"/>
				    </div>
				    <div class="form-group">
				        <label for="points">Points</label>
								<input type="number" name="points" placeholder="Kid initial Points" class="form-control"/>
				    </div>
				    <div class="form-group">
				        <label for="username">Kid Username</label>
								<input type="text" name="username" placeholder="Kid Username" class="form-control"/>
				    </div>                                      
				    <div class="form-group">
				        <label for="password">Kid Account Password</label>
								<input type="password" name="password" placeholder="Kid Password" class="form-control"/>
				    </div>
				    <div class="form-group">
                <label for="kidphoto">Kid photo</label>
                <input type="file" id="kidphoto">
                <p class="help-block">Upload your kid's photo</p>
            </div>
					<input type="submit" value="Add Kid"/>
				{{ Form::close()}}
			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</aside><!-- /.right-side -->

@stop
