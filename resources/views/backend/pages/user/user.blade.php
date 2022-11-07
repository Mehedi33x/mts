@extends('backend.master')
@section('content')
<h1>User List</h1>

<a href="{{route('user.add')}}"><p align="right">
  <input type="button" class="btn btn-success" value="Add New User" />
</p>

</a><br><br>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th> 
      <th scope="col">Name</th> 
      <th scope="col">Email</th> 
      <th scope="col">Contact</th> 
      <th scope="col">Address</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rahim</td>
      <td>Rahim@gmail.com</td>
      <td>015248924</td>
      <td>Gazipur,Dhaka</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Karim</td>
      <td>Karim@gmail.com</td>
      <td>018248924</td>
      <td>Tongi,Dhaka</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Monir</td>
      <td>Monir@gmail.com</td>
      <td>017248924</td>
      <td>Mirpur,Dhaka</td>
    </tr>
  </tbody>
</table>
</tbody>
</table>

@endsection