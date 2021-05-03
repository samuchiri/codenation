@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
	  <form action="/resource/{{$resource->id}}" method="POST">
		<div class="form-group">
			<label>title</label>
			<input type="text" name="title" class="form-control" value="{{$resource->title}}">
		</div>
		<div class="form-group">
			<label>url</label>
			<input type="url" name="url" class="form-control" value="{{$resource->url}}">
		</div>
		<div class="form-group">
			<label>page</label>
			<select class="form-select" name="page_id">
				@foreach($pages as $page)
				<option value="{{$page->id}}">{{$page->title}}</option>
				@endforeach
			</select>
		</div>
	</form>
	</div>
</div>
@endsection
