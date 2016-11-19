@extends('post.master')


@section('content')

<h2>{{ $post->title }}</h2>
<div>
	{{ $post->body }}
	
	<a href="{{ route('post.edit', $post->id)}}">수정하기</a><br>
	<a href="{{ route('post.destroy', $post->id)}}">삭제하기</a>
<!--
	<form method="post" action="{{ route('post.edit', $post->id) }}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<div class="form_group">
			<input type="submit" value="수정하기" class="btn btn_primary">
		</div>
	</form>
-->
</div>
@endsection