<header>
	<section class="logo">
		<div class="inner">
		<h1><a href="/" class="logo" title="{{ $site_title }}">{{ $site_title }}</a></h1>
		</div>
	</section>
	<section class="sns">
		<div class="inner">
			<h5 class="tel"><span>Toll Free</span><a href="#">1.800.123.4567</a></h5>
			@yield('home_emailus')
			@include('layouts.sns')
		</div>
	</section>
	<nav>
		<div class="inner">
		<ul>
			<li class="menu_01"><a href="/">Home</a></li>
			<li class="menu_02"><a href="/about">About</a></li>
			<li class="menu_03"><a href="/portfolio">Portfolio</a></li>
			<li class="menu_04"><a href="/contact">Contact</a></li>
		</ul>
		</div>
	</nav>
	@yield('contact_header')
</header>
<section class="sub_header">
	<div class="inner">
		<h2>{{ $page_name }}</h2>
		<a href="##" title="GET IN TOUCH">GET IN TOUCH</a>
	</div>
	<div class="breadcrumb">
		<div class="inner">
			<ul>
				<li><a href="/" title="">{{ $site_title }}</a></li>
				<li><a href="##" title="">{{ $page_name }}</a></li>
			</ul>
		</div>
	</div>
	
</section>
