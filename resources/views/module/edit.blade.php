@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/module/{{$module->id}}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>title</label>
				<input type="text" name="title" class="form-control" value="{{$module->title}}">
			</div>
			<div class="form-group">
				<label>description</label>
				<textarea name="description" class="form-control" row="5">{{$module->description}}</textarea>
			</div>
			<div class="form-group">
				<label>course</label>
				<select class="form-select" name="course_id">
					@foreach($courses as $course)
					@if($course->id==$module->course_id)
					<option value="{{$module->id}}" name="course_id">{{$course-title}}</option>
					@else
					<option value="{{$module->id}}">{{course->title></option>
					@endif
					@endforeach
				</select>
			</div>


		</form>
	</div>
</div>
@endsection
