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
				<h1>Edit Task</h1>
				  <div class="box-body">
						{{Form::model($task, array('route'=> array('tasks.update', $task->id)))}}
						{{Form::label('title','Title')}}
						{{Form::text('title')}}
						{{Form::label('points','Points')}}
						<input type="number" name="points" value="{{$task->points}}" class="form-control" />
						{{Form::label('expiry_date','Expiry Date')}}
						<input type="text" name="expiry_date" value="{{$task->expiry_date}}" class="form-control" />
						{{Form::label('priority','Priority')}}
						{{Form::select('priority',array('high'=>'High','medium'=>'Medium','low'=>'Low'))}}
						{{Form::label('assignee_id','Assign to')}}
						{{Form::select('assignee_id',array('1'=>'Ahmed','2'=>'Omar','3'=>'Mai'))}}
						<input type="submit" value="Update Task"/>
						{{link_to_route('tasks.show','Cancel', $task->id)}}
						{{Form::close()}}
					</div>
			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</aside><!-- /.right-side -->

@stop