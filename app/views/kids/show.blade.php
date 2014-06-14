
@extends('layouts.main')

@section('content')
		<!-- Main row -->
		<div class="row">
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-11">
				<div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            {{$kid->fullname}}
                        </h3>
                        <p>
                            {{$kid->points}}
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-user"></i>
                    </div>
                </div>
            </div><!-- ./col -->
					</div>
			</section><!-- right col -->
		</div><!-- /.row (main row) -->
@stop