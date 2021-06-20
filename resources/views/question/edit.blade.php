@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/question/{{$question->id}}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>student</label>
				<input type="text" name="student" class="form-control" value="{{$student->name}}">
			<div class="form-group">
				<label>answer</label>
				<input type="text" name="answer" class="form-control" value="{{$answer->marks}}">
			</div>
				<div class="form-group">
					<label>quiz</label>
					<select class="form-select" name="quiz_id">
						@foreach($quizzes as $quiz)
						@if($quiz->id==$question->quiz_id)
						<option value="{{$quiz->id}}" selected="selected">{{$quiz->title}}</option>
						@else
						<option value="{{$quiz->id}}">{{quiz->title}}</option>
						<!-- If quiz id is the same as quiz_id in the question, it's selected. 
						If not then it's not
						selected. It will still pull the quiz->title. -->
						@endif
						@endforeach
					</select>	
				</div>	
			</div>
		</form>
		
	</div>
</div>
@endsection