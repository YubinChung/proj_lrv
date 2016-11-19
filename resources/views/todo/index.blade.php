<!DOCTYPE>
<html>
	<head>
		<title>라라벨 Todo list</title>
	</head>
	
</html>
<body>
	<h3>할 일 만들기 폼</h3>
	<form action="/todo" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="">할 일</label>
		<input type="text" name="title">
		<input type="submit">
		
	</form>
	
	@foreach($todos as $todo)
	<div>
		@if($todo->done == 1)
		<span style="text-decoration:line-through">
		@endif
		
		{{ $todo['title'] }}
		
		@if($todo->done == 1)
		</span>
		@endif
		
		<form action="/todo/done/{{ $todo-> id }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" value="<?php echo $todo->done == 1 ? "취소" : "완료"?>">
		</form>
		
		<form action="/todo/{{ $todo-> id }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" value="삭제">
		</form>
	</div>
	@endforeach
		
</body>