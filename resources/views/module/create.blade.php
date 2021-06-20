@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/module/" method="POST">
    <div class="form-group">
     <label>title</label>
     <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>description</label>
        <textarea name="description" class="form-control" rows="6">description</textarea>
    </div>
    <div class="form-group">
    <label>course</label>
     <select class="form-select" name="course_id">
     @foreach($courses as $course)
     <option>name</option>
     @endforeach
    </div>
 
 </div>

</div>
@endsection