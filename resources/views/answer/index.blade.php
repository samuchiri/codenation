
@extends('layouts.app')
@section('content')
<div class="row content-justify center">
	<div class="col-sm-6">
		<a href="/answer/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Instructions</th>
					<th>exam</th>
					<th>answer</th>
					<th>marking</th>
					<th>marks</th>
					<th>question</th>
					<th>correct?</th>
				</tr>
			</thead>
			<tbody>
			
				@foreach($answers as $answer)
				<tr>
					<td>{{++$i }}</td>
					<td>{{$answer->instructions}}</td>
					<td>{{$answer->exam}}</td>
					<td>{{$answer->answer}}</td>
					<td>{{$answer->marking}}</td>
					<td>{{$answer->marks}}</td>
					<td>{{$answer->question}}</td>
					<td>{{$answer->correct}}</td>
					<td><a href="/answer/{{$answer->id}}"class="btn btn-sm btn-success">VIEW</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$answers->links()}}
	</div>
</div>
@endsection
