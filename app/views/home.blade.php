@extends('layouts.main')

@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Timeline <small>example</small></h1>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="#">UI</a>
			</li>
			<li class="active">
				Timeline
			</li>
		</ol>
	</section>
@if(Session::has('message'))
<p class="alert">
	{{ Session::get('message') }}
</p>
@endif
	<!-- Main content -->
	<section class="content">

		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				  <div class="col-md-9"></div>
				  <div class="col-md-3"><h1 class="points">{{$user->points}} points</h1></div>
				</div>
				<!-- The time line -->
				<ul class="timeline">
					<!-- timeline time label -->
					<li class="time-label">
						<span class="bg-red"> 10 Feb. 2014 </span>
					</li>
					<!-- /.timeline-label -->
					<!-- timeline item -->
					<li>
						<i class="fa fa-envelope bg-blue"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
							<h3 class="timeline-header"><a href="#">Kidscentive</a> says:</h3>
							<div class="timeline-body">
								Great job {{$user->fullname}}!! Keep up the good work!!!!
							</div>
							<div class='timeline-footer'>
								<a class="btn btn-primary btn-xs">Read more</a>
								<a class="btn btn-danger btn-xs">Delete</a>
							</div>
						</div>
					</li>
					<!-- END timeline item -->
					<!-- timeline item -->
					<li>
						<i class="fa fa-user bg-aqua"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
							<h3 class="timeline-header no-border"><a href="#">Your Mom</a> approved your task</h3>
						</div>
					</li>
					<!-- END timeline item -->
					<!-- timeline item -->
					<li>
						<i class="fa fa-comments bg-yellow"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
							<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
							<div class="timeline-body">
								Take me to your leader!
								Switzerland is small and neutral!
								We are more like Germany, ambitious and misunderstood!
							</div>
							<div class='timeline-footer'>
								<a class="btn btn-warning btn-flat btn-xs">View comment</a>
							</div>
						</div>
					</li>
					<!-- END timeline item -->
					<!-- timeline time label -->
					<li class="time-label">
						<span class="bg-green"> 3 Jan. 2014 </span>
					</li>
					<!-- /.timeline-label -->
					<!-- timeline item -->
					<li>
						<i class="fa fa-camera bg-purple"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
							<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
							<div class="timeline-body">
								<img src="http://placehold.it/150x100" alt="..." class='margin' />
								<img src="http://placehold.it/150x100" alt="..." class='margin'/>
								<img src="http://placehold.it/150x100" alt="..." class='margin'/>
								<img src="http://placehold.it/150x100" alt="..." class='margin'/>
							</div>
						</div>
					</li>
					<!-- END timeline item -->
					<!-- timeline item -->
					<li>
						<i class="fa fa-video-camera bg-maroon"></i>
						<div class="timeline-item">
							<span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>
							<h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>
							<div class="timeline-body">
								<iframe width="300" height="169" src="//www.youtube.com/embed/fLe_qO4AE-M" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="timeline-footer">
								<a href="#" class="btn btn-xs bg-maroon">See comments</a>
							</div>
						</div>
					</li>
					<!-- END timeline item -->
					<li>
						<i class="fa fa-clock-o"></i>
					</li>
				</ul>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section><!-- /.content -->
</aside><!-- /.right-side -->
@stop
