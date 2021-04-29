<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/resource/{{$resource->id}}" method="POST">
			<input type="hidden" name="_method">
			<div class="form-group">
				<label>title</label>
				<input type="text" name="title">
			</div>
			<div class="form-group">
				<label>description</label>
				<textarea name="description" class="form-control" rows="5">{{$resource->description</textarea>
			</div>
			<div class="form-group">
				<label>page</label>
				<select class="form-select" name="page_id">
					@foreach($pages as $page)
					@if($page->id==$resource->page_id)
					<option value="{{$page->id}}" selected="selected">{{$page->title}}</option>
					@else
					<option value="{{$page->id}}">{{$page->title}}</option>
				</select>
			</div>
		</form>
	</div>
</div>
