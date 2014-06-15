@extends('layouts.main')

@section('content')

<aside class="right-side down">
	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-11">

				<h1>All Incentives</h1>
				@if($user->type=='parent')
				<p>
					{{link_to_route('incentives.create', 'Add new Incentive')}}

				</p>
				@endif
				@if(Session::has('message'))
				<div class="alert alert-success alert-dismissable">
					<i class="fa fa-check"></i>
					<b>Success!</b>
					{{ Session::get('message') }}
				</div>
				@endif
				@if($incentives->count())
				<div class="row">
					@foreach($incentives as $incentive)
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3> {{$incentive->name}} </h3>
								<p>
									{{$incentive->worth}} points
								</p>
							</div>
							<div class="icon">
								<i class="fa fa-fw fa-user"></i>
							</div>
							@if($user->type=='kid')
							@if($incentive->purchased)
							<div class="small-box-footer">
								Purchased
							</div>
							@else
							<div class="small-box-footer">
								{{link_to_route('incentives.purchase', 'Purchase', array($incentive->id))}}
							</div>
							@endif
							@endif
							</a>
						</div>
					</div><!-- ./col -->
					{{Form::hidden('id', $incentive->id)}}
					{{Form::close()}}
					@endforeach
				</div>
				@else
				There are no incentives
				@endif
			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</aside><!-- /.right-side -->
@stop

@stop