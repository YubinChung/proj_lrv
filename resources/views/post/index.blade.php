@extends('post.master')

@section('content')
<h1>All posts</h1>
<ul class="list_group">
	@foreach($posts as $post)
	<li class="list_group_item">
		<a href="{{ route('post.show', $post->id)}}">{{ $post->title }}</a>
	</li>
	@endforeach
	
	
</ul>
{{-- {!! $posts->render() !!}--}}

<h3>
	<a href="{{ route('post.create' )}}" class="btn btn_primary">글 작성하기</a>
</h3>


@endsection