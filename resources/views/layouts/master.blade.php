<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>{{ $site_title }} | {{ $page_id }}</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		@yield('googlemap')
	</head>
	<body class="{{ 'body_'.$page_id }}">
		@include('layouts.header')
		<section class="content_wrap cf ">
			@yield('content')
		</section>
		
		@include('layouts.footer')
		
	</body>
</html>
