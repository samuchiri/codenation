@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
			<th>#</th>
			<tr><th>title</th><td></td>{{$exam->quiz->title}}</tr>
			<tr><th>student</th><td>{{$exam->student}}</td></tr>
			<tr><th>marks></th><<td>{{$exam->marks}}</td></tr>
			<tr><th>out of</th><td>{{$exam->out_of}}</td></tr>
		</table>
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