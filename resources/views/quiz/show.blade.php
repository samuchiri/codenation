extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
				<th>#</th>
				<tr><th>title</th><td>{{$quiz->title}}</td></tr>
				<tr><th>duration</th><td>{{$</td></tr>
				<tr><th>total marks</th><td></td></tr>
				<tr><th>description</th><td></td></tr>

		</table>
		<a href="/quiz/{{$quiz->id}}/edit" class="btn btn-sm btn-sm">EDIT QUIZ</a>
			<form action="/quiz/{{$quiz->id}}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-sm btn-danger" type="submit">DELETE QUIZ?</button>
			</form>
	</div>
</div>
@endsection