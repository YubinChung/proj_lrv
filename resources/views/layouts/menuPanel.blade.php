@extends('layouts.master')

@section('content')
<div class="inner">
	
	<div class="row">
		<div class="col-md-4">
		<form action="/menu" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="exampleInputEmail1">Title</label>
				<input type="text" name="title" class="form-control" placeholder="title">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Slug</label>
				<input type="text" name="slug" class="form-control"  placeholder="slug">
			</div>
			<div class="checkbox">
			<label><input type="checkbox" name="status" value="published">Published</label>
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
							<form action="/menu/{{ $menupanel-> id }}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="submit" value="삭제">
							</form>
						</td>
					<tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
</div>
@endsection