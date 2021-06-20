@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
			<form action="/role" method="POST">
				@csrf
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" title="name" class="form-control">
				</div>
				<strong>permission</strong>
				@foreach($permissions->chunk(2) as $chunk)
				<div class="col-sm-6">
					@foreach($chunk as $permission)
					<div class="custom-control custom-switch">
						<input type="checkbox" name="permission[]" value="{{$permission->name}}" class="custom-control-input" checked="checked" id="{{implode('-',explode(' ',$permission->name))}}">
						<label class="custom-control-label" for="{{implode('-',explode(' ',$permission->name}}">
							{{ucfirst->($permission->name)}}</label>
						
					</div>
				</div>
				@endforeach
				@endforeach
			</form>
		</div>
		<div class="form-group">
			<button class="btn btn-sm btn-success" type="submit">SAVE</button>
		</div>
	</div>
</div>
@endsection
