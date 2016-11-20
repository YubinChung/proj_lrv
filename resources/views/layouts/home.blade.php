@extends('layouts.master')

@section('home_emailus')
<h5 class="emailus"><span>Email Us</span><a href="info@business.com">info@business.com</a></h5>
@endsection

@section('content')
<div class="main_img_wrap">
	<div class="inner">
		<h2>Your Dream House</h2>
		<p>If you dream of designing a new home that takes full advantage <br>of the unique geography and views of land taht you love</p>
		<span>
			<a href="#" title="Our Services" class="btn_st1">Our Services</a>
			<a href="#" title="Get a Quote" class="btn_st2">Get a Quote</a>
		</span>
		<div class="row article_wrap cf">
			@foreach($services as $service)
			{{ url(Config::get('app.image.main').$service->images) }}
			
			
			<article>
				<a href="" class="video" title="video play">
					<figure><img src="" alt="{{ $service->title }}"></figure>
				</a>
				<h3>{{$service->title}}</h3>
				<p>{{$service->desc}}</p>
				<a href="#" class="col_y">Read More</a>
			</article>
			
			@endforeach
			
		</div>
	</div>
</div>
<div class="main_us cf">
	<div class="inner cf">
		<h3 class="tit_st1">U.S. Certified Constractors</h3>
		<div class="row text-center">
			@foreach($constructor as $post)
			<div class="col-md-4">
				<i class="{{-- $post->iconclass --}}"></i>
				<h5>{{ $post -> title }}</h5>
				<p>{{ $post -> desc }}</p>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="main_wwu cf">
	<div class="inner">
		<span>working with us</span>
		<h2>contractors &amp; construction<br>Managers since 1989</h2>
		<a href="#" title="Get a Quote" class="btn_st2">Get a Quote</a>
	</div>
</div>
<div class="main_wwd cf">
	<div class="inner">
		<h3 class="tit_st1">What We Do</h3>
		<ul class="pager">
			<li><a href="#" class="prev">&lt;</a></li>
			<li><a href="#" class="next">&gt;</a></li>
		</ul>
		<div class="row">
			{{-- @foreach($posts_about as $post)
			
			<article class="col-md-4">
				<figure><img src="" alt=""></figure>
				<h3><a href="#"></a></h3>
				<p></p>
				<a href="#" class="detail">SERVICE DETAIL</a>
			</article>
			@endforeach--}}
			
		</div>
	</div>
</div>
<div class="main_fw bg_b cf">
	<div class="inner">
		<h3 class="tit_st1">Featured Works</h3>
		{{-- {!! $posts->render() !!} --}}
		<ul class="pager">
			<li><a href="#" class="prev">&lt;</a></li>
			<li><a href="#" class="next">&gt;</a></li>
		</ul>
		<div class="row">
		
			{{-- @foreach($posts_portfolio as $post)
			
			<article class="col-md-4">
				<figure><img src="" alt=""></figure>
				<span><figcaption></figcaption>
				<a href="#" class="btn_y">Read More</a></span>
			</article>
			@endforeach --}}
		
		</div>
	</div>
</div>
<div class="main_news cf">
	<div class="inner">
		<h3 class="tit_st1">Recent News</h3>
		<ul class="pager">
			<li><a href="#" class="prev">&lt;</a></li>
			<li><a href="#" class="next">&gt;</a></li>
		</ul>
		<div class="row">
			{{-- @foreach($posts_news as $post)
			
			<article class="col-md-4">
				<figure><a href="##"><img src="" alt=""></a></figure>
				<h3><a href="##"></a></h3>
				<div class="news_meta">
					<i class="fa fa-file-text-o"></i>
					
					<i class="fa fa-comments-o">0 Comments</i>
				</div>
				<p></p>
				<a href="#" title="detail" class="btn_st3">Read more</a>
			</article>
			@endforeach --}}
			
		</div>
	</div>
</div>
<div class="row cf">
	<div class="inner">
		<div class="main_oc col-md-6">
			<div class="inner">
				<h3 class="tit_st1">Our Clients</h3>
				<div class="row">
					{{-- @foreach($posts_oc as $post)
					<div class="col-md-4">
						<a href="#"><img src="" alt=""></a>
					</div>
					@endforeach --}}
				</div>
			</div>
		</div>
		<div class="main_tm col-md-6">
			<div class="inner">
				<h3 class="tit_st1">Testimonials</h3>
				{{-- @foreach($posts_testimonials as $post)
				<div>
					<p></p>
					<span class="main_tm_profile"><img src="" alt="profile img"><h5></h5></span>
				</div>
				@endforeach --}}
			</div>
		</div>
	</div>
</div>
@endsection