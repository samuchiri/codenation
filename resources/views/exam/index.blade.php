@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/exam/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>quiz</th>
					<th>student</th>
					<th>marks</th>
					<th>grade</th>
					<th>out of</th>
					<th>date taken</th>
					<th>date computed</th>
					<th>marked by</th>

				</tr>
			</thead>
			<tbody>
				@foreach($exams as $exam)
				<tr>
					<td>{{$exam->quiz}}</td>
					<td>{{$exam->student->name}}</td>
					<td>{{$exam->marks}}</td>
					<td>{{exam->grade}}</td>
					<td>{{$exam->out_of}}</td>
					<td>{{$exam->date_taken}}</td>
					<td>{{$exam->date_computed}}</td>
					<td>{{$exam->marked_by}}</td>
					<td><a href="/exam/{{$exam->id}}" class="btn-sm btn-success">VIEW</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
