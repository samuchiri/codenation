<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/student/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>reg no</th>
					<th>user</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$student->id}}</td>
					<td>{{$student->reg_no}}</td>
					<td>{{$student->user->name}}</td>
					<td><a href="/student/{{$student->id" class="btn btn-sm btn-success">VIEW</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

