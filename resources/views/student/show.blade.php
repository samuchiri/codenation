extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
			<th>#</th>
			<tr><th>registration number</th><td>{{$student->reg_no}}</td></tr>
			<tr><th>user</th><td>{{$student->user->name}}</td></tr>
		</table>
		<a href="/student/{{$student->id}}/edit" class="btn btn-sm btn-success">EDIT STUDENT</a>
		<form action="/student/{{$student->id}}" method="POST">
			<input type="hidden" name="_method" value="DELETE">
			<button class="btn btn-sm btn-success" type="submit">DELETE STUDENT?</button>
		</form>
	</div>
</div>
@endsection
