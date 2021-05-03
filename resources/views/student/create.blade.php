@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/student/{{$student->id}}" method="POST">
		<div class="form-group">
			<label>reg_no</label>
			<input type="text" name="reg_no" class="form-control" value="{{$student->reg_no}}">
		</div>
		<div class="form-group">
			<label>user</label>
			<select class="form-select">
				@foreach($users as $user)
				<option value="{{$student->id}}">{{$student->name}}</option>
				@endforeach
			</select>
		</div>
	</form>
	</div>
	
</div>
@endsection