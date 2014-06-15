<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>Kidscentive | Home</title>

		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- bootstrap 3.0.2 -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- font Awesome -->
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Ionicons -->
		<link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Morris chart -->
		<link href="{{asset('css/morris/morris.css')}}" rel="stylesheet" type="text/css" />
		<!-- jvectormap -->
		<link href="{{asset('css/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
		<!-- fullCalendar -->
		<link href="{{asset('css/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
		<!-- Daterange picker -->
		<link href="{{asset('css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
		<!-- bootstrap wysihtml5 - text editor -->
		<link href="{{asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="{{asset('css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

		<link rel="shortcut icon" href="{{asset('img/kidscentive-fav.ico')}}" type="image/x-icon">

		<link rel="icon" href="{{asset('img/kidscentive-favic.ico')}}" type="image/x-icon">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="skin-blue">
		<!-- header logo: style can be found in header.less -->
		<header class="header">

			<a href="{{URL::route('home')}}" class="logo"> <!-- Add the class icon to your logo image or logo icon to add the margining --> <img src="{{asset('img/Kidscentive-logo.png')}}" width="165px" height="35"/> </a>

			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-fixed-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less
						<li class="dropdown messages-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i> <span class="label label-danger">4</span> </a>
						<ul class="dropdown-menu">
						<li class="header">
						You have 4 messages
						</li>
						<li>
						<ul class="menu">
						<li>
						<a href="#">
						<div class="pull-left">
						<img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image"/>
						</div> <h4> Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
						<p>
						Why not buy a new awesome theme?
						</p> </a>
						</li>
						<li>
						<a href="#">
						<div class="pull-left">
						<img src="{{asset('img/avatar2.png')}}" class="img-circle" alt="user image"/>
						</div> <h4> AdminLTE Design Team <small><i class="fa fa-clock-o"></i> 2 hours</small></h4>
						<p>
						Why not buy a new awesome theme?
						</p> </a>
						</li>
						<li>
						<a href="#">
						<div class="pull-left">
						<img src="{{asset('img/avatar.png')}}" class="img-circle" alt="user image"/>
						</div> <h4> Developers <small><i class="fa fa-clock-o"></i> Today</small></h4>
						<p>
						Why not buy a new awesome theme?
						</p> </a>
						</li>
						<li>
						<a href="#">
						<div class="pull-left">
						<img src="{{asset('img/avatar2.png')}}" class="img-circle" alt="user image"/>
						</div> <h4> Sales Department <small><i class="fa fa-clock-o"></i> Yesterday</small></h4>
						<p>
						Why not buy a new awesome theme?
						</p> </a>
						</li>
						<li>
						<a href="#">
						<div class="pull-left">
						<img src="{{asset('img/avatar.png')}}" class="img-circle" alt="user image"/>
						</div> <h4> Reviewers <small><i class="fa fa-clock-o"></i> 2 days</small></h4>
						<p>
						Why not buy a new awesome theme?
						</p> </a>
						</li>
						</ul>
						</li>
						<li class="footer">
						<a href="#">See All Messages</a>
						</li>
						</ul>
						</li>
						-->
						<!-- Notifications: style can be found in dropdown.less -->
						@if($user->type=='parent')
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-warning"></i> <span class="label label-danger">10</span> </a>
							<ul class="dropdown-menu">
								<li class="header">
									You have 10 notifications
								</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>

											<a href="#"> <i class="ion ion-ios7-people info"></i> Johnny completed a task!!</a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-warning danger"></i> Jill's task is almost expired!</a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-users warning"></i>You have 1 new kid on the way</a>
										</li>

										<li>
											<a href="#"> <i class="ion ion-ios7-cart success"></i>Don't forget to by Sally a cookie</a>
										</li>
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all</a>
								</li>
							</ul>
						</li>
						<!-- Tasks: style can be found in dropdown.less -->
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-tasks"></i> <span class="label label-danger">9</span> </a>
							<ul class="dropdown-menu">
								<li class="header">

									You have 4 kids

								</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<!-- Task item -->

											<a href="#"> <h3>Johnny<small class="pull-right">20%</small></h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">20% Complete</span>
												</div>
											</div> </a>
										</li><!-- end task item -->
										<li>
											<!-- Task item -->
											<a href="#"> <h3>Sally<small class="pull-right">40%</small></h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">40% Complete</span>
												</div>
											</div> </a>
										</li><!-- end task item -->
										<li>
											<!-- Task item -->

											<a href="#"> <h3>Jill<small class="pull-right">60%</small></h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">60% Complete</span>
												</div>
											</div> </a>
										</li><!-- end task item -->
										<li>
											<!-- Task item -->
											<a href="#"> <h3>Kierin<small class="pull-right">80%</small></h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">80% Complete</span>
												</div>
											</div> </a>
										</li><!-- end task item -->
									</ul>
								</li>
								<li class="footer">
									<a href="tasks.html">View all tasks</a>
								</li>
							</ul>
						</li>
						@endif
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i> <span>{{$user->fullname}} <i class="caret"></i></span> </a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header bg-firmaly-green">
									<img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
									<p>

										{{$user->fullname}} - {{$user->type}}
										<small>Member since Nov. 2012</small>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="col-xs-4 text-center">

										<a href="#">Dashboard</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Tasks</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Profile</a>
									</div>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="{{URL::route('parents.edit')}}" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div class="pull-right">
										<a href="signout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="left-side sidebar-offcanvas">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p>
								Hello, {{$user->fullname}}
							</p>

							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search..."/>
							<span class="input-group-btn">
								<button type='submit' name='seach' id='search-btn' class="btn btn-flat">
									<i class="fa fa-search"></i>
								</button> </span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						@if($user->type=='kid')
						<li>
							<a href="{{URL::route('home')}}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
						</li>
						@endif
						<li>
							<a href="{{URL::route('tasks.index')}}"> <i class="fa fa-th"></i> <span>Tasks</span> <small class="badge pull-right bg-green">new</small> </a>
						</li>
						@if($user->type=='parent')
						<li>
							<a href="{{URL::route('kids.index')}}"> <i class="fa fa-user"></i> <span>Kids</span></a>
						</li>
						<li>
							<a href="{{URL::route('incentives.index')}}"> <i class="fa fa-shopping-cart"></i> <span>Incentives</span></a>
						</li>
						@endif
						@if($user->type=='kid')
						<li>
							<a href="{{URL::route('incentives.index')}}"><i class="fa fa-shopping-cart"></i><span>Redeem Points</span></a>
							<ul class="sidebar-menu">
								<li class="prize">
									<img src="{{asset('img/cookie.png')}}" width="100px" height="100px" class="przimg"/><p>Cookie - 50 points</p>
								</li>
								<li class="prize">
									<img src="{{asset('img/icecream.png')}}" width="100px" height="100px" class="przimg"/><p>Ice Cream - 100points</p>
								</li>
								<li class="prize">
									<img src="{{asset('img/videogames.png')}}" width="100px" height="100px" class="przimg"/><p>Video Games - 150 points</p>
								</li>
							</ul>
						</li>
						@endif
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			@yield('content')
		</div><!-- ./wrapper -->

		<!-- add new calendar event modal -->

		<!-- jQuery 2.0.2 -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!-- jQuery UI 1.10.3 -->
		<script src="{{asset('js/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>
		<!-- Bootstrap -->
		<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
		<!-- Morris.js charts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
		<script src="{{asset('js/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
		<!-- Sparkline -->
		<script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
		<!-- jvectormap -->
		<script src="{{asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
		<!-- fullCalendar -->
		<script src="{{asset('js/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{asset('js/plugins/jqueryKnob/jquery.knob.js')}}" type="text/javascript"></script>
		<!-- daterangepicker -->
		<script src="{{asset('js/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="{{asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
		<!-- iCheck -->
		<script src="{{asset('js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>

		<!-- AdminLTE App -->
		<script src="{{asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>

		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{asset('js/AdminLTE/dashboard.js')}}" type="text/javascript"></script>

		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('js/AdminLTE/demo.js')}}" type="text/javascript"></script>

	</body>
</html>