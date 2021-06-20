@extends('layouts.app')
@section('content')
<div class="row content-justify">
	<div class="col-sm-6">
		<form action="/studentcourse/{{$studentcourse->id}}" method="POST">
			<input type="hidden" name="_method">
			<div class="form-group">
				<label>course</label>
				<select class="form-select" name="course_id">
					@foreach($courses as $course)
					@if($course->id==$studentcourses->course_id)
					<option value="{{$course->id}}" selected="selected">{{$course->id}}</option>
					@else
					<option value="{{course->id}}">{{$course->name}}</option>
					@endif
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>student</label>
				<select class="form-select" name="student_id">
					@foreach($students as $student)
					@if($student->id==studentcourse->student_id)
					<option value="{{$student->id}}" selected="selected">{{$student->reg_no}}</option>
					@else
					<option value="{{$student->id}}">{{$student->reg_no}}</option>
					@endif
					@endforeach
				</select>
			</div>
	</div>
</div>
@endsection
