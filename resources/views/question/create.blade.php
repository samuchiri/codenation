@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/question" method="POST">
			<div class="form-group">
				<label>student</label>
				<input type="text" name="student" class="form-control">
				<!-- we won't have the value attribute -->
			</div>
			<div class="form-group">
				<label>type</label>
				<select name="type" class="form-select">
					<option>Multiple choice</option>
					<option>Essay</option>
				</select>
			</div>
			<div class="form-group">
				<label>quiz</label>
				<select class="form-select" name="quiz_id">
					@foreach($quizzes as $quiz)
					<option value="{{$quiz->id}}" name="quiz">{{$quiz->title}}</option>
					@endforeach
					
				</select>
			</div>

		</form>
	</div>
</div>
@endsection