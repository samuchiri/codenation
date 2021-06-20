@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
			<table>
				<tr><th>course</th><td>{{$module->course->name}}</td></tr>
				<tr><th>title</th><td>{{$module->title}}</td></tr>
				<tr><th>description</th><td>{{$module->description}}</td></tr>
			</table>
			<div class="btn btn-group">
				<a href="/module/{{$module->id}}/edit" class="btn btn-sm btn-success">EDIT MODULE</a>
				<form action="/module/{{$module->id}}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-sm btn-danger" type="submit">DELETE MODULE?</button>
				</form>
			</div>
		</table>
	</div>
</div>
@endsection