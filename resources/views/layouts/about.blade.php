@extends('layouts.master')

@section('content')
<div class="inner">
	<div class="row">
		@foreach($abouts as $about)
		<article class="col-md-4">
			<figure><a href="##"><img src="{{ url(Config::get('app.image.main').$about->images->name) }}" alt="{{ $about->title }} image"></a></figure>
			<h3><a href="##">{{ $about->title }}</a></h3>
				<p>{{ $about->desc }}</p>
			<a href="#" title="detail">VIEW SERVICE DETAIL</a>
		</article>
		@endforeach

	</div>
	{!! $abouts->render() !!}
</div>
@endsection