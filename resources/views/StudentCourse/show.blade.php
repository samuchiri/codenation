@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
			<tr><th>course</th><td>{{$studentcourse->course}}</td></tr>
			<tr><th>student</th><td>{{$studentcourse->student}}</td></tr>
		</table>
		<a href="/studentcourse/{{$studentcourse-id}}/edit" class="btn btn-sm btn-success">EDIT STUDENTCOURSE?</a>
		<form action="/studentcourse/{{$studentcourse->id}}" method="POST">
			<input type="hidden" name="_method" value="DELETE">
			<button class="btn btn-sm btn-danger" type="submit">DELETE</button>
		</form>
	</div>
</div>
@endsection