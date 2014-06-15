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
						<li>
							<a href="#tab_2" data-toggle="tab"><i class="fa fa-fw fa-check-square-o"></i>Done Tasks</a>
						</li>

						<li>
							<a href="#tab_3" data-toggle="tab"><i class="fa fa-fw fa-tasks"></i>Suggested Tasks</a>
						</li>
						<li>
							<a href="#tab_4" data-toggle="tab"><i class="fa fa-fw fa-tasks"></i>Suggested Rewards</a>
						</li>
						<li class="pull-right">
							<a href="#" class="text-muted"><i class="fa fa-gear"></i></a>
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
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<input type="checkbox" value="" name=""/>
											<!-- todo text -->
											<span class="text">{{$task->title}}</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i>{{$task->timestamps}} min</small>
											<!-- General tools such as edit or delete-->
											<div class="tools">
												<a href="{{URL::route('tasks.edit',array($task->id))}}"><i class="fa fa-edit"></i></a>
												<a data-toggle="modal" data-target="#compose-modal"><i class="fa fa-trash-o"></i></a>
											</div>
										</li>
										@endforeach
										@else
											There are no tasks
										@endif
									@else
										@foreach($todotasks as $todo)
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<input type="checkbox" value="" name=""/>
											<!-- todo text -->
											<span class="text">{{$todo->title}}</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i>{{$todo->timestamps}} min</small>
										</li>
										@endforeach
									@endif
								</div><!-- /.box-body -->
								<div class="box-footer clearfix no-border">
									
									@if($user->type=='parent')
									<a href="{{URL::route('tasks.create')}}" class="btn btn-default pull-right"> <i class="fa fa-plus"></i> Add item </a>
									@endif
									<div class="box-tools pull-left">
										<ul class="pagination pagination-sm inline">
											<li>
												<a href="#">&laquo;</a>
											</li>
											<li>
												<a href="#">1</a>
											</li>
											<li>
												<a href="#">2</a>
											</li>
											<li>
												<a href="#">3</a>
											</li>
											<li>
												<a href="#">&raquo;</a>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- /.box -->
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_2">
							<div class="box box-tasks">
								<div class="box-header">
									<div class="box-tools pull-left"></div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<ul class="todo-list">
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<i class="fa fa-fw fa-check-square"></i>
											<!-- todo text -->
											<span class="text">Design a nice theme</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
											<!-- General tools such as edit or delete-->
											<div class="tools done">
												<button class="btn btn-success btn-sm">
													Approve Points
												</button>
												<button class="btn btn-danger btn-sm">
													Ask To Redo
												</button>
											</div>
										</li>
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<i class="fa fa-fw fa-check-square"></i>
											<!-- todo text -->
											<span class="text">Design a nice theme</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
											<!-- General tools such as edit or delete-->
											<div class="tools done">
												<button class="btn btn-success btn-sm">
													Approve Points
												</button>
												<button class="btn btn-danger btn-sm">
													Ask To Redo
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<i class="fa fa-fw fa-check-square"></i>
											<span class="text">Make the theme responsive</span>
											<small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
											<div class="tools done">
												<button class="btn btn-success btn-sm">
													Approve Points
												</button>
												<button class="btn btn-danger btn-sm">
													Ask To Redo
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<i class="fa fa-fw fa-check-square"></i>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
											<div class="tools done">
												<button class="btn btn-success btn-sm">
													Approve Points
												</button>
												<button class="btn btn-danger btn-sm">
													Ask To Redo
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<i class="fa fa-fw fa-check-square"></i>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
											<div class="tools done">
												<button class="btn btn-success btn-sm">
													Approve Points
												</button>
												<button class="btn btn-danger btn-sm">
													Ask To Redo
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<i class="fa fa-fw fa-check-square"></i>
											<span class="text">Check your messages and notifications</span>
											<small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
											<div class="tools done">
												<button class="btn btn-success btn-sm">
													Approve Points
												</button>
												<button class="btn btn-danger btn-sm">
													Ask To Redo
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<i class="fa fa-fw fa-check-square"></i>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
											<div class="tools done">
												<button class="btn btn-success btn-sm">
													Approve Points
												</button>
												<button class="btn btn-danger btn-sm">
													Ask To Redo
												</button>
											</div>
										</li>
									</ul>
								</div><!-- /.box-body -->
								<div class="box-footer clearfix no-border">
									<a href="addtasks.html" class="btn btn-default pull-right"> <i class="fa fa-plus"></i> Add item </a>
									<div class="box-tools pull-left">
										<ul class="pagination pagination-sm inline">
											<li>
												<a href="#">&laquo;</a>
											</li>
											<li>
												<a href="#">1</a>
											</li>
											<li>
												<a href="#">2</a>
											</li>
											<li>
												<a href="#">3</a>
											</li>
											<li>
												<a href="#">&raquo;</a>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- /.box -->

						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_3">
							<div class="box box-tasks">
								<div class="box-header">
									<div class="box-tools pull-left"></div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<ul class="todo-list">
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<!-- todo text -->
											<span class="text">Design a nice theme</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
											<!-- General tools such as edit or delete-->
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Task
												</button>
											</div>
										</li>
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<!-- todo text -->
											<span class="text">Design a nice theme</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
											<!-- General tools such as edit or delete-->
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Task
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Make the theme responsive</span>
											<small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Task
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Task
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Task
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Check your messages and notifications</span>
											<small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Task
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Task
												</button>
											</div>
										</li>
									</ul>
								</div><!-- /.box-body -->
								<div class="box-footer clearfix no-border">
									<a href="addtasks.html" class="btn btn-default pull-right"> <i class="fa fa-plus"></i> Add item </a>
									<div class="box-tools pull-left">
										<ul class="pagination pagination-sm inline">
											<li>
												<a href="#">&laquo;</a>
											</li>
											<li>
												<a href="#">1</a>
											</li>
											<li>
												<a href="#">2</a>
											</li>
											<li>
												<a href="#">3</a>
											</li>
											<li>
												<a href="#">&raquo;</a>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- /.box -->

						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_4">
							<div class="box box-tasks">
								<div class="box-header">
									<div class="box-tools pull-left"></div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<ul class="todo-list">
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<!-- todo text -->
											<span class="text">Design a nice theme</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
											<!-- General tools such as edit or delete-->
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Reward
												</button>
											</div>
										</li>
										<li>
											<!-- drag handle -->
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<!-- checkbox -->
											<!-- todo text -->
											<span class="text">Design a nice theme</span>
											<!-- Emphasis label -->
											<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
											<!-- General tools such as edit or delete-->
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Reward
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Make the theme responsive</span>
											<small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Reward
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Reward
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Reward
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Check your messages and notifications</span>
											<small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Reward
												</button>
											</div>
										</li>
										<li>
											<span class="handle"> <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i> </span>
											<span class="text">Let theme shine like a star</span>
											<small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
											<div class="tools done">
												<button class="btn btn-info btn-sm">
													Approve Suggested Reward
												</button>
											</div>
										</li>
									</ul>
								</div><!-- /.box-body -->
								<div class="box-footer clearfix no-border">
									<a href="addtasks.html" class="btn btn-default pull-right"> <i class="fa fa-plus"></i> Add item </a>
									<div class="box-tools pull-left">
										<ul class="pagination pagination-sm inline">
											<li>
												<a href="#">&laquo;</a>
											</li>
											<li>
												<a href="#">1</a>
											</li>
											<li>
												<a href="#">2</a>
											</li>
											<li>
												<a href="#">3</a>
											</li>
											<li>
												<a href="#">&raquo;</a>
											</li>
										</ul>
									</div>
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

@stop