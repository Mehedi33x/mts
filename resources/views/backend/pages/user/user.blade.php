@extends('backend.master')
@section('content')
<h1>User List</h1>

<a href="{{route('user.add')}}">
  <p style='float:right; display:inline-block'>
  <input type="button" class="btn btn-success" value="Add New User" />
</p>

</a><br><br>

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
      <a href="" class="btn btn-danger">Delete</a>
      <a href="" class="btn btn-info">Update</a>
      <a href="" class="btn btn-secondary">Edit</a>
    </td>

  </tr>
  @endforeach
</tbody>
</table>

@endsection