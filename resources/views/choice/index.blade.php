<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/choice/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>question</th>
					<th>choice</th>
				</tr>
			</thead>
			<tbody>
				@foreach($choices as $choice)
				<tr>
					<td>{{$course->question}}</td>
					<td>{{$course->choice}}</td>
					<td><a href="/choice/{{$choice->id}}" class="btn btn-sm btn-success">VIEW</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>