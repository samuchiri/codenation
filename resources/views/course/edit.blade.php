@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-9">
		<form action="/course/{{$course->id}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>Name</label>

				<input  class="form-control" type="text" name="name" value="{{old('name')}}">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input  class="form-control" type="text" name="description" value="{{old('description')}}">
			</div>
			<div class="form-group">
				<label>Image</label>
				<input  class="form-control" type="file" name="image" value="{{old('image')}}">
			</div>
			<input type="button" name="submit" value="Update">
		</form>
	</div>
</div>
@endsection