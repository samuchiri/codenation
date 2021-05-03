@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
				<th>#</th>
				<tr>module<th></th><td>{{$page->module->title}}</td></tr>
				<tr>title<th></th><td>{{$page->title}}</td></tr>
				<tr>notes<th></th><td>{{$page->notes}}</td></tr>
				<tr>order<th></th><td>{{$page->order}}</td></tr>
				<tr>quiz<th></th><td>{{$page->quiz->title}}</td></tr>
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