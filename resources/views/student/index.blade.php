
@extends('layouts.app')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4>Students</h4></div>	
	</div>
	
</div>
<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/student/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>reg no</th>
					<th>user</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($students as $student)
				<tr>
					<td>{{$student->user->name}}</td>
				
					<td>{{$student->reg_no}}</td>
					
					<td><a href="/student/{{$student->id" class="btn btn-sm btn-success">VIEW</a></td>
				</tr>
					@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection