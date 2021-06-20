@extends('layouts.app')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-sm-10"><h4><i class="fa fa-plus" ></i>
Create</h4></div>
		
	</div>
	
</div>
<div class="row">
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/student" method="POST">
		<div class="form-group">
			<label>Regestration number</label>
			<input type="text" name="reg_no" class="form-control" value="Registration number">
		</div>
		<div class="col-sm-6">
		<div class="form-group">
			<label>Student name</label>
			<select class="form-select" name="user_id">
				@foreach($users as $user)
				<option>{{$user->name}}</option>
				@endforeach
			</select>
		</div>	
		</div>
		<button type="submit" class="btn btn-sm btn-success">Save</button>
	</form>
	</div>
</div>
	
</div>
@endsection