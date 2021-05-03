@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/course/{{$course->id}}" method="POST">
    <div class="form-group">
    <label>name</label>
    <input type="text" name="name" class="form-control" value="{{$course->name}}">
    </div class="form-group">
    <label>description</label>
    <textarea name="description" class="form-control" row="5">{{$course->description}}</textarea>
    </div>
 </div>
</div>
@endsection
