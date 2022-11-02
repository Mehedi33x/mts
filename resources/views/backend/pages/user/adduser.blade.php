@extends('backend.master')
@section('content')
<div>
  <label for="name">User Name</label>
  <input id="name" type="text" class="form-control" name="user_name">
  <label for="password">Password</label>
  <input id="password" type="password" class="form-control" name="password">
  <label for="email">Email</label>
  <input id="email" type="email" class="form-control" name="email">
  <button type="submit" class="btn btn-info mt-2" >Submit</button>
  
</div>



@endsection