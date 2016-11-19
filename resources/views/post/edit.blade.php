@extends('post.master')

@section('content')
<h2>글 수정하기</h2>
<form method="post" action="{{ route('post.update', $post->id) }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="put">
	<div class="form_group">
		<label for="title" name="title">제목</label>
		<input type="text" name="title" class="form_control" value="{{ $post->title}}" />
	</div>
	<div class="form_group">
		<label for="body" name="body">내용</label>
		<textarea name="body" id="" cols="30" rows="10" class="form_control">{{ $post->body }}</textarea>
	</div>
	<div class="form_group">
		<input type="submit" value="수정하기" class="btn_btn_primary">
	</div>
</form>
@endsection