@extends('layouts.app')
@section('content')
<div class="row content-justify center">
	<div class="col-sm-6">
		<a href="/page/create" class="btn btn-sm btn-success">CREATE</a>
		<table>
			<thead>
				<tr>
					<th>module</th>
					<th>title</th>
					<th>notes</th>
					<th>order</th>
					<th>quiz</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pages as $page)
				<tr>
					<td>{{$page->module->title}}</td>
					<td>{{$page->title}}</td>
					<td>{{$page->notes}}</td>
					<td>{{$page->order}}</td>
					<td>{{$page->quiz->title}}</td>
					<td><a href="/page/{{$page->id}}" class="btn btn-sm btn-success">VIEW</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
