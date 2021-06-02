@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <a href="/studentcourse/create" class="btn btn-sm btn-success">CREATE STUDENT</a>
   <table class="table table-bordered">
    <thead>
     <tr>
      <th>course</th>
      <th>student</th>
     </tr>
    <tbody>
      @foreach($studentcourses as $studentcourse)
     <tr>
      <td>{{$studentcourses->course->name}}</td>
      <td>{{$studentcourses->student->reg_no}}</td>
      <td><a href="/studentcourse/{{$studentcourse->id}}" class="btn btn-sm btn-success">VIEW</a>
     </tr>
     @endforeach
    </tbody>
    </thead>
   </table>
 </div>
</div>
@endsection