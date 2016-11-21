@extends('layouts.master')

@section('content')
<div class="inner">
	<ul class="sort_list">
		<li><a href="#" title="" class="active">All Projects</a></li>
		<li><a href="#" title="">Interior Design</a></li>
		<li><a href="#" title="">Education</a></li>
		<li><a href="#" title="">Green Building</a></li>
		<li><a href="#" title="">Healthcare</a></li>
		<li><a href="#" title="">Office</a></li>
	</ul>	
	<div class="row">
		@foreach($works as $work)
		<article class="col-md-4">
			<figure><img src="" alt=""></figure>
			<span><figcaption>{{ $work->title }}</figcaption>
			<a href="#" class="btn_y">Read More</a></span>
		</article>
		@endforeach
	</div>
	{!! $works->render() !!}
	</div>
@endsection