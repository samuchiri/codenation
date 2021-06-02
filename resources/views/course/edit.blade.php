@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-9">
		<form action="/course/{{$course->id}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>Name</label>

				<input  class="form-control" type="text" name="name" value="{{$course->name}}">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input  class="form-control" type="text" name="description" value="{{$course->description}}">
			</div>
			<div class="form-group">
				<label>Image</label>
				<input  class="form-control" type="file" name="image" value="{{$course->image}}">
			</div>
			
			<button class="btn btn-sm btn-success" type="submit">update</button>
		</form>
	</div>
</div>
@endsection