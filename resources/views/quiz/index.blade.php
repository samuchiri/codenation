@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<div class="form-group">
			<a href="/quiz/create" class="btn btn-sm btn-success">CREATE QUIZ</a>
			<table class="table table-bordered">
				<thead>
					<tr>
						<!-- <th>#</th> -->
						<th>title</th>
						<th>description</th>
						<th>duration</th>
						<th>total marks</th>
					</tr>
				</thead>
				<tbody>
					@foreach($quizzes as $quiz)
					<tr>
						<!-- <td>{{$quiz->id}}</td> -->
						<td>{{$quiz->title}}</td>
						<td>{{$quiz->description}}</td>
						<td>{{$quiz->duration}}</td>
						<td>{{$quiz->total_marks}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection

