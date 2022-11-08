@extends('backend.master')
@section('content')
 <h1>Metro Train Form</h1>
<br>
<form action="{{route('train.store')}}" method="post">
    @csrf
    
   <label for="name">Train Name</label>
   <input id="name" input type="text" class="form-control" name='name'>

   <label for="seats">Seats</label>
   <input id="seats" input type="text" class="form-control" name='seats'>

   <label for="from">From</label>
   <input id="from" input type="text" class="form-control" name='from'>

   <label for="to">To</label>
   <input id="to" input type="text" class="form-control" name='to'>

   <label for="cars">Train Status</label>

<select id="cars" class="form-control" name='status'>
  <option value="active">Active</option>
  <option value="inactive">Inactive</option>
</select> <br>
  <button type="submit" class="btn btn-success mt-2" >Submit</button>
</form>
@endsection