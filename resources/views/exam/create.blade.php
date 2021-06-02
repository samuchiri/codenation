@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
<div class="col-sm-6">
 <form action="/exam/" method="POST">
  <div class="form-group">
  <label>student</label>
  <input type="text" name="student" class="form-control" >
  </div>
  <div class="form-group">
  <label>marked by</label>
  <input type="text" name="marked_by" class="form-control">
  </div>
  <div class="form-control">
   <label>quiz</label>
    <select class="form-select" name="quiz_id">
    @foreach($quizzes as $quiz)
     <option>title</option>
     @endforeach
   </select>
  </div>
</form>

</div>
</div>
@endsection