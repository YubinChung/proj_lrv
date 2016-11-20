@extends('layouts.master')

@section('content')
<div class="row">

	<div class="col-md-4">
		<form>
		  <div class="form-group">
			<label for="exampleInputEmail1">Title</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="title">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Slug</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="slug">
		  </div>
		  <div class="checkbox">
			<label>
			  <input type="checkbox">Published
			</label>
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
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
	</div>
	
</div>
@endsection