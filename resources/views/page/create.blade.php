@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/page/{{$page->id}}" method="POST">
   <div class="form-group">
   <label>title</label>
   <input type="text" name="title" class="form-control" value="{{$page->title}}">
   </div>
   <div class="form-group">
   <label>notes</label>
   <input type="file" class="form-control" name="notes" value="{{$page->notes}}">
   </div>
   <div class="form-group">
   <label>module</label>
   <select class="form-select" name="module_id">
   @foreach($modules as $module)
   <option value="{{module->id}}">{{$module->title}}</option>
   @endforeach
   </div>
</form>
 </div>
</div>
@endsection
