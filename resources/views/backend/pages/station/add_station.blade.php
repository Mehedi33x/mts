@extends('backend.master')
@section('content')

<h1>Add New Station</h1> <br>
@csrf
<form action="{{route('train.store')}}" method="post">
    
    
   <label for="name">Station Name</label>
   <input id="name" input type="text" class="form-control" name='name' required>

   <label for="seats">Location</label>
   <input id="seats" input type="text" class="form-control" name='seats'required>
   <label for="from">Tel-Number</label>
   <input id="from" input type="text" class="form-control" name='from'required>
   <label for="to">Route</label>
   <input id="to" input type="text" class="form-control" name='to'required>
   <label for="to">From</label>
   <input id="to" input type="text" class="form-control" name='to'required>
   <label for="to">To</label>
   <input id="to" input type="text" class="form-control" name='to'required>
   <label for="cars">Station Status</label>
<select id="cars" class="form-control" name='status'>
  <option value="active">Active</option>
  <option value="inactive">Inactive</option>
</select> <br>
  <button type="submit" class="btn btn-success mt-2" >Submit</button>
</form>
@endsection