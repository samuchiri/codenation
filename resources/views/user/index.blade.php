@extends('layouts.app')
@section('content')
<div class="container">
<div class="header">
	
</div>
<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
       <th scope="col">Email</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        <a href="/user/{{$user->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 @endsection