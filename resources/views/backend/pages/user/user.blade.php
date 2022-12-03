@extends('backend.master')
@section('content')

<!-- session message -->

  @if(session()->has('message'))
  <div class="alert alert-success">
  {{session()->get('message')}}
  </div>
  @endif


<!-- Heading Text -->
<h1>User List</h1>

<!-- Button trigger modal -->
<p style='float:right; display:inline-block'>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#user">
 Add new user
</button></p>


<!-- Modal and Form -->
<form action="{{route('user.submit')}}" method="post">
@csrf
<div class="modal fade" id="user" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="userLabel">Add New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="name">User Name</label>
  <input id="name" type="text" class="form-control" name="name" required> <br>
  <label for="email">Email</label>
<input id="email" type="email" class="form-control" name="email" required> <br>
  <label for="contact">Contact</label>
  <input id="contact" type="text" class="form-control" name="contact" required><br>
  <label for="address">Address</label>
  <input id="address" type="text" class="form-control" name="address"><br>
  <label for="password">Password</label>
  <input id="password" type="password" class="form-control" name="password" required>
  <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- tablee -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th> 
      <th scope="col">Name</th> 
      <th scope="col">Email</th> 
      <th scope="col">Contact</th> 
      <th scope="col">Address</th> 
      <th scope="col">Action</th> 
    </tr>
  </thead>
<tbody>
  @foreach($user as $key=>$data)
  <tr>
    <td scope="col">{{$key+1}}</td>
    <td scope="col">{{$data->name}}</td>
    <td scope="col">{{$data->email}}</td>
    <td scope="col">{{$data->contact}}</td>
    <td scope="col">{{$data->address}}</td>
    <td scope="col">
      <a href="{{route('user.view',$data->id)}}" class="btn btn-info">View</a>
      <a href="" class="btn btn-secondary">Edit</a>
      <a href="{{route('user.delete',$data->id)}}" class="btn btn-danger">Delete</a>
    </td>

  </tr>
  @endforeach
</tbody>
</table>

@endsection

