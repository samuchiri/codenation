<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="/module/create" class="btn btn-sm btn-success">CREATE</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>course</th>
					<th>title</th>
					<th>description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$module->course}}</td>
					<td>{{$module->title}}</td>
					<td>{{$module->description}}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

