<!DOCTYPE html>
<html class="bg-black">
	<head>
		<meta charset="UTF-8">
		<title>Firmaly | Log in</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- bootstrap 3.0.2 -->
		<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- font Awesome -->
		<link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="{{URL::asset('css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

		<link rel="shortcut icon" href="{{URL::asset('img/kidscentive-fav.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{URL::asset('img/kidscentive-fav.ico')}}" type="image/x-icon">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="bg-black">
		<div class="col-md-4 col-md-offset-4 text-center firmalylogo">
			<img width="180px" src="{{URL::asset('img/kidscentive-logo.png')}}"/>
		</div>
		@if ($errors->count() >= 1)
		<div class="col-md-4 alert alert-danger alert-dismissable">
			<i class="fa fa-ban"></i>
			<b>Alert!</b>
			@foreach($errors->all() as $error)
			{{$error}}
			@endforeach
		</div>
		@endif
		@if(Session::has('message'))
		<div class="col-md-4 alert alert-success alert-dismissable">
			<i class="fa fa-check"></i>
			<b>Alert!</b> {{ Session::get('message') }}
		</div>
		@endif

		<div class="form-box" id="login-box">
			<div class="header">
				Sign In
			</div>

			{{ Form::open(array('url' => 'login','autocomplete' => 'off'))}}
			<div class="body bg-gray">
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username"/>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password"/>
				</div>
				<div class="form-group">
					<input type="checkbox" name="remember_me"/>
					Remember me
				</div>
			</div>
			<div class="footer">
				<input type="submit" class="btn bg-olive btn-block" value="Sign me in"/>
				<p>
					<a href="forgotpassword.html">I forgot my password</a>
				</p>

				<a href="register" class="text-center">Register a new membership</a>
			</div>
			{{ Form::close()}}

			<div class="margin text-center">
				<span>Sign in using social networks</span>
				<br/>
				<button class="btn bg-light-blue btn-circle">
					<i class="fa fa-facebook"></i>
				</button>
				<button class="btn bg-aqua btn-circle">
					<i class="fa fa-twitter"></i>
				</button>
				<button class="btn bg-red btn-circle">
					<i class="fa fa-google-plus"></i>
				</button>

			</div>
		</div>

		<!-- jQuery 2.0.2 -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

	</body>
</html>