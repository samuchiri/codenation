@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
	<tbody>
		<table class="table table-bordered">
			<th>#</th>
			<tr><th>Title</th><td></td>{{$exam->quiz->title}}</tr>
			<tr><th>Student</th><td>{{$exam->student}}</td></tr>
			<tr><th>Marks></th><<td>{{$exam->marks}}</td></tr>
			<tr><th>Out of</th><td>{{$exam->out_of}}</td></tr>
		</table>
	</tbody>
		<div class="btn btn-group">
		<a href="/exam/{{$exam->id}}/edit" class="btn btn-sm btn-success">EDIT EXAM</a>
		<form action="{{$exam->id}}" method="POST">
			<input type="hidden" name="_method" value="DELETE">
			<button class="btn btn-sm btn-success" type="submit">DELETE EXAM?</button>
		</div>
		</form>
	</div>
</div>
@endsection