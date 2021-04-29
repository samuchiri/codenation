<div class="row content-justify-center">
 <div class="col-sm-6">
  <a href="/studentcourse/create" class="btn btn-sm btn-success">CREATE STUDENT</a>
   <table class="table table-bordered">
    <thead>
     <tr>
      <th>#</th>
      <th>course</th>
      <th>student</th>
     </tr>
    <tbody>
     <tr>
      <td>{{$studentcourse->id}}</td>
      <td>{{$studentcourse->course->name}}</td>
      <td>{{$studentcourse->student->reg_no}}</td>
     </tr>
    </tbody>
    </thead>
   </table>
 </div>
</div>