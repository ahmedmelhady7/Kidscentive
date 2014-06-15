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
				<h1>Create Incentive</h1>
				{{Form::open(array('route'=>'incentives.store'))}}
				  <div class="box-body">
						<div class="form-group">
				        <label for="title">Name</label>
								<input type="text" class="form-control" name="name" placeholder="Incentive Name"/>
				    </div>
				    <div class="form-group">
				        <label for="points">Points</label>
								<input type="number" class="form-control" name="worth" placeholder="Incentive Points"/>
				    </div>
				    <input type="submit" value="Add Incentive"/>
				  </div>
				{{ Form::close()}}

			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</aside><!-- /.right-side -->

@stop