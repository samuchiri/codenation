
@extends('layouts.app')
@section('content')<div class="row content-justify-center">
  <div class="col-sm-6">
    <div class="form-group">
    <label>title</label>
    <input type="text" name="title" class="form-control" value="{{$quiz->id}}">
    </div>
    <div class="form-group">
    <label>description</label>
    <textarea name="description" class="form-control" row="7">{{$quiz->description}}</textarea>
    <div class="form-group">
    <label>duration</label>
    <input type="time" name="duration" class="form-control" value="{{$quiz->duration}}"> 

  </div>
</div>
@endsection
