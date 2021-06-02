@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
	<div class="col-sm-10">
		<form action="/user/{{$user->id}}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control value="{{$user->name}}">
			</div>
			<div class="form-group">
				<label>Roles</label>
				<select name="role_id" class="form-control" id="role_id" required="required">
					@foreach($roles as $role)
					@if($role->id == $user->role_id)
					<option value="{{$role->id}}" selected="selected">{{$role->name}}</option>
					@else
					<option value="{{$role->id}}">{{$role->name}}</option>
					@endif
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="{{$user->email}}">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="email" name="phone" class="form-control" value="{{$user->phone}}">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
				@error('password')<span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
			</div>
	
			<div id="permissions">
				@foreach($permissions->chunk(4) as $chunk)
				<div class="row">
				   @foreach($chunk as $permission)
					<div class="col-sm-3">
					<div class="custom-control custom-switch">
						@if($user->hasPermissionTo($permission->name))
						<input type="checkbox" class="custom-control-input" id="{{implode('-',explode(' ',$permission->name))}}" name="permissions[]" value="{{$permission->name}}" checked="checked">
						@else
						<input type="checkbox" class="custom-control-input" id="{{implode('-',explode(' ',$permission->name))}}" name="permissions[]" value="{{$permission->name}}">
						@endif
						<label class="custom-control-label" for="{{implode('-',explode(' ',$permission->name))}}">{{ ucfirst($permission->name) }}</label>
					</div>
					</div>
				@endforeach
				</div>
				@endforeach
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-sm btn-success">Update</button>
			</div>
		</form>

	</div>
</div>
</div>
@endsection

<!-- @section('scripts')
<script type="text/javascript">
 var rootPath='';
 $(document).on('change', '#role_id', function(){
    checkPermissions();
    });
 $(document).ready(function() {
    /* checkPermissions();*/
     });

 function checkPermissions(){
    var id= $('#role_id').val();
        $.ajax({
                url: rootPath + '/role/select/'+id,
                type: "GET", 
                success: function(data){
                    var data = $(data); 
                    $('#permissions').fadeOut().empty().html(data).fadeIn();    
                }
            });
    }
</script>
@endsection -->
