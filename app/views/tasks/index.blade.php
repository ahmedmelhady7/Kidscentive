@extends('layouts.main')

@section('content')
@if(Session::has('message'))
<p class="alert">
	{{ Session::get('message') }}
</p>
@endif
<aside class="right-side down">
	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-11">
				<!-- TO DO List -->
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab_1" data-toggle="tab"><i class="ion ion-clipboard"></i> All Tasks</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">
							<div class="box box-tasks">
								<div class="box-header" style="cursor: pointer">
									<div class="box-tools pull-left"></div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<ul class="todo-list">
										@if($user->type=='parent')
										@if($tasks->count())
										@foreach($tasks as $task)
										<li>
											{{Form::open(array('route'=>array('tasks.approve', $task->id)))}}
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<input type="checkbox" {{$task->
											done ? 'checked': ''}}/> <!-- todo text -->
											<span class="text">{{$task->title}}</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i>{{$task->timestamps}} min</small>
											<!-- General tools such as edit or delete-->
											<div class="tools">
												<a href="{{URL::route('tasks.edit',array($task->id))}}"><i class="fa fa-edit"></i></a>
												<a data-toggle="modal" data-target="#compose-modal"><i class="fa fa-trash-o"></i></a>
												@if(!$task->approved)
												@if($task->done)
												<input type="submit" value="Approve Points" class="btn btn-info btn-sm" />
												@endif
												@endif
											</div>
											{{Form::close()}}
										</li>
										@endforeach
										@else
										There are no tasks
										@endif
										@else
										@foreach($todotasks as $todo)
										{{Form::open(array('route'=>'tasks.index'))}}
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<input type="checkbox" {{$todo->
											done ? 'checked': ''}}/>
											<input type="hidden" name="id" value="{{$todo->id}}" />
											<!-- todo text -->
											<span class="text">{{$todo->title}}</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i>{{$todo->timestamps}} min</small>
											<div class="tools">
												@if(!$todo->done)
												<input type="submit" value="Mark as Done" class="btn btn-info btn-sm" />
												@endif
											</div>
										</li>
										{{Form::close()}}
										@endforeach
										@endif
								</div><!-- /.box-body -->
								<div class="box-footer clearfix no-border">

									@if($user->type=='parent')
									<a href="{{URL::route('tasks.create')}}" class="btn btn-default pull-right"> <i class="fa fa-plus"></i> Add item </a>
									@endif
								</div>
							</div><!-- /.box -->
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div><!-- nav-tabs-custom -->

			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</aside><!-- /.right-side -->
@if($user->type=='parent')
@if($tasks->count())

<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
			</div>
			{{Form::open(array('method'=>'delete', 'route'=>array('tasks.destroy', $task->id)))}}
			<div class="modal-footer clearfix">
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<i class="fa fa-times"></i> Discard
				</button>
				<button type="submit" class="btn btn-primary pull-left">
					<i class="fa fa-envelope"></i> Delete Task
				</button>
			</div>
			{{Form::close()}}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif
@endif
<script type="text/javascript"></script>
@stop