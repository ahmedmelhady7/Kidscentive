<!DOCTYPE html>
<html class="bg-black">
	<head>
		<meta charset="UTF-8">
		<title>AdminLTE | Registration Page</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- bootstrap 3.0.2 -->
		<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- font Awesome -->
		<link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="{{URL::asset('css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{URL::asset('img/favicon.ico')}}" type="image/x-icon">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="bg-black">

		<div class="col-md-4 col-md-offset-4 text-center firmalylogo">
			<img width="180px" src="{{URL::asset('img/firmalylogo.png')}}"/>
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
		<p class="alert">
			{{ Session::get('message') }}
		</p>
		@endif
		<div class="form-box" id="login-box">
			<div class="header">
				Register New Membership
			</div>
			{{ Form::open(array('autocomplete' => 'off'))}}
			<div class="body bg-gray">
				<div class="form-group">
					<input type="text" name="fullname" class="form-control" placeholder="Full name"/>
				</div>
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="User ID"/>
				</div>
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Email Address"/>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password"/>
				</div>
				<div class="form-group">
					<input type="password" name="password2" class="form-control" placeholder="Retype password"/>
				</div>
				<div class="form-group">
					<select class="form-control" name="role">
						<option value="">Role</option>
						<option value="father">Father</option>
						<option value="mother">Mother</option>
					</select>
				</div>
			</div>
			<div class="footer">

				<button type="submit" class="btn bg-olive btn-block">
					Sign me up
				</button>

				<a href="login" class="text-center">I already have a membership</a>
			</div>
			{{ Form::close()}}

			<div class="margin text-center">
				<span>Register using social networks</span>
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

		<script type="text/javascript">
			var numberofchildren = 1;
			$(document).ready(function() {
				document.getElementById('addchild').onsubmit = function() {
					return false;
				}
				$('#addchild').click(function() {
					event.preventDefault();
					// cancel default behavior
					numberofchildren = numberofchildren + 1;
					var btn = $(this).remove();
					$('.bg-gray').append('<div class="form-group"> <input type="text" id="childname' + numberofchildren + '" id="childname' + numberofchildren + '" name="childname' + numberofchildren + '" class="form-control" placeholder="Child name"/> </div> <div class="form-group"> <input type="text" name="childemail' + numberofchildren + '" class="form-control" placeholder="Child Email Address"/> </div>');
					$('.bg-gray').append(btn);
				});
			});
		</script>
	</body>
</html>