@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/quiz/{{$quiz->id}}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>title</label>
				<input type="text" name="title" class="form-control" value="{{$update->title}}">
			</div>
			<div class="form-group">
				<label>description</label>
				<textarea name="description" class="form-control" row="5">{{$quiz->description}}</textarea>
			</div>
			<div class="form-group">
				<label>duration</label>
				<input type="time" name="duration" class="form-control" value="{{$quiz->duration}}">
			</div>
			<button type="submit" class="btn btn-sm btn-success">UPDATE</button>

		</form>
	</div>
</div>
@endsection