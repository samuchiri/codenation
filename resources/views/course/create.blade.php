@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/course" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
    <label>name</label>
    <input type="text" name="name" class="form-control">
    </div >
    <div class="form-group">
    <label>description</label>
    <textarea name="description" class="form-control" row="5">description</textarea>	
    </div>
    <div class="form-group">
        <label>image</label>
        <input type="file" name="image1" class="form-control" >
    </div>
     <div class="form-group">
       <button type="submit" class="btn btn-sm btn-success">Save</button>
    </div>
    </div>
    </form>
 </div>
</div><br>
@endsection
