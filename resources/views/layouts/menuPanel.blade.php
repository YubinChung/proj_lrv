@extends('layouts.master')

@section('sortable')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
	$( "#sortable" ).sortable({
		placeholder: "ui-state-highlight",
		classes: {
			"ui-sortable-handle:focus": "active"
		}
		
	});
	$( "#sortable" ).disableSelection().mouseup(function(){
		var $buttonVal = $(".ui-sortable-handle button[type='submit']" ).val();
		console.log($buttonVal);
	});
	
//	$( "#sortable" ).disableSelection().mouseup(function(){
//		$buttonVal = $this.val('button[type="submit"]');
//		console.log($buttonVal);
//	});
});
	
function idDuplicationCheck (order) {  
// Ajax 통신으로 서버에 Data를 전송하고 Return 받습니다.
$.ajax({
	// type을 설정합니다.
	type : 'POST',
	url : "/menu",
	data : {"order" : order},
	success : function (data) {
		// 서버에서 Return된 값으로 중복 여부를 사용자에게 알려줍니다.
		if (data) {
			alert("사용할 수 없는 아이디 입니다."); 
		} else {
			alert("사용 가능한 아이디 입니다.");
		}             
	} 

});
}
</script>
@endsection

@section('content')
<div class="inner">
	
	<div class="row">
		<div class="col-md-4">
			<form action="/menu" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<div class="form-group">
				<label for="exampleInputEmail1">Title</label>
				<input type="text" name="title" class="form-control" placeholder="{{ $errors->has('title')? old('title'):'title'}}" value="" class="menu_title">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Slug</label>
				<input type="text" name="slug" class="form-control"  placeholder="{{ $errors->has('title')? old('slug'):'slug'}}" value="">
			</div>
			<div class="checkbox">
			<label><input type="checkbox" name="status">Published</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
			</form>
			@foreach ($errors->all() as $message)
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span>{{ $message }}</span>
			</div>
			
			@endforeach
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>order</th>
						<th>TITLE</th>
						<th>SLUG</th>
						<th>PUBLISH</th>
						<th>DELETE</th>
					</tr>
				</thead>
				<tbody id="sortable">
					@foreach( $menuspanel as $menupanel )
					<tr>
						<th>{{ $menupanel -> order }} </th>
						<td>{{ucfirst($menupanel-> title)}}</td>
						<td>{{ ( '/'.$menupanel->slug )}}</td>
						<td>{{ $menupanel -> status}}</td>
						<td>
							<form action="/menu/delete" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="delete">
							<button type="submit" class="btn btn-default" name="delete" value="{{ $menupanel -> id }}">Delete</button>
							</form>
						</td>
					<tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>
	
</div>
<script>
	
	$(document).ready(function(){
		
		
//		$('.btn_edit').click(function(){
//			//var $input_title = $("input[name='title']");
//			$(".menu_title").attr("value", function(){
//				return "{{ $menupanel -> title}}";
//			})
//		});	
	});
</script>
@endsection