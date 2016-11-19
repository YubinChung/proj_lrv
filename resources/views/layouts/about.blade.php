@extends('layouts.master')

@section('content')
<div class="inner">
	<div class="row">
		@foreach($posts as $post)
		<article class="col-md-4">
			
			<figure><a href="##"><img src="uploads/thumb/{{ $post->thumbnail }}" alt="{{ $post->title }} image"></a></figure>
			<h3><a href="##">{{ $post->title }}</a></h3>
				<p>{{ $post->body }}</p>
			<a href="#" title="detail">VIEW SERVICE DETAIL</a>
			
		</article>
		@endforeach

	</div>
	{!! $posts->render() !!}
</div>
@endsection