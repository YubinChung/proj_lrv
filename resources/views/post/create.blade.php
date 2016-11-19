@extends('post.master')
@section('content')
<h2>글 생성하기</h2>
<h3>제목</h3>
<form method="post" action="{{ route('post.index') }}" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form_group">
		<label for="title" name="title">제목</label>
		<input type="text" name="title" class="form_control" value="" />
	</div>
	<div class="form_group">
		<label for="body" name="body">내용</label>
		<textarea name="body" id="" cols="30" rows="10" class="form_control"></textarea>
	</div>
	<div class="form_group">
		<input type="submit" value="생성하기" class="btn btn_primary">
	</div>
</form>

@if($errors->any()) 
<div class="alert alert-danger" role="alert">
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	<span class="sr-only">Error :</span>
	@foreach ($errors->all() as $message)
	{{ $message }}
	@endforeach
</div>

@endif

@endsection