@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/dynamic_pdf" method="POST">
			<div class="form-group">
				<label>registration number</label>
				<input type="text" name="reg_no" value="{{$student->reg_no}}" class="form-control">
			<div class="form-group">
				<label>user</label>
				<select class="form-select" name="user_id" id="user_id">
					@foreach($users as $user)
					<option value="{{$user->id}}" selected="selected">{{user->name}}</option>
					@endforeach
				</select>
			</div>
			</div>
		</form>
	</div>
</div>
@endsection