@extends('layouts.app')
@section('content')
<div class="container">
		<div class="col-sm-6">
		<form action="/user" method="POST">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
		
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Roles</label>
				<select name="role_id" class="form-select " required="required">
					@foreach($roles as $role)
					<option value="{{$role->id}}">{{$role->name}}</option>
					@endforeach
				</select>
	
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" >
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-sm btn-success">Save</button>
			</div>
		</form>

	</div>
</div>
	
</div>
 @endsection