@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/question/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>quiz</th>
					<th>student</th>
					<th>type</th>
					<th>answer</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($questions as $question)
				<tr>
					<td>{{$question->quiz}}</td>
					<td>{{$question->student</td>
					<td>{{$question->type}}</td>
					<td>{{$question->answer}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection