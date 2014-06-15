@extends('layouts.main')

@section('content')

<aside class="right-side down">
	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-11">

				<h1>All kids</h1>
				<p> {{link_to_route('kids.create', 'Add new kid')}}</p>
				@if(Session::has('message'))
				     <p class="alert">{{ Session::get('message') }}</p>
				@endif
				@if($kids->count())
				<div class="row">
					@foreach($kids as $kid)
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            {{$kid->fullname}}
                        </h3>
                        <p>
                            {{$kid->points}} points
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-user"></i>
                    </div>
                    <div class="small-box-footer">{{link_to_route('kids.show', 'More info', array($kid->id))}}
                    </div>

                    </a>
                </div>
            </div><!-- ./col -->
								{{Form::hidden('id', $kid->id)}}
							{{Form::close()}}
						@endforeach
					</div>
				@else
					There are no kids
				@endif
			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</aside><!-- /.right-side -->
@stop