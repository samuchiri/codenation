<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/quiz/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>title</th>
					<th>description</th>
					<th>duration</th>
					<th>total marks</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$quiz->title}}</td>
					<td>{{$quiz->description}}</td>
					<td>{{$quiz->duration}}</td>
					<td>{{$quiz->total_marks}}</td>
					<td><a href="/quiz/{{$quiz->id}}" class="btn btn-sm btn-success">VIEW</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
