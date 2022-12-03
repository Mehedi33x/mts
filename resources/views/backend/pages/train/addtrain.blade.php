@extends('backend.master')
@section('content')
 <h1>Add a new Train</h1>
<br>
<form action="" method="post">
    @csrf
    
   <label for="name">Train Name</label>
   <input id="name" input type="text" class="form-control" name='name' required>

   <label for="seats">Seats</label>
   <input id="seats" input type="text" class="form-control" name='seats'required>

   <label for="from">From</label>
   <input id="from" input type="text" class="form-control" name='from'required>

   <label for="to">To</label>
   <input id="to" input type="text" class="form-control" name='to'required>

   <label for="cars">Train Status</label>
<select id="cars" class="form-control" name=''>
  <option value="active">Active</option>
  <option value="inactive">Inactive</option>
</select> <br>
  <button type="submit" class="btn btn-success mt-2" >Submit</button>
</form>
@endsection