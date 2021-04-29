<div class="row content-jusify-center">
	<div class="col-sm-6">
		<a href="/course/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>name</th>
					<th>description</th>
					<th>image</th>
				</tr>
			</thead>
			<tbody>
				@foreach($courses as $course)
				<tr>
					<td>{{$course->name}}</td>
					<td>{{$course->description</td>
					<td>{{$course->image}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
