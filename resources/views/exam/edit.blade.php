@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-9">
		<form action="/exam/{{$exam->id}}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>student</label>
				<!-- student','marks','grade','out_of','date_taken', -->
				<input type="text" name="name" class="form-control" value="{{$exam->student}}">
			</div>
			<div class="form-group">
				<label>marks</label>
				<input type="text" name="marks" class="form-control" value="{{$exam->marks}}">
			</div>
			<div class="form-group">
				<label>grade</label>
				<input type="text" name="grade" class="form-control" value="{{$exam->grade}}">
			<div class="form-group">
				<label>quiz</label>
				<select class="form-select" name="quiz_id">
					@foreach($quizzes as $quiz)
					@if($quiz->id==$exam->quiz_id)
					<option value="{{$quiz->id}}" selected="selected">{{$quiz->title}}</option>
					@else
					<option value="{{$quiz->id}}">{{quiz->title}}</option>
					@endif
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>date taken</label>
				<input type="date" name="date" class="form-control" value="{{$exam->date}}">
			</div>	
			</div>
		</form>
	</div>
</div>
@endsection