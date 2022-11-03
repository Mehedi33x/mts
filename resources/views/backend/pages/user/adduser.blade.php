@extends('backend.master')
@section('content')
<div>
  <form action="{{route('user.submit')}}" method="POST">
  @csrf
  <label for="name">User Name</label>
  <input id="name" type="text" class="form-control" name="name">
  <label for="email">Email</label>
  <input id="email" type="email" class="form-control" name="email">
  <label for="password">Password</label>
  <input id="password" type="password" class="form-control" name="password">
  
  <button type="submit" class="btn btn-info mt-2" >Submit</button>
</form>
</div>
  



@endsection