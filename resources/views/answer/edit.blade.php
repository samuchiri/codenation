
<div class="row content-justify-center">
	<div class="col-sm-9">
		<form action="/answer/{{$answer->id}}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>exam</label>
				<select class="form-select" name="exam_id">
					@foreach($exams as $exam)
					@if($exam->id==answer->exam_id)
					<option value="{{$exam->id}}" selected="selected">{{$exam->quiz->title}}</option>
					@else
					<option value="{{exam->id}}">{{$exam-quiz}}</option>
					@endif
					@endforeach
				</select>
			<div class="form-group">
				<label>question</label>
				<select class="form-select" name="question_id">
					@foreach($questions as $question)
					@if($question->id==$answer->question_id)
					<option value="{{$question->id}}" selected="selected">{{$question->quiz->title}}</option>
					@else
					<option value="{{$question->id}}">{{$question->quiz}}</option>
					@endif
					@endforeach
				</select>
			</div>	
			<div class="form-group">
				<button class="form-control btn -btn success " >Update</button>
				
			</div>

			</div>
		</form>
	</div>
</div>