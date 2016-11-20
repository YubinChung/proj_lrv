<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
		@yield('googlemap')
	</head>
	@foreach( $menus as $menu )
	<body class="{{ ('body_'.$menu->slug) }}">
	@endforeach
		<header>
			<section class="logo">
				<div class="inner">
				<h1><a href="{{ url('/') }}" class="logo" title=""></a></h1>
				</div>
			</section>
			<section class="sns">
				<div class="inner">
					<h5 class="tel"><span>Toll Free</span><a href="#">1.800.123.4567</a></h5>
					@yield('home_emailus')
					<ul class="sns_list">
						
					</ul>

				</div>
			</section>
			<nav>
				<div class="inner">
				<ul>
					@foreach( $menus as $menu )
					<li><a href="{{ url( '/'.$menu->slug )}}">{{ucfirst($menu-> title)}}</a></li>
					@endforeach
				</ul>
				</div>
			</nav>
			@yield('contact_header')
		</header>
		<section class="sub_header">
			<div class="inner">
				<h2></h2>
				<a href="##" title="GET IN TOUCH">GET IN TOUCH</a>
			</div>
			<div class="breadcrumb">
				<div class="inner">
					<ul>
						<li><a href="/" title=""></a></li>
						<li><a href="##" title=""></a></li>
					</ul>
				</div>
			</div>

		</section>

		
		<section class="content_wrap cf ">
			@yield('content')
		</section>
		
		@include('layouts.footer')
		
	</body>
</html>
