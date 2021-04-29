
<div class="row content-justify-center">
	<div class="col-sm-9">
		<form action="/answer/{{$answer->id}}" method="POST">
			
			<div class="form-group">
				<label>exam</label>
				<select class="form-select" name="exam_id">
					@foreach($exams as $exam)
					<option class="form-select">{{$exam-quiz}}</option>
					@endforeach
				</select>
			<div class="form-group">
				<label>question</label>
				<select class="form-select" name="question_id">
					@foreach($questions as $question)
				
					<option class="form-select">{{$question->quiz}}</option>
				
					@endforeach
				</select>
			</div>	

			</div>
		</form>
	</div>
</div>
<!-- IN THE CREATE PAGE, there are no selected="selected", or IF STATEMENTS @if($exam->id==answer->exam_id){ no IF STATEMENTS}
					<option value="{{$exam->id}}" selected="selected">{{$exam->quiz->title}}</option>{no no selected="selected"} tags.' -->