extends('layouts.app')
@section('content')
<div class="row content-center">
	<div class="col-sm-6">
		<table class="table table-stripped table-bordered">
			<thead>
				<th>#</th>
				<tr><th>student</th><td>{{$question->student}}</td></tr>
				<tr><th>type</th><td>{{$question->type}}</td></tr>
				<tr><th>answer</th><td>{{$question->answer}}</td></tr>
				<tr><th>quiz</th><td>{{$question->quiz->title}}</td></tr>
			</thead>
			<div class="btn btn-group">
				<a href="/question/{{$question->id}}/edit" class="btn btn-sm btn-success">EDIT QUESTION</a>
				<form action="/question/{{$question->id}}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-sm btn-danger" type="submit">DELETE QUESTION?</button>
				</form>
			</div>
		</table>
	</div>
</div>
@endsection
