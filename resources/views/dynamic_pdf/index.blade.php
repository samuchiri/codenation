@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/dynamic_pdf/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>registration number</th>
					<th>user name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $student)
				<tr>
					<td>{{$student->reg_no}}</td>
					<td>{{$student->user->name}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endforeach