@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/role/{{$role->id}}" method="POST">
		<label>name</label>
		<input type="text" name="name" class="form-control" title="name">
		<strong>permissions</strong>
		@foreach($permissions->chunk(4) as $chunk)
    <div class="row">
    @foreach($chunk as $permission)
    <div class="col-sm-3">
    <label class="label label-success">
        @if($role->hasPermissionTo($permission->name))
        <i class="fa fa-check"></i> 
        @else
        <i class="fa fa-times"></i> 
        @endif
        {{ $permission->name }}</label>
    </div>
    @endforeach
    </div>
    @endforeach
				
			</div>

		</div>
		</form>
	</div>
</div>
@endsection
