@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/module/{{$module->id}}" method="POST">
    <div class="form-group">
     <label>title</label>
     <input type="text" name="title" class="form-control" value="{{$exam->title}}">
    </div class="form-group">
     <label>description</label>
     <textarea name="description" class="form-control" rows="6" value="{{$exam->description}}">
    </div>
    <div class="form-group">
    <label>course</label>
     <select class="form-select" name="course_id">
     @foreach($courses as $course)
     <option value="{{$course->id}}">{{$course->name}}</option>
     @endforeach
    </div>
 
 </div>

</div>
@endsection