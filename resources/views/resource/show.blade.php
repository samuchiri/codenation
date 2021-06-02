extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
				<th>#</th>
				<tr><th>title</th><td>{{$resource->title}}</td></tr>
				<tr><th>description</th><td>{{$resource->description}}</td></tr>
				<tr><th>type</th><td>{{$resource->type}}</td></tr>
				<tr><th>url</th><td>{{$resource->url}}</td></tr>
				<tr><th>page</th><td>{{$resource->page->title}}</td></tr>
		</table>
		<div class="form-group">
		<a href="/resource/{{$resource->id}}/edit" class="btn btn-sm btn-succes">EDIT RESOURCE</a>
			<form action="/resource/{{$resource->id}}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				<button class="btn btn-sm btn-danger" type="submit">DELETE RESOURCE?</button>
			</form>
		</div>

	</div>
</div>
@endsection
