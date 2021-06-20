@extends('layouts.app')
@section('content')


<div class="row cotent-justify-center">
	<div class="col-sm-6">
		<a href="/resource/create" class="btn btn-sm btn-success">CREATE RESOURCE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>page</th>
					<th>type</th>
					<th>title</th>
					<th>description</th>
					<th>url</th>
				</tr>
			</thead>
			<tbody>
				@foreach($resources as $resource)
				<tr>
					<td>{{$resource->page}}</td>
					<td>{{$resource->type}}</td>
					<td>{{$resource->title}}</td>
					<td>{{$resource->description}}</td>
					<td>{{$resource->url}}</td>
					<td><a href="/resource/{{$resource->id}}" class="btn btn-sm btn-success">VIEW</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection



