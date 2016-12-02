@extends('layouts.master')

@section('content')
<div class="inner">
	
	<div class="row">
		<div class="col-md-4">
			<form action="/menu" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<div class="form-group">
				<label for="exampleInputEmail1">Title</label>
				<input type="text" name="title" class="form-control" placeholder="title" value="" class="menu_title">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Slug</label>
				<input type="text" name="slug" class="form-control"  placeholder="slug" value="">
			</div>
			<div class="checkbox">
			<label><input type="checkbox" name="status">Published</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>TITLE</th>
						<th>SLUG</th>
						<th>PUBLISH</th>
						<th>DELETE</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $menuspanel as $menupanel )
					<tr>
						<th>{{ $menupanel -> id }} </th>
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
//	$(document).ready(function(){
//		$('.btn_edit').click(function(){
//			//var $input_title = $("input[name='title']");
//			$(".menu_title").attr("value", function(){
//				return "{{ $menupanel -> title}}";
//			})
//		});	
//	});
</script>
@endsection