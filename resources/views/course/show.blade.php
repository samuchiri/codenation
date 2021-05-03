extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
			<th>#</th>
			<tr><th>name</th><td>{{$course->name}}</td></tr>
			<tr><th>description</th><td>{{$course->description</td></tr>
			<tr><th>image</th><td>{{$course->image}}</td></tr>
		</table>
		<tbody>
			<div class="btn btn-group">
				<a href="/course/{{$course->id}}/edit" class="btn btn-sm btn-success">EDIT COURSE</a>
				<form action="/course/{{$course->id}}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-sm btn-success" type="submit">DELETE COURSE?</button>
				</form>

			</div>
		</tbody>
	</div>


</div>
@endsection