<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Role System</title>

    <!-- Bootstrap -->
    <link href="{{ asset('front_views_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front_views_assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('front_views_assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="body">
	<nav class="navbar navbar-default custom-navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">Laravel Role System</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<!-- <li class="active"><a href="#">Home</a></li> -->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tahmidur Rahman <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
							<li><a href="{{ url('/logout') }}">Logout</a></li>
						</ul>
					</li>
					@else
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('register') }}">Register</a></li>
					@endif
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 .col-xs-12">
					<div class="text-center welcome">Welcome to Multi User Management System</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('front_views_assets/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('front_views_assets/js/bootstrap.min.js') }}"></script>
</body>
</html>