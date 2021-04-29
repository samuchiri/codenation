<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/student/{{$student->id}}" class="btn btn-sm btn-success">
			<input type="hidden" name="_method">
			<div class="form-group">
				<label>user</label>
				<select class="form-select" name="user_id">
				@foreach($users as $user)
				@if($user->id==$student->user_id)
					<option value="{{$user->id}}" selected="selected">{{user->name}}</option>
					@else
					<option value="{{user->id}}">{{$user->name}}</option>
					@endif
					@endforeach

					
				</select>
			</div>

		</form>
	</div>
</div>