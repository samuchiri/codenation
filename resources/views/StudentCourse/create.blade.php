@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/studentcourse/create">
			<div class="form-group">
				<label>course</label>
				<select class="form-select" name="course_id">
					@foreach($courses as $course)
					<option value="{{$course->id}}">{{$course->name}}</option>
					@endforeach
				</select>
			</div>	
			<div class="form-group">
				<label>student</label>
				<select class="form-select" name="student_id">
					@foreach($students as $student)
					<option value="{{$student->id}}">{{$student->reg_no}}</option>
					@endforeach
				</select>
			</div><br>
			<button type="submit" class="btn btn-sm btn-success">CREATE STUDENT COURSE</button>
		</form>
	</div>
</div>
@endsection