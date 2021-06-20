@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
				
				<tr><th>module</th><td>{{$page->module->title}}</td></tr>
				<tr><th>title</th><td>{{$page->title}}</td></tr>
				<tr><th>notes</th><td>{{$page->notes}}</td></tr>
				<tr><th>order</th><td>{{$page->order}}</td></tr>
				<tr><th>quiz</th><td>{{$page->quiz->title}}</td></tr>
		</table>
		<div class="btn btn-group">
			<a href="/page/{{$page->id}}/edit" class=" btn btn-sm btn-success">EDIT PAGE</a>
			<form action="/page/{{$page->id}}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				<button class="btn btn-sm btn-danger" type="submit">DELETE PAGE?</button>
			</form>	
		</div>	
	</div>
</div>
@endsection