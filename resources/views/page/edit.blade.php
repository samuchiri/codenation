<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/page/{{$page->id}}" method="POST">
			<input type="hidden" name="_method">
			<div class="form-group">
				<label>title</label>
				<input type="text" name="title" class="form-control" value="{{$page->title}}">
			</div>
			<div class="form-group">
				<label>order</label>
				<input type="text" name="order" class="form-control" value="{{$page->order">
			</div>
			<div class="form-group">
				<label>module</label>
				<select class="form-select" name="module_id">
					@foreach($modules as $module)
					@if($module->id==$page->module->id)
					<option value="{{$module->id}}" selected="selected">{{$module->id}}</option>
					@else
					<option value="{{module->id}}">{{$module->title}}</option>
					@endif
					@endforeach
				</select>
			</div>

		</form>
	</div>
</div>
