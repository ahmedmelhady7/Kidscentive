
@extends('layouts.main')

@section('content')

@foreach($errors->all() as $error)
<p class="error">
	{{$error}}
</p>
@endforeach

<<<<<<< HEAD
<aside class="right-side down">
	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-6">
				<h1>Create Task</h1>
				{{Form::open(array('route'=>'tasks.store'))}}
				  <div class="box-body">
						<div class="form-group">
				        <label for="title">Title</label>
								<input type="text" class="form-control" name="title" placeholder="Task Title"/>
				    </div>
				    <div class="form-group">
				        <label for="points">Points</label>
								<input type="number" class="form-control" name="points" placeholder="Task Points"/>
				    </div>
				    <div class="form-group">
				        <label for="expirty_date">Expiry Date</label>
								<input type="text" class="form-control" name="expiry_date" placeholder="Task Title" value="2014-06-18"/>
				    </div>                                      
				    <div class="form-group">
				        <label for="priority">Priority</label>
								<select name="priority" class="form-control">
									<option value="high">High</option>
									<option value="medium">Medium</option>
									<option value="low">Low</option>
								</select>
				    </div>
				  	<div class="form-group">
				      <label for="assignee_id">Assign To</label>
							<select name="assignee_id" class="form-control">
								@foreach($kids as $kid)
								<option value="{{$kid->id}}">{{$kid->fullname}}</option>
								@endforeach
							</select>
				  	</div>
				  	<input type="submit" value="Add Task"/>
				  </div>
				{{ Form::close()}}

			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</aside><!-- /.right-side -->

@stop